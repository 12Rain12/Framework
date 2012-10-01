<?php

class userController extends Controller
{
    function __construct()
    {
        parent::__construct();
        parent::loadModel('user');
    }

    public function index()
    {
        $this->render('index');
    }


    public function create()
    {
        if($_POST){
            $name = validation::filter($_POST['name']);
            $surname = validation::filter($_POST['surname']);
            $pass = validation::filter($_POST['pass']);
            $email = validation::filter($_POST['email']);
            $gender = validation::filter($_POST['gender']);
            $role = validation::filter($_POST['role']);
            $telephone = validation::filter($_POST['telephone']);
            $location = validation::filter($_POST['location']);
            $site = validation::filter($_POST['site']);
            if(!empty($name) && !empty($surname) && !empty($email)){
            user::create($name, $surname, $pass, $email, $gender, $site, $role, $telephone, $location);
            }
        }
    }
}