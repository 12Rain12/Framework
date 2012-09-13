<?php

class newsModule
{
    public function __construct()
    {
        require 'controllers/newsController.php';
        $controller = new newsController();
        $controller->index();
    }
}