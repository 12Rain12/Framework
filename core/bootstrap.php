<?php


class bootstrap
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if(empty($url[0])){
            $url[0] = 'index';
    }


        moduleManager::registrationModules();
        moduleManager::LoadModule($url[0]);
    }
}