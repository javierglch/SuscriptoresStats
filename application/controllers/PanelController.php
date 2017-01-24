<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelController extends MY_Controller {

    const FOLDER = 'panel';

    public function __construct() {
        parent::__construct(self::FOLDER);
    }

    public function index() {
        $this->Youtubers->getYtLogoImg();
        $this->response();
    }

    public function config() {
        $form = $this->input->post('form_type');
        if ($form == 1) {
            if ($this->form->validateChangePassForm()) {
                $this->Youtubers->changePass($this->input->post('confirm_pass'));
                $this->session->set_flashdata('alert-success', 'La contraseña se ha cambiado correctamente.');
            }
        }
        if ($form == 2) {
            if ($this->form->validateGeneralConfigForm()) {
                $this->Youtubers->updateGeneralConfig($this->input->post('email'), $this->input->post('url_youtube'), $this->input->post('url_app'), $this->input->post('url_video'), $this->input->post('custom_msg'), $this->input->post('custom_msg_register'));
                $this->session->set_flashdata('alert-success', 'Datos actualizados correctamente.');
            }
        }
        if ($form == 3) {
            $this->Youtubers->updateYoutubeImgs();
            $this->session->set_flashdata('alert-success', 'Imagen del logo actualizada correctamente.');
        }

        $this->response(['form' => $form]);
    }

    public function stats_subslist() {
        $this->load->helper('tags');
        $aSubsList = $this->Youtubers->getSubsList();
        $avgMMR = $this->Youtubers->getSubsAvgMMR();
        $intTotalSubs = $this->Youtubers->getTotalSubs();
        $this->response(['aSubsList' => $aSubsList, 'avgMMR' => $avgMMR, 'intTotalSubs' => $intTotalSubs]);
    }

    public function stats_champions() {
        set_time_limit(0);
        $initTime = microtime(true);
        $aData = null;
        $totalGames = 0;
        $error_msg = null;
        if ($this->input->get('desde') && $this->input->get('hasta') && $this->input->get('division')) {
            $from_timestamp = DateTime::createFromFormat('d-m-Y H:i:s', $this->input->get('desde') . ' 00:00:00')->getTimestamp() * 1000;
            $to_timestamp = DateTime::createFromFormat('d-m-Y H:i:s', $this->input->get('hasta') . ' 00:00:00')->getTimestamp() * 1000;
            $division_type = ((int) $this->input->get('division'));

            // damos valores segun el tipo de division
            switch ($division_type) {
                case 2://semanas
                    $division = 604800 * 1000;
                    break;
                case 3: //meses
                    $division = 2592000 * 1000;
                    break;
                default: //1 dia
                    $division = 86400 * 1000;
            }

            if ($from_timestamp > $to_timestamp) {
                $error_msg = 'La fecha inicial debe ser menor a la final ';
            } elseif (abs($to_timestamp - $from_timestamp) > 311040000 * 1000) {
                $error_msg = 'El intervalo de fechas es demasiado amplio (max: 4 meses), por favor, seleccione un rango menor de fechas.';
            } elseif (abs($to_timestamp - $from_timestamp) / $division > 20) {
                $error_msg = 'No se permite una consulta con más de 20 divisiones, selecciona un rango menor de fechas.';
            } else {
                $aData = $this->SubsYtGamesStats->getChampionStatsBy($from_timestamp, $to_timestamp, $division_type, $this->Youtubers->getIdyoutubers(), $totalGames);
            }
        }

        $timeSpent = number_format(abs(microtime(true) - $initTime), 2, ',', '.');
        $this->response(['aData' => $aData, 'totalGames' => $totalGames, 'error_msg' => $error_msg, 'timeSpent' => $timeSpent]);
    }

    public function stats_ranked() {
        $this->response();
    }

    public function stats_leagues() {
        $this->response();
    }

    public function stats_sumary() {
        $this->response();
    }

}
