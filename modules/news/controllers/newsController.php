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
        $this->render('create');
        if($_POST['act']){

        }
    }
}