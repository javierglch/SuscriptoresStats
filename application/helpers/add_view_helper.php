<?php

if(!function_exists("add_component")){
    /**
     * añade la vista de un componente (o no) segun si el usuario tiene permisos suficientes para acceder a ella
     * @param $this $ci Pasar a esta variable la variable $this, dentro de las vistas
     * @param array $aGroupsIdRequired
     * @param int $idFlagRequired
     * @param string $view
     * @param array $vars
     * @param boolean $return
     * @return view | string | null
     */
    function add_view($ci, $aGroupsIdRequired, $idFlagRequired, $view, $vars = array(), $return = FALSE){
        if($ci->Users->isInGroups($aGroupsIdRequired) && $ci->Users->hasFlag($idFlagRequired)){
            return $ci->view($view,$vars,$return);
        }
    }
}