<?php

class moduleManager
{

    /**
     * @var $modules Массив модулей
     */
    public static $modules;


    /**
     * Подгружает модель по имени
     */
    public static  function LoadModule($name)
    {
        if(empty($name)){
            $name = 'index';
        }

        if(self::checkModule($name)){
               require MODULES . $name . '/' . $name . 'Module.php';
               $moduleName = $name . 'Module';
               $module = new $moduleName();

        }else{
               echo "Неверный путь";
        }
    }

    /**
     * Проверка модуля по имени
     * @param $name - имя модуля
     */
    public static function checkModule($name)
    {
        $file = MODULES . $name . '/' . $name . 'Module.php';
        if(file_exists($file)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Регистрация всех модулей
     */
    public static function registrationModules()
    {
        self::$modules = array(
            'index',
            'news'
        );
    }
}