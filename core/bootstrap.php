<?php


class bootstrap
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        moduleManager::registrationModules();
        moduleManager::LoadModule($url[0]);
    }
}