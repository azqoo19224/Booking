<?php

class BackController extends Controller
{
    function index()
    {
        $this->view("Back", $date);
    }

    function btnOK()
    {
        $a = $this->model("Backinsert");
        $url = $a->insertA();
        $id = $a->searchID();
        $a->insertJ($id);
        $data = $url;
        $this->view("show", $data);
    }
}

