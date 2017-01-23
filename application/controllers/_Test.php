<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class _Test extends MY_Controller {

    static $FOLDER = "test";

    function __construct() {
        parent::__construct(self::$FOLDER);
    }

    /**
     * Crea la redireccion hacia el controlador que corresponde al usuario en cuestion
     */
    public function index() {
        set_time_limit(0);                                                  
        $aSuscriptores = $this->Suscriptores->selectAll();

        echo '<ol>';
        foreach ($aSuscriptores as $oSub) {
            echo '<li>Actualiando ' . $oSub->getSummoner_name() . ' (' . $oSub->getRegion() . ')... ';

            try {
                $oSub->updateLeagueData();
                echo '<br/>updateLeagueData: <font color=green>OK</font>';
            } catch (Exception $ex) {
                echo '<br/><font color=red>Error! ' . $ex->getMessage() . ' <a href="' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '">' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '</a></font>';
            }
            try {
                $oSub->updateSummaryStatsData();
                echo '<br/>updateSummaryStatsData: <font color=green>OK</font>';
            } catch (Exception $ex) {
                echo '<br/><font color=red>Error! ' . $ex->getMessage() . ' <a href="' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '">' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '</a></font>';
            }
            try {
                $oSub->updateLastestGamesData();
                echo '<br/>updateLastestGamesData: <font color=green>OK</font>';
            } catch (Exception $ex) {
                echo '<br/><font color=red>Error! ' . $ex->getMessage() . ' <a href="' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '">' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '</a></font>';
            }
            try {
                $oSub->updateRankedGamesData();
                echo '<br/>updateRankedGamesData: <font color=green>OK</font>';
            } catch (Exception $ex) {
                echo '<br/><font color=red>Error! ' . $ex->getMessage() . ' <a href="' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '">' . LolApi\LolApi::globalApi()->RequestManager->DebugManager->last_url . '</a></font>';
            }
            $oSub->update([Suscriptores::COLUMN_LAST_UPDATE => time()]);

            echo '</li>';
        }
        echo '</ol>';

        die();
    }

}

function debug($var) {
    echo '<pre>' . print_r($var, true) . '</pre>';
}
