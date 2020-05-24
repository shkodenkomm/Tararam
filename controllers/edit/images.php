<?php

// контролер
class Controller_Images extends Controller_Base
{

    // шаблон
    public $layouts = "layout_base";
    private $destination = "/var/www/tararam/web/data/imgs/";

    // экшен
    function index()
    {
        // пустая форма для загрузки
       $this->template->view('index');
    }

    // обработка загрузки
    function upload()
    {
        $img_path = IMAGES_ROOT_DIR;
        if(!is_dir(IMAGES_ROOT_DIR.$_POST["serverPath"])){
            mkdir(IMAGES_ROOT_DIR.$_POST["serverPath"],777,true);
            $img_path = IMAGES_ROOT_DIR.$_POST["serverPath"];
        }

        $Images = new Model_Images();
        $imgs = $Images->getAllRows();

        foreach ($_FILES["imgs"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["imgs"]["tmp_name"][$key];
                $name = $_FILES["imgs"]["name"][$key];
                move_uploaded_file($tmp_name, $img_path.DS.$name);
            }
        }




        // показать загруженые файлы
        // дать возможность привязать к  базе
        $this->template->view('index');
    }

}