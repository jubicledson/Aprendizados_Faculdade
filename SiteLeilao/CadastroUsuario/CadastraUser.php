<?php

    function inserirDados($nomeUsuario, $cpfUsuario, $senhaUsuario){
        include "../ConexaoSql.php";
        try{

            $sql = "INSERT INTO `tblusuario` (`nomeUsuario`, `cpfUsuario`, `senhaUsuario`) VALUES (:nome, :cpf, :senha)";
            
            $comando = $conn->prepare($sql);
    
            $resultado = $comando->execute(array('nome' => $nomeUsuario, 'cpf' => $cpfUsuario, 'senha' => hash('sha256', $senhaUsuario)));
    
            if($resultado){
                return "Usuario cadastrado";
                
            }else{
                return "Erro ao executar o cadastro";
            }
        }
        catch(Exeption $e){
            return "Erro: $e";
        }
        
    }

    $dados = inserirDados($_GET['nome'], $_GET['cpf'], $_GET['senha']);

    $resultado = array('dados' => $dados);

    echo json_encode($resultado);




?>