<?php

class indexController extends Controller
{

function __construct()
{
    parent::__construct();
}

public function index()
{
    $this->View->render('index', 'index');
}

}