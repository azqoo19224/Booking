<?php

class BackController extends Controller {
    /* = public function model($model) {
        //$model=User
        require_once "../EasyMVC/models/$model.php";
        return new $model ();
    }
    
    public function view($view, $data = Array()) {
        //$view="Home/hello";
        require_once "../EasyMVC/views/$view.php";
        //../EasyMVC/views/Home/hello.php
    }*/
    
    function index() {
   
        $this->view("Back",$data);
    }
    
  
    
}

?>