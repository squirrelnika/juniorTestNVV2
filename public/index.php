<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use App\Handler\ProductHandler;
use App\Router;

$router = new Router();

$router->get("/", ProductHandler::class.'::getProductPage');

$router->get("/addproduct", ProductHandler::class.'::getAddPage');

$router->post("/addproduct", ProductHandler::class.'::postAddPage');

// test with Contact page
$router->get("/contact", ProductHandler::class.'::execute');

$router->post("/contact", ProductHandler::class.'::showContact');

$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once(__DIR__ . '/../views/404.php');
});


$router->run();