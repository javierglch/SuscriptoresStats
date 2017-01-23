<?php

/**
 * Description of MenuOption
 *
 * @author Javier
 */
class MenuOption {
    
    public $href;
    public $name;
    public $class;
    public $submenus;
    
    function __construct($name=null, $href=null, $class="", $submenus=false) {
        $this->name = $name;
        $this->href = $href;
        $this->class = $class;
        $this->submenus = $submenus;
    }

}
