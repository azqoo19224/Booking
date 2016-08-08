<?php

class FrontController extends Controller {

    
    function index() {
   
        $this->view("Front",$data);
        
    }
    //顯示網址
    function url($url){
        // echo $url;
         $d=$this->model("FrontShow");
         $data=$d->show($url);
         $this->view("Front",$data);
    }
    
    function searchmax(){
        $search = $this->model("FrontShow");
        $max = $search->searchmax();
        $data =$max['SUM(`total`)'];
        $this->view("show",$data);
        
    }
    
    function btnSubmit($id){
   
        $senddata = $this -> model("FrontShow");
        
        $checkjoin = $senddata->checkjoin($id);
        if($checkjoin == "報名成功")
        $resule=$senddata->addnum($id);

          $this->view('show',$checkjoin);
    
 
        
        
    }
    
    
        
    
    
   
  
    
}

?>