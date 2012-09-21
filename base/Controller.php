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
        $file = 'modules/' . $name . '/model/' . $name . '.php';
        if(file_exists($file)){
            require $file;
            $this->model = $name();
        }else{
            echo "Несуществует модели с данный именем";
        }
    }

    public function render($name)
{
    var_dump($this->moduleName = url::getModuleName());
    $this->smarty->display('views/header.tpl');
    $this->smarty->display('modules/' . $this->moduleName .  '/views/' . $name . '.tpl');
    $this->smarty->display('views/footer.tpl');
}
}