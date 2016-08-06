<?php

class FrontController extends Controller {

    
    function index() {
   
        $this->view("Front",$data);
        
    }
    
    function url($url){
        // echo $url;
         $d=$this->model("FrontShow");
         $data=$d->show($url);
         $this->view("Front",$data);
    }
    
    function searchmax(){
        $search = $this->model("FrontShow");
        $max = $search->searchmax();
        $data =$max;
        $this->view("show",$data);
        
    }
    
    function btnSubmit($id){
        echo $id;
        exit;
        $senddata = $this -> model("FrontShow");
        $resule=$senddata->Submit();
        if($resule !=0){
            $resule=$senddata->addnum($id);
        }else{
            
            echo "error";
            
        }
        
    }
    
    
        
    
    
   
  
    
}

?>