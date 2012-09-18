<?php

class View
{

    public function __construct()
    {

    }

    public function render($name)
    {
        require 'Views/header.php';
        require 'modules/' . $name .  '/views/' . $name . '.php';
        require 'Views/footer.php';
    }
}