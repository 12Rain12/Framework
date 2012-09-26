<?php

class newsModule
{
    public function __construct()
    {
        require 'controllers/newsController.php';
        $controller = new newsController();
        $controller->index();
        $url = url::getUrl();

        if (isset($url[1])) {
            $controller->choiceMethod($url[1]);
        }else{
            $controller->read();
        }
    }
}