<?php

// контролер
class Controller_Images extends Controller_Base
{

    // шаблон
    public $layouts = "edit_images_layouts";

    // экшен
    function index()
    {
        // пустая форма для загрузки
       $this->template->view('index');
    }

    // обработка загрузки
    function upload()
    {
        foreach ($_FILES["pictures"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
                // basename() может спасти от атак на файловую систему;
                // может понадобиться дополнительная проверка/очистка имени файла
                $name = basename($_FILES["pictures"]["name"][$key]);
                move_uploaded_file($tmp_name, "/web/data/img/$name");
            }
        }

        // показать загруженые файлы
        // дать возможность привязать к  базе
        $this->template->view('index');
    }

}