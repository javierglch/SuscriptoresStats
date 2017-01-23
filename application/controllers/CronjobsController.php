<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CronjobsController extends MY_Controller {

    const FOLDER = 'cronjobs';

    public function __construct() {
        parent::__construct(self::FOLDER);
    }

    public function p() {
        $r = $this->db->query('call suscriptores_stats.update_subs_calcualted_vars();');
        echo '<pre>' . print_r($r->conn_id->affected_rows, true);
        die();
    }

    public function update_summoners() {
        set_time_limit(0);
        error_reporting(0);

        echo '<pre>';

        $initTime = microtime(true);

        $aSuscriptores = $this->Suscriptores->getSusbsToUpdate();
        $strResult = '';
        $summonersCount = 0;
        $updateLeagueData_ok = 0;
        $updateLeagueData_error = 0;
        $updateSummaryStatsData_ok = 0;
        $updateSummaryStatsData_error = 0;
        $updateLastestGamesData_ok = 0;
        $updateLastestGamesData_error = 0;
        $updateRankedGamesData_ok = 0;
        $updateRankedGamesData_error = 0;
        $updateSummaryStatsData_inserts = 0;
        $updateSummaryStatsData_updates = 0;
        $updateLastestGamesData_inserts = 0;
        $updateRankedGamesData_inserts = 0;

        foreach ($aSuscriptores as $oSub) {
            $strResult .= ++$summonersCount . '.- Actualiando ' . $oSub->getSummoner_name() . ' (' . $oSub->getRegion() . ')... ';

            try {
                $oSub->updateLeagueData();
                $updateLeagueData_ok++;
                $strResult .= PHP_EOL . '    updateLeagueData       | OK    -> ' . $oSub->getTier() . ' ' . $oSub->getDivision() . ' ' . $oSub->getLp() . ' MMR: ' . $oSub->getMmr();
            } catch (Exception $ex) {
                $updateLeagueData_error++;
                $strResult .= PHP_EOL . '    updateLeagueData       | Error -> ' . $ex->getMessage() . ' | ' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $array = $oSub->updateSummaryStatsData();
                $updateSummaryStatsData_ok++;
                $updateSummaryStatsData_inserts += $array['inserts'];
                $updateSummaryStatsData_updates += $array['updates'];
                $strResult .= PHP_EOL . '    updateSummaryStatsData | OK    -> inserts: ' . $array['inserts'] . ' | updates: ' . $array['updates'];
            } catch (Exception $ex) {
                $updateSummaryStatsData_error++;
                $strResult .= PHP_EOL . '    updateSummaryStatsData | Error -> ' . $ex->getMessage() . ' | ' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $inserts = $oSub->updateLastestGamesData();
                $updateLastestGamesData_ok++;
                $updateLastestGamesData_inserts += $inserts;
                $strResult .= PHP_EOL . '    updateLastestGamesData | OK    -> inserts: ' . $inserts;
            } catch (Exception $ex) {
                $updateLastestGamesData_error++;
                $strResult .= PHP_EOL . '    updateLastestGamesData | Error -> ' . $ex->getMessage() . ' | ' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $inserts = $oSub->updateRankedGamesData();
                $updateRankedGamesData_ok++;
                $updateRankedGamesData_inserts += $inserts;
                $strResult .= PHP_EOL . '    updateRankedGamesData  | OK    -> inserts: ' . $inserts;
            } catch (Exception $ex) {
                $updateRankedGamesData_error++;
                $strResult .= PHP_EOL . '    updateRankedGamesData  | Error -> ' . $ex->getMessage() . ' | ' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            $oSub->update([Suscriptores::COLUMN_LAST_UPDATE => time()]);
            $strResult .= PHP_EOL;
        }

        $proc_affected_rows = $this->db->query('call update_subs_calcualted_vars()')->conn_id->affected_rows;

        $strResult .= PHP_EOL . PHP_EOL . '------------------------';
        $strResult .= PHP_EOL . '>> Se ha llamado al procedimiento almacenado update_subs_calcualted_vars para actualizar las variables total_games_registed y prefered_queue';

        $strResult_header = '[' . date('d-m-Y H:i:s') . '] UPDATING SUMMONERS' . PHP_EOL . PHP_EOL;
        $strResult_header .= PHP_EOL . '----- RESUMEN -----' . PHP_EOL;
        $strResult_header .= PHP_EOL . ' - Number of summoners: ' . $summonersCount;
        $strResult_header .= PHP_EOL . ' - Tiempo de ejecución: ' . number_format(abs(microtime(true) - $initTime) / 60, 2) . 'min';
        $strResult_header .= PHP_EOL . ' - updateLeagueData        -> OK: ' . $updateLeagueData_ok . '  ERROR: ' . $updateLeagueData_error;
        $strResult_header .= PHP_EOL . ' - updateSummaryStatsData  -> OK: ' . $updateSummaryStatsData_ok . '  ERROR: ' . $updateSummaryStatsData_error . ' | inserts: ' . $updateSummaryStatsData_inserts . ' | updates: ' . $updateSummaryStatsData_updates;
        $strResult_header .= PHP_EOL . ' - updateLastestGamesData  -> OK: ' . $updateLastestGamesData_ok . '  ERROR: ' . $updateLastestGamesData_error . ' | inserts: ' . $updateLastestGamesData_inserts;
        $strResult_header .= PHP_EOL . ' - updateRankedGamesData   -> OK: ' . $updateRankedGamesData_ok . '  ERROR: ' . $updateRankedGamesData_error . ' | inserts: ' . $updateRankedGamesData_inserts;
        $strResult_header .= PHP_EOL . ' - UpdateSubsCalcualtedVars -> affected_rows: ' . $proc_affected_rows;
        $strResult_header .= PHP_EOL . PHP_EOL . '-------------------' . PHP_EOL . PHP_EOL;

        $strToFile = $strResult_header . $strResult . PHP_EOL . PHP_EOL
                . PHP_EOL . '========================================================='
                . PHP_EOL . '===================== FIN EJECUCION ====================='
                . PHP_EOL . '========================================================='
                . PHP_EOL . PHP_EOL;
        $logFile = APPPATH . 'logs/update_summoners_' . date('Y_m_d', time()) . '.log';
        file_put_contents($logFile, $strToFile, FILE_APPEND);
        echo $strToFile . PHP_EOL;
        echo 'Log guardado en el archivo: ' . $logFile . '</pre>';
        die();
    }

}
