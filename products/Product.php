<?php

namespace App\products ;

class Product
{
    protected $sku;
    protected $name;
    protected $price;
    protected $productType;
    protected $typeAttribute;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
