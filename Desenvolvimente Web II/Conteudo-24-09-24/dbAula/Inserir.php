<?php 

    include('testeBanco.php');

    $nome = $_GET["nome"];
    $codSql = "INSERT INTO `tblusuario` (`idUsuario`, `nomeUsuario`) VALUES (NULL, '$nome')";

    try{
        $conexao->exec($codSql);
        echo "Usuario cadastrado com Sucesso!";
    }catch (PDOException $excecao){
        echo "Erro de conexao: " . $excecao->getMessage();
    }

    
?>