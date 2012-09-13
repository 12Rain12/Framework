<?php

class Controller
{
    /**
     * Подгружаем модель по имени
     * @param $name имя модели
     */
    function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($nameModule, $name)
    {
        $file = MODULES . $nameModule . '/model/' . $name . '.php';
        if(file_exists($file)){
            require $file;
        }else{
            echo "Несуществует модели с данный именем";
        }
    }
}