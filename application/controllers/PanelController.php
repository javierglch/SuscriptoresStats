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
        $aSubsYtJoin = $this->Youtubers->getSubsList();
        $avgMMR = $this->Youtubers->getSubsAvgMMR();
        $this->response(['aSubsYtJoin' => $aSubsYtJoin, 'avgMMR' => $avgMMR]);
    }

    public function stats_champions() {
        set_time_limit(0);
        $initTime = microtime(true);
        $aData = null;
        $totalGames = 0;
        if ($this->input->get('desde') && $this->input->get('hasta') && $this->input->get('division') !== false) {
            $from_timestamp = DateTime::createFromFormat('d-m-Y H:i:s', $this->input->get('desde') . ' 00:00:00')->getTimestamp() * 1000;
            $to_timestamp = DateTime::createFromFormat('d-m-Y H:i:s', $this->input->get('hasta') . ' 00:00:00')->getTimestamp() * 1000;
            $division = ((int) $this->input->get('division')) * 1000;

            if ($from_timestamp < $to_timestamp && $to_timestamp - $from_timestamp >= $division) {
                $aData = $this->SubsYtGamesStats->getChampionStatsBy($from_timestamp, $to_timestamp, $division, $this->Youtubers->getIdyoutubers(), $totalGames);
            } else {
                $error_msg = 'Las fecha inicial debe ser menor a la final, y deben poder ser divididias por más de una unidad con el intervalo de tiempo.';
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
