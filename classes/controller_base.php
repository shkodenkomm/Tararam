<?php

// абстрактый класс контроллера
abstract class Controller_Base
{

    protected $registry;
    protected $template;
    protected $layouts; // шаблон

    public $vars = array();

    // в конструкторе подключаем шаблоны
    function __construct()
    {
        // шаблоны
        $this->template = new Template($this->layouts, get_class($this));
    }

    abstract function index();

}
