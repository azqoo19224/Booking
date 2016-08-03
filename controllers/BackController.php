<?php

class BackController extends Controller {
 
    
    function index() {
   
        $this->view("Back",$data);
    }
    
    
    function btnOK(){
        $a= $this->model("Backinsert");
        $a->insert();
        
        
    }
    
  
    
}

?>