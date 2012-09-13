<?php

class Model
{
    public $db;

    public function __construct()
    {
    $this->db =  DB::connect('localhost', 'root', '123', 'Framework');
    }
}