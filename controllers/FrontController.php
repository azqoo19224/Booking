<?php

class FrontController extends Controller
{
    function index()
    {
        $this->view("Front", $data);
    }
    //顯示網址
    function url($url)
    {
         $d = $this->model("FrontShow");
         $data = $d->show($url);
         $this->view("Front", $data);
    }

    function searchCount()
    {
        $search = $this->model("FrontShow");
        $Count = $search->searchCount();
        $data = $Count['SUM(`total`)'];
        $this->view("show", $data);
    }

    function btnSubmit($id)
    {
        $senddata = $this -> model("FrontShow");
        $checkjoin = $senddata->checkjoin($id);
        $this->view('show', $checkjoin);
    }

}

