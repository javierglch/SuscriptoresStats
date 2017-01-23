<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class _Test extends MY_Controller {

    static $FOLDER = "test";

    function __construct() {
        parent::__construct(self::$FOLDER);
    }

    public function index() {
        $strResult .= date('d-m-Y', 1485099171874 / 1000);
        die();
    }

    /**
     * tareaActualizarInvocadores
     */
    public function tareaActualizarInvocadores() {
        set_time_limit(0);
        $aSuscriptores = $this->Suscriptores->selectAll();

        $strResult = '';
        foreach ($aSuscriptores as $oSub) {
            $strResult .= 'Actualiando ' . $oSub->getSummoner_name() . ' (' . $oSub->getRegion() . ')... ';

            try {
                $oSub->updateLeagueData();
                $strResult .= PHP_EOL . 'updateLeagueData | OK | '.$oSub->getTier().' '.$oSub->getDivision().' '.$oSub->getLp().' | MMR: '.$oSub->getMmr();
            } catch (Exception $ex) {
                $strResult .= PHP_EOL . 'Error! ' . $ex->getMessage() . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $oSub->updateSummaryStatsData();
                $strResult .= PHP_EOL . 'updateSummaryStatsData: OK';
            } catch (Exception $ex) {
                $strResult .= PHP_EOL . 'Error! ' . $ex->getMessage() . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $oSub->updateLastestGamesData();
                $strResult .= PHP_EOL . 'updateLastestGamesData: OK';
            } catch (Exception $ex) {
                $strResult .= PHP_EOL . 'Error! ' . $ex->getMessage() . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            try {
                $oSub->updateRankedGamesData();
                $strResult .= PHP_EOL . 'updateRankedGamesData: OK';
            } catch (Exception $ex) {
                $strResult .= PHP_EOL . 'Error! ' . $ex->getMessage() . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url;
            }
            $oSub->update([Suscriptores::COLUMN_LAST_UPDATE => time()]);

        }

        die();
    }

}

function debug($var) {
    $strResult .= '<pre>' . print_r($var, true) . '</pre>';
}
