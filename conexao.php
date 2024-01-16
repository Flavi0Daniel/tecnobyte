<?php
    $username = "root";
    $db_name = "aula_tecnobyte";
    $password = "";
    $host = "localhost";

    try{
        $conn = new PDO ("mysql:host=$host;dbname=$db_name",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e->getMessage();
    }
?>