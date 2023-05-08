<?php

class Controller
{
    public function loadView($view, $data = [])
    {
        require_once "../mvc/views/$view.php";
    }

    public function instantiateModel($model)
    {
        require_once "../mvc/models/$model.php";
        $model = new $model();
        return $model;
    }
}
