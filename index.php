<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/juniorTest/index':
    case '/':
        require __DIR__ . '/views/index.php';
        break;

    case '/juniorTest/addproduct':
        require __DIR__ . '/views/addproduct.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>