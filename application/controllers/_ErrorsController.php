<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class _ErrorsController extends MY_Controller {

    const FOLDER = 'errors';

    public function __construct() {
        parent::__construct(self::FOLDER);
    }

    public function index() {
        $this->output->set_status_header('404');
        $this->response();
    }

}
