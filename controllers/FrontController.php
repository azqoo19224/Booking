<?php

class FrontController extends Controller {

    
    function index() {
   
        $this->view("Front",$data);
    }
    
  
    
}

?>