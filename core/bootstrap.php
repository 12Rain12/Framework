<?php


class bootstrap
{
    public function __construct()
    {
        $url = url::getModuleName();
        if(empty($url)){
            $url = 'index';
        }

        moduleManager::registrationModules();
        moduleManager::LoadModule($url);
    }
}