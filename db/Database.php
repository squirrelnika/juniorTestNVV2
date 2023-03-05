<?php

namespace App\db;

use PDO;
use PDOException;
use App\products\Product;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        try{
            $pdo = new PDO('mysql:host=' . DB_HOST . ';port=3306;', DB_USER, DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        } catch(PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public function getProducts()
    {
        $statement = $this->pdo->prepare('SELECT * FROM products');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduct($sku)
    {
        $statement = $this->pdo->prepare('SELECT * FROM products WHERE sku = :sku');
        $statement->bindValue(':sku', $sku);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteProduct($sku)
    {
        $statement = $this->pdo->prepare('DELETE FROM products WHERE sku = :sku');
        $statement->bindValue(':sku', $sku);

        return $statement->execute();
    }

    public function createProduct(Product $product)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (sku, name, price, type, typeAttribute)
                VALUES (:sku, :name, :price, :type, :typeAttribute)");

        $statement->bindValue(':sku', $product->sku);
        $statement->bindValue(':name', $product->name);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':type', $product->type);
        $statement->bindValue(':typeAttribute', $product->value);

        $statement->execute();
    }


}
