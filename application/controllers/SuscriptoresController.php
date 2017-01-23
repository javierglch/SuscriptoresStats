<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use \LolApi\LolApi;

class SuscriptoresController extends MY_Controller {

    const FOLDER = 'suscriptores';

    /**
     *
     * @var LolApi 
     */
    private $lol;

    public function __construct() {
        parent::__construct(self::FOLDER);
        $this->lol = \LolApi\LolApi::globalApi();
    }

    public function index($app_url) {
        if (preg_match("/^[\w|\d|_|-|\.|\+]+$/", $app_url)) {
            $this->Youtubers->findOneBy([Youtubers::COLUMN_APP_CUSTOM_URL => $app_url]);
        }

        if (!$this->Youtubers->getIdyoutubers()) {
            return $this->response(['app_url' => $app_url], 'suscriptores/error_yt_not_found_view');
        }

        $this->session->set_userdata(EnumSessionVars::SUB_YT_ID, $this->Youtubers->getIdyoutubers());
        return $this->response(['youtuber' => $this->Youtubers, 'summonerDto' => null, 'error' => null], 'suscriptores/sub_search_view');
    }

    public function sub_search() {
        $summonerDto = null;
        $error = null;
        if ($this->input->get('summoner_name') && $this->input->get('region')) {
            $this->lol->LolApiConfig->region = $this->input->get('region');
            try {
                $summonerDto = $this->lol->getSummonerDtoByName($this->input->get('summoner_name'));
                $this->session->set_userdata(EnumSessionVars::SUB_SUMMONER_ID, $summonerDto->id);
                $this->session->set_userdata(EnumSessionVars::SUB_SUMMONER_NAME, $summonerDto->name);
                $this->session->set_userdata(EnumSessionVars::SUB_SUMMONER_REGION, $this->lol->LolApiConfig->region);
            } catch (\LolApi\Exceptions\NotFoundException $e) {
                $error = 'No se ha encontrado el invocador con nombre <strong>' . $this->input->get('summoner_name')
                        . '</strong> en la region <strong>' . $this->lol->LolApiConfig->region . '</strong>.';
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
        }
        $this->Youtubers->findOneById($this->session->userdata(EnumSessionVars::SUB_YT_ID));
        return $this->response(['youtuber' => $this->Youtubers, 'summonerDto' => $summonerDto, 'error' => $error]);
    }

    public function sub_add() {
        $yt_id = $this->session->userdata(EnumSessionVars::SUB_YT_ID);
        $summ_id = $this->session->userdata(EnumSessionVars::SUB_SUMMONER_ID);
        $region = $this->session->userdata(EnumSessionVars::SUB_SUMMONER_REGION);
        $summ_name = $this->session->userdata(EnumSessionVars::SUB_SUMMONER_NAME);
        try {
            $this->Suscriptores->newSub($yt_id, $summ_id, $region, $summ_name);
            $this->session->set_userdata(EnumSessionVars::SUB_ADD_OK, true);
        } catch (Exception $ex) {
            $this->session->set_flashdata('alert-warning', 'Ya estabas asociado al youtuber, no hace falta que vuelvas a asociarte');
        }

        $this->session->set_userdata(EnumSessionVars::SUB_ID, $this->Suscriptores->getIdsuscriptores());
        $this->session->set_userdata(EnumSessionVars::SUB_IP, $this->input->ip_address());
        redirect(base_url('sub/ok'));
    }

    public function sub_ok() {
        $this->Youtubers->findOneById($this->session->userdata(EnumSessionVars::SUB_YT_ID));
        $this->Suscriptores->findOneById($this->session->userdata(EnumSessionVars::SUB_ID));
        $aYoutubers = $this->Suscriptores->getYoutubers();
        try {
            LolApi::globalApi()->LolApiConfig->region = $this->Suscriptores->getRegion();
            $summonerDto = LolApi::globalApi()->getSummonerDtoById($this->Suscriptores->getSummoner_id());
        } catch (Exception $exc) {
            $error = $exc->getMessage();
        }

        return $this->response(['currentYoutuber' => $this->Youtubers, 'aYoutubers' => $aYoutubers, 'summonerDto' => $summonerDto, 'suscriptor' => $this->Suscriptores, 'error' => $error]);
    }

}
