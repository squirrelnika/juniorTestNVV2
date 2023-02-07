<?php

namespace App\db;

use PDO;

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


}
