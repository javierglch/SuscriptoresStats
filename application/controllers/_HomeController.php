<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class _HomeController extends MY_Controller {

    const FOLDER = 'home';
    
    public function __construct() {
        parent::__construct(self::FOLDER);
    }
    
    public function index() {
        echo \LoLApi\Apiv2::getSummonerByName('xavi senpai');
        
        $this->response();
    }
}
