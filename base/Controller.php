<?php

class Controller
{
    public $model;
    public $moduleName;

    /**
     * Подгружаем модель по имени
     * @param $name имя модели
     */
    function __construct()
    {
        $this->smarty = new Smarty();

    }



    public function loadModel($name)
    {
        $file = 'modules/' . $name . '/models/' . $name . '.php';
        if(file_exists($file)){
            require $file;
            $this->model = new $name();
        }else{
            echo "Несуществует модели с данный именем";
        }
    }

    public function render($name)
{
    $url = url::getModuleName();
    $this->moduleName = $url[0];
    $this->smarty->display('views/header.tpl');
    $this->smarty->display('modules/' . $this->moduleName .  '/views/' . $name . '.tpl');
    $this->smarty->display('views/footer.tpl');
}
}