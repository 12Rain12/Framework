<?php

class errorController extends Controller{

    public function __construct(){
        parent::__construct();
        parent::loadModel('news');
    }

    public function index()
    {
        $this->renderError('index');
    }


}
