<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of PreControllerHookController
 *
 * @author Javier
 */
class PostControllerHook extends CI_Hooks {

    /**
     *
     * @var CI_Controller 
     */
    private $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    public function sumVisit(){
        
    }
    
    /**
     * Renderiza el layout y las vistas generadas.<br>
     * En caso de que fuese una peticion ajax, no hace nada.
     * @return null
     */
    public function renderView() {

        if($this->ci->input->is_ajax_request() 
                || $this->ci->output->get_content_type()=='application/json' 
                || $this->ci->config->item("render_layout_view_enabled")===false){
            return;
        }
        
        $web_config = $this->ci->config->item("web_config");
        $webIndex = explode('/', $this->ci->uri->ruri_string());
        $webIndex = $webIndex[0].'/'.$webIndex[1].(isset($webIndex[2])?'/':'');
        $main_content = $this->ci->output->get_output();
        $this->ci->output->set_output('');

        //titulo 
        $title = $web_config["default"]["title"];
        if (isset($web_config[$webIndex]["title"])) {
            $title = $web_config[$webIndex]["title"] . $web_config["default"]["title_separator"] . $web_config["default"]["title"];
        }

        //metas 
        $metas = $web_config["default"]["metas"];
        if (isset($web_config[$webIndex]["metas"])) {
            $metas = array_merge($metas, $web_config[$webIndex]["metas"]);
        }

        //css
        $css = $web_config["default"]["css"];
        if (isset($web_config[$webIndex]["css"])) {
            $css = array_merge($css, $web_config[$webIndex]["css"]);
        }
        //scripts
        $scripts = $web_config["default"]["scripts"];
        if (isset($web_config[$webIndex]["scripts"])) {
            $scripts = array_merge($scripts, $web_config[$webIndex]["scripts"]);
        }


        $this->ci->load->view('layout/main_layout_view', [
            "title" => $title,
            "metas" => $metas,
            "css" => $css,
            "main_content" => $main_content,
            "scripts" => $scripts
        ]);
    }

}
