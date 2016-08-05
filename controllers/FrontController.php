<?php

class FrontController extends Controller {

    
    function index() {
   
        $this->view("Front",$data);
        
    }
    
    function url($url){
        // echo $url;
         $this->model("FrontShow");
         $this->show($url);
    }
        
    
    
   
  
    
}

?>