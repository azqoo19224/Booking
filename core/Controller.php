<?php

class Controller {
    public function model($model) {
        //$model=User
        require_once "../MVC/models/$model.php";
        return new $model ();
    }
    
    public function view($view, $data = Array()) {
        //$view="Home/hello";
        require_once "../MVC/views/$view.php";
        //../EasyMVC/views/Home/hello.php
    }
}

?>
