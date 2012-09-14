<?php

class View
{

    public function __construct()
    {

    }

    public function render($name)
    {
        require VIEWS . 'header.php';
        require MODULES . $name .  '/views/' . $name . '.php';
        require VIEWS . 'footer.php';
    }
}