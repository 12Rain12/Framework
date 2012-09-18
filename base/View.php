<?php

class View
{
    public $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function render($name, $moduleName)
    {
        require 'Views/header.php';
        $this->smarty->display('modules/' . $moduleName .  '/views/' . $name . '.tpl');
        require 'Views/footer.php';
    }
}