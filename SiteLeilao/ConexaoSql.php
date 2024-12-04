<?php

    $server = 'localhost';
    $bd = 'dbLeilao';
    $user = 'root';
    $pass = '';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
    }catch(PDOException $excecao){
        echo "Erro exeption: " . $excecao->getMessage();
    }


?>