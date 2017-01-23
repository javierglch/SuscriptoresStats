<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use LolApi\LolApi;
use LolApi\Classes\LolStaticData\ChampionListDto;

class _StartController extends MY_Controller {

    const FOLDER = 'start';

    /** @var LolApi */
    private $lol;

    public function __construct() {
        parent::__construct(self::FOLDER);
        $this->lol = new LolApi();
    }

    /**
     * index home
     */
    public function index() {
        $this->response();
    }

    /**
     * logarse
     */
    public function login() {
        if ($this->form->validateLogInForm()) {
            $this->Youtubers->doLogin($this->input->post('email'), $this->input->post('pass'));
            redirect(base_url('panel'));
        } else {
            $this->response();
        }
    }
    
    /**
     * deslogarse
     */
    public function logout() {
        $this->Youtubers->doLogout();
        redirect(base_url());
    }

    /**
     * registrarse
     */
    public function signin() {
        if ($this->form->validateSignInForm()) {
            
            $this->Youtubers->insert([
                Youtubers::COLUMN_APP_CUSTOM_URL => $this->Youtubers->getChannelId($this->input->post('youtubeurl')),
                Youtubers::COLUMN_CHANNEL_URL => $this->input->post('youtubeurl'),
                Youtubers::COLUMN_EMAIL => $this->input->post('email'),
                Youtubers::COLUMN_PASSWORD => $this->input->post('pass'),
                Youtubers::COLUMN_REGISTRATION_DATE => time(),
                Youtubers::COLUMN_LAST_VISIT => time(),
                Youtubers::COLUMN_LAST_IP => $this->input->ip_address(),
                Youtubers::COLUMN_CUSTOM_SUB_MSG => $this->config->item('default_custom_yt_msg')
            ]);

            $this->Youtubers->doLogin($this->input->post('email'), $this->input->post('pass'));

            redirect(base_url('panel'));
        } else {
            $this->response();
        }
    }

    /**
     * condiciones
     */
    public function conditions() {
        $this->response();
    }

}

function vardump($var) {
    echo '<pre>' . print_r($var, true) . '</pre>';
}
