<?php

class newsController extends Controller
{
    public $news;

    function __construct()
    {
        parent::__construct();
        parent::loadModel('news');
    }

    public function index()
    {
        $this->render('index');
    }

    public function choiceMethod($method)
    {
        switch($method){
            case 'create': $this->create(); break;
        }
    }

    public function create()
    {
       if($_POST){
       $name = validation::filter($_POST['name']);
       $text = validation::filter($_POST['text']);

           if(!empty($name) && !empty($text)){
               news::create($name, $text);
           }

           header('Location: http://localhost/Framework/news');
       }else{
           echo "ek";
       }
    }

    public function edit()
    {

    }
}