<?php

// Front controller

// 1. Загальні налаштування
ini_set('display_errors', 0);
error_reporting(E_ALL);

// 2. Підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

// 3. Установка з'єднання з БД (якщо треба)

// 4. Виклик Router
$router = new Router();
$router->run();