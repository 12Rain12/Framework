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
        switch ($method) {
            case 'create':
                $this->create();
                break;
            case 'admin':
                $this->admin();
                break;
            case 'update':
                $this->update();
                break;
        }
    }

    public function create()
    {
        if ($_POST) {
            $name = validation::filter($_POST['name']);
            $text = validation::filter($_POST['text']);

            if (!empty($name) && !empty($text)) {
                news::create($name, $text);
                header('Location: http://localhost/Framework/news');
            } else {
                echo "Заполните все поля формы";
            }


        }
    }

    public function read()
    {
        $result = news::read();
        $this->smarty->assign('news', $result);
        $this->smarty->display('modules/news/views/read.tpl');
    }

    public function delete()
    {
        news::delete($_GET['id']);
    }

    public function admin()
    {
        $result = news::readAll();
        $this->smarty->assign('news', $result);
        $this->smarty->display('modules/news/views/admin.tpl');
    }

    public function update()
    {
        $id = $_GET['id'];
        $result = news::readByPk($id);
        $this->smarty->assign('edit', $result);
        $this->smarty->display('modules/news/views/admin.tpl');

        if ($_POST) {
            $name = validation::filter($_POST['name']);
            $text = validation::filter($_POST['text']);
            news::edit($_POST['id'], $name, $text);
            header('Location: http://localhost/Framework/news');

        }
    }

}