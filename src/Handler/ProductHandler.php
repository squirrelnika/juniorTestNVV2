<?php

namespace App\Handler;

class ProductHandler
{
    public function getProductPage():void
    {
        require_once (__DIR__ . '/../../views/products.php');
    }

    public function getAddPage():void
    {
        require_once (__DIR__ . '/../views/addproduct.php');
    }

    public function postAddPage():void
    {
        /*For addproduct post action: 
        validate the input and clean data
        create the product object
        save the product in DB
        */
    }

    //  Two test functions
    public function execute(): void
    {
        require_once(__DIR__ . '/../../views/contact.php');
    }

    public function showContact($params)
    {
        var_dump($params);
    }   
}
