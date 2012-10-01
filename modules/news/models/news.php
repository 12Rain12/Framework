<?php

class news extends Model
{
    public function __construct()
    {
        parent::__construct();
        DB::setTable("news");
    }

    public static function create($name, $text)
    {
        DB::insert(array('name' => $name, 'text' => $text));
    }

    public static function delete($id)
    {
        DB::delete(array('id' => $id));
    }

    public static function edit($id, $name, $text)
    {
        DB::update(array('name' => $name, 'text' => $text), array('id' => $id));
    }

    public static function readByPk($id)
    {
        DB::select('id,name,text', array('id' => $id));
        return DB::getResult();
    }

    public static function read()
    {
        DB::select('name,text');
        return DB::getResult();
    }

    public static function readALL()
    {
        DB::select('id,name,text');
        return DB::getResult();
    }
}