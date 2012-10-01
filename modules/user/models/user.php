<?php

class user extends Model
{
    public function __construct()
    {
        parent::__construct();
        DB::setTable("user");
    }


    public static function create($name, $surname, $pass, $email, $gender, $site, $role, $telephone, $location)
    {
        DB::insert(array('name' => $name,
            'surname' => $surname,
            'pass' => $pass,
            'email' => $email,
            'gender' => $gender,
            'site' => $site,
            'role' => $role,
            'telephone' => $telephone,
            'location' => $location));
    }

    public static function update($id ,$name, $surname, $pass, $email, $gender, $site, $role, $telephone, $location)
    {
        DB::update(array('name' => $name,
            'surname' => $surname,
            'pass' => $pass,
            'email' => $email,
            'gender' => $gender,
            'site' => $site,
            'role' => $role,
            'telephone' => $telephone,
            'location' => $location),

            array('id' => $id));
    }

    public static function delete($id)
    {
        DB::delete(array('id' => $id));
    }
}