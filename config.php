<?php

define('URL', 'http://localhost/Framework/');


return array(


    /**
     * Данные для БД
     */
    'DB' =>  array(
        'user'=>'root',
        'pass'=>'123',
        'host'=>'localhost',
        'name'=>'Framework'
    ),


    /**
     * Массив доступных модулей
     */
    'Module' => array(
        'index',
        'news'
    )

);