<?php


class bootstrap
{
    public function __construct()
    {
        var_dump($url = url::getModuleName());
        if(empty($url)){
            $url = 'index';
        }


        moduleManager::registrationModules();
        moduleManager::LoadModule($url[0]);
    }
}