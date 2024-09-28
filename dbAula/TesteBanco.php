<?php
    $dns =  "mysql:host=localhost;dbname=aula06";
    $user = "root";
    $password = "";

    try{
        $conexao = new PDO($dns, $user, $password);
    }catch (PDOException $excecao){
        echo "Erro de conexao: " . $excecao->getMessage();
    }
?>