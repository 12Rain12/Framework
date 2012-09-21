<?php


class bootstrap
{
    public function __construct()
    {
        $url = url::getModuleName();
        if(empty($url[0])){
            $url[0] = 'index';
        }

        moduleManager::registrationModules();
        moduleManager::LoadModule($url[0]);

        if(isset($url[1])){
            $file = 'modules/' . $url[0] . '/views/' . $url[1] . '.tpl';
            if(file_exists($file)){
                require $file;
            }
        }
    }
}