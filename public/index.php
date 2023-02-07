<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use App\Handler\Contact;
use App\Router;

$router = new Router();

$router->get("/", function() {
   require_once (__DIR__ . '/../views/products.php');
});

$router->get("/about", function() {
    echo "About Page";
});

$router->get("/contact", Contact::class.'::execute');

$router->post("/contact", function ($params) {
    var_dump($params);
});

$router->get("/addproduct", function(){
    require_once (__DIR__ . '/../views/addproduct.php');
});

$router->post("/addproduct", function ($params) {
    var_dump($params);
});

$router->addNotFoundHandler(function () {
    $title = 'Not Found!';
    require_once(__DIR__ . '/../views/404.php');
});


$router->run();