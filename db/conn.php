<?php 

    try{
        $pdo = new PDO('mysql:host=' . DB_HOST . ';port=3306;', DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    // require_once 'crud.php';
    // $crud = new crud($pdo);
?>