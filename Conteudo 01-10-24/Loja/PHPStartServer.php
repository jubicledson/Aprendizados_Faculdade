<?php

    $server = 'localhost';
    $bd = 'bd081024';
    $user = 'root';
    $pass = '';

    try{
        $conexao = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
    }catch(PDOException $excecao){
        echo "Erro exeption: " . $excecao->getMessage();
    }


?>