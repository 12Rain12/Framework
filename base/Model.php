<?php

class Model
{

    public $db;

    private static $_config;

    /*
     * Массив с параметрами для БД
     */
    static $param = array();

    public function __construct()
    {
        self::$param = Model::paramBD();
        $this->db =  DB::connect(self::$param['host'], self::$param['user'], self::$param['pass'], self::$param['name']);
    }

    public static function paramBD()
    {
        self::$_config = require 'config.php';
        return self::$_config['DB'];
    }

}