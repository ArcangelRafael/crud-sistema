<?php
    $servidor="mysql:dbname=sistema;host=localhost:8888";
    $usuario="root";
    $password="root";
    try{
        $pdo = new PDO($servidor, $usuario, $password);
    } catch(PDOException $e){
        echo "No nos pudimos conectar " . $e-getMesage();
    }
?>