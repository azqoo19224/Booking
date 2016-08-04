<?php

class BackController extends Controller {
 
    
    function index() {
     
        $this->view("Back",$data);
    }
    
    
    function btnOK(){
        
        $join_number=$_POST["join_number"];
        $join_name =$_POST["join_name"];
        $name=$_POST['activity_name'];
        
        $a= $this->model("Backinsert");
        $a->insertA();
        $id=$a->searchID();
        $a->insertJ($id);
        
        
    }
    
  
    
}

?>