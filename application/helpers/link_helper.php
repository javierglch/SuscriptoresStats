<?php

if(!function_exists("link_to")){
    /**
     * Crea un tag "a" link hacia una url
     * @param string $linkText
     * @param string $routeIndex
     * @param array $aExtra
     * @return string
     */
    function link_to($linkText, $routeIndex, $aExtra=[]){
        $ci =& get_instance();
        $extras = "";
        foreach ($aExtra as $key => $value) {
            $extras.=$key.'="'.  str_replace('"', '\"', $value).'"';
        }
        return '<a href="'.  base_url($routeIndex).'" '.$extras.'>'.$linkText.'</a>';
    }
}