<?php

// контролер
class Controller_Index extends Controller_Base
{

    // шаблон
    public $layouts = "layout_base";

    // экшен
    function index()
    {
        $mainPage = ["title" => "Семейный и детский фотограф"];
        $this->template->vars('mainPage', $mainPage);
        $this->template->view('index');
    }

}