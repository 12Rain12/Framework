<?php

class newsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        DB::setTable("news");
    }

    public function createNews($name, $text)
    {
        DB::insert(array('name' => $name, 'text' => $text));
    }

    public function delete($id)
    {
        DB::delete(array('id' => $id));
    }

    public function edit($id, $name, $text)
    {
        DB::update(array('name' => $name, 'text' => $text), array('id' => $id));
    }

    public static function readByPk($id)
    {
        DB::select('id,name,text', array('id' => $id));
        return DB::getResult();
    }
}