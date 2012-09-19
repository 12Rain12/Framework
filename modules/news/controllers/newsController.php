<?php

class newsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View->render('index', 'news');
    }


}