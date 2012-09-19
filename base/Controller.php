<?php

class Controller
{

    /**
     * Подгружаем модель по имени
     * @param $name имя модели
     */
    function __construct()
    {
        $this->View = new View();
    }



    public function loadModel($name)
    {
        $file = 'modules/' . $name . '/model/' . $name . '.php';
        if(file_exists($file)){
            require $file;
        }else{
            echo "Несуществует модели с данный именем";
        }
    }
}