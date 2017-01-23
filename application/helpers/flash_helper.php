<?php

if(!function_exists("flash_message")){
    /**
     * Crea la estrucutra html para un alert de tipo bootstrap
     * @param string $type key del mensaje flash
     */
    function flash_message($type){
        $ci =& get_instance();
        if($ci->session->flashdata($type)){
            echo '<div class="alert '.$type.'">';
            echo $ci->session->flashdata($type);
            echo '<button class="close" data-dismiss="alert" type="button">×</button>';
            echo '</div>';
        }
    }
}

if(!function_exists("print_all_flash_messages")){
    /**
     * Devuelve la estrucutra html para cada key de flash_session en formato de alertas bootstrap
     */
    function print_all_flash_messages(){
        $ci =& get_instance();
        $aFlashKeys = $ci->session->get_flash_keys();
        foreach ($aFlashKeys as $type){
            if($ci->session->flashdata($type)){
                echo '<div class="alert '.$type.'">';
                echo '<button class="close" data-dismiss="alert" type="button">×</button>';
                echo $ci->session->flashdata($type);
                echo '</div>';
            }
        }
    }
}
