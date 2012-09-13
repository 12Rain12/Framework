<?php

class View
{

    public function __construct()
    {

    }

    public function render($name, $noInclude = false)
    {
        if ($noInclude == true) {
            require MODULES . $name .  '/views/' . $name . '.php';
        }
        else {
            require VIEWS . 'header.php';
            require MODULES . $name .  '/views/' . $name . '.php';
            require VIEWS . 'footer.php';
        }
    }
}