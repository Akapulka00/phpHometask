<?php
require_once '../vendor/autoload.php';

if (preg_match('/\.(css|js|png|jpg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}

\Cakes\Kernel\Router::start();


// front controller

// mvc:
// model - работа с бд, файлами, валидаторы и тп
// view - html (из папки templates)
// controller - связь между model и view:
    // принять запрос от клиента
    // передать/получить данные
    // генерация html или json(xml)
    // оправка ответа (echo)
