<?php

class newsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        DB::setTable("article");
    }

    public function create()
    {

    }


}