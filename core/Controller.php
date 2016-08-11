<?php

class Controller
{
    public function model($model)
    {
        require_once "../MVC/models/$model.php";
        return new $model ();
    }

    public function view($view, $data = array())
    {
        require_once "../MVC/views/$view.php";
    }

    public function js($js)
    {
      echo "<script src=/MVC/javascripts/$js.js></script>";
    }

}

