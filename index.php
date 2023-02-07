<?php

// 1 общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2 подключение файлов системы
define( 'ROOT', dirname(__FILE__) ) ;
require ROOT . '/components/Router.php';
require ROOT . '/components/DBConnect.php';


// 3 соединение с БД

// 4 вызов Router
Router::run();