<?php

class indexModule
{
    public function __construct()
    {
        require 'controllers/indexController.php';
        $controller = new indexController();
        $controller->index();
    }
}