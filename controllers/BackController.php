<?php

class BackController extends Controller {
 
    
    function index()
    {
     
        $this->view("Back",$date);
    }
    
    
    function btnOK()
    {
    
        $a= $this->model("Backinsert");
        $a->insertA();
        $id=$a->searchID();
        $a->insertJ($id);
        // header("location:Front/url");
       
        
        // $a->show($id);
        
    }
  
    
    
  
    
}

?>