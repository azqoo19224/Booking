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
   
        $senddata = $this -> model("FrontShow");
        
        $checkjoin = $senddata->checkjoin($id);
    
        if($checkjoin){
     
        
            if($checkjoin['total'] == false)
            {
                $resule=$senddata->addnum($id);
                echo "報名成功";
                
            }
            else
            {
                
                echo "你已經報名過了";
                
            }
        }else{
            echo "你不在名單內";
        }
        
    }
    
    
        
    
    
   
  
    
}

?>