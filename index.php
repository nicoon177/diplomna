<?php

// FRONT CONTROLER

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// Файл автозагрузки
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');


// Запуск метода run в Router
$router = new Router();
$router->run();