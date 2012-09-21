<?php

class newsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('index');
    }

    public function create()
    {
       if($_POST['act']){
       $name = validation::filter($_POST['name']);
       $text = validation::filter($_POST['text']);

           if(!empty($name) && !empty($text)){
              news::create($name, $text);
           }
       }else{
           $this->render('create');
       }
    }
}