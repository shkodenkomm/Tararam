<?php

// контролер
class Controller_Index extends Controller_Base
{

    // шаблон
    public $layouts = "first_layouts";

    // экшен
    function index()
    {
        $this->template->view('index');
    }

}