<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of PreControllerHookController
 *
 * @author Javier
 */
class PostControllerConstructorHook extends CI_Hooks {

    /**
     *
     * @var CI_Controller 
     */
    private $ci;

    function __construct() {
        $this->ci = & get_instance();
    }


    public function inicializeUser() {
        if($this->ci->session->userdata(EnumSessionVars::USER_LOGGED)){
            $this->ci->Youtubers->findOneById($this->ci->session->userdata(EnumSessionVars::USER_ID));
        }
    }


}
