<?php
    // включим отображение всех ошибок
    error_reporting(E_ALL);

    //if(!$_GET[0] == "favicon.ico"){

        // подключаем конфиг
        include('config.php');

        // Соединяемся с БД
        $dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $dbObject->exec('SET CHARACTER SET utf8');

        // подключаем ядро сайта
        include(SITE_PATH . DS . 'core' . DS . 'core.php');

        // Загружаем router
        $router = new Router();
        // задаем путь до папки контроллеров.
        $router->setPath(SITE_PATH . 'controllers');
        // запускаем маршрутизатор
        $router->start();
   // }
