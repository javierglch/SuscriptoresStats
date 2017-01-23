<?php
if(!function_exists("crear_vistas_controlador")){
    /**
     * crea las vistas del controlador
     * @param string $controllerClass controlador, por ejemplo CompanyController
     */
    function crear_vistas_controlador($controllerClass) {
        $class_methods = get_class_methods($controllerClass);
        foreach ($class_methods as $key => $method) {
            if (!in_array($method, ["__construct", "get_instance"])) {
                if (!file_exists(APPPATH . 'views/' . $controllerClass::FOLDER . '/' . $method . '_view.php')) {
                    file_put_contents(APPPATH . 'views/' . $controllerClass::FOLDER . '/' . $method . '_view.php', '<?php $this->view(\'components/mainmenu_view\',$menu_config) ?> '."\n".$method);
                }
            }
        }
    }
}
if(!function_exists("crear_string_permisos")){
    /**
     * crea las vistas del controlador
     * @param string $controllerClass controlador, por ejemplo CompanyController
     */
    function crear_string_permisos($controllerClass,array $permisos) {
        $class_methods = get_class_methods($controllerClass);
        echo '<pre>';
        foreach ($class_methods as $key => $method) {
            if (!in_array($method, ["__construct", "get_instance"])) {
                echo '"'.$controllerClass.'/'.$method.'" =>[</br>';
                echo '&nbsp; &nbsp; &nbsp;"title" => "'.$controllerClass.'-'.$method.'",</br>';
                echo '&nbsp; &nbsp; &nbsp;"security" => [</br>';
                echo '&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;"account_groups" => ['.implode(',',$permisos).']</br>';
                echo '&nbsp; &nbsp; &nbsp;],</br>';
                echo '],</br>'; 
            }
        }
        echo '</pre>';
    }
}