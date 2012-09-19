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
        require 'Views/header.tpl';
        $this->smarty->display('modules/' . $moduleName .  '/views/' . $name . '.tpl');
        require 'Views/footer.tpl';
    }
}