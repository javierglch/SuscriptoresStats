<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CI_Controller_Extended
 *
 * @author Javier
 */
class MY_Controller extends CI_Controller {

    /** @var string */
    protected $folder;

    function __construct($folder) {
        $this->folder = $folder;
        parent::__construct();
    }

    protected function reSendFlashSession() {
        $flashkeys = $this->session->get_flash_keys();
        foreach ($flashkeys as $key) {
            $this->session->set_flashdata($key, $this->session->flashdata($key));
        }
    }

    protected function response($aData = [], $view = null) {
        $this->load->view($view ? $view : $this->folder . '/' . $this->router->method . '_view', $aData);
    }

    protected function jsonResponse($data, $code = 0) {
        $this->config->set_item("render_layout_view_enabled", false);
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode(["data" => $data, "code" => $code]));
    }

}
