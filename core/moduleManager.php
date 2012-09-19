<?php

class moduleManager
{

    public static $check;

    /**
     * @var $modules Массив модулей
     */
    public static $modules = array();

    /**
     * @var array массив доступных маршрутов
     */
    public static $totalArray = array();


    /**
     * Подгружает модель по имени
     */
    public static  function LoadModule($name)
    {
        if(self::checkModule($name) && self::checkUrl($name)){
               require 'modules/' . $name . '/' . $name . 'Module.php';
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
        $file = 'modules/' . $name . '/' . $name . 'Module.php';
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
        $routes = require 'config.php';
        self::$modules = $routes['Module'];
    }


    /**
     * @static Возвращает все доступные маршруты
     * @return array
     */
    public static function getTotalArrayUrl()
    {
        foreach(self::$modules as $value){
            $routes = require 'modules/' . $value . '/routes.php';
            self::$totalArray = array_merge_recursive (self::$totalArray, $routes);
        }
        return self::$totalArray;
    }

    /**
     * @static Проверяет существует ли url
     * @param $url
     */
    public static function checkUrl($url)
    {
        foreach(self::getTotalArrayUrl() as $key => $value){
            if(preg_match($value, $url)){
                self::$check = true;
            }
        }
        return self::$check;
    }
}