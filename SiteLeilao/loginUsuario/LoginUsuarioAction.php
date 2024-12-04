<?php

    include "../ConexaoSql.php";
    $sql = "SELECT * FROM `tblusuario` WHERE `senhaUsuario` = :senha AND `cpfUsuario` = :cpfUsuario";
            
    $comando1 = $conn->prepare($sql);
    
    $resultado = $comando1->execute(array('senha' => hash('sha256', $_POST['senhaUsuario']), 'cpfUsuario' => $_POST['cpfUsuario']));

    if($resultado){
        $dados = 0;
        $login = false;
        while($dados = $comando1->fetch()){
            $id = $dados['idUsuario'];
            $nome = $dados['nomeUsuario'];
            $cpf = $dados['cpfUsuario'];
            $arrDados = array($id, $nome, $cpf);
            $login = true;    
        }
        if($login == true){
            echo $arrDados;
            echo "Usuario Logado";
            session_start();
            $_SESSION['login'] = $arrDados;
            header('Location: http://localhost/conteudo/SiteLeilao/loginUsuario/homeLogin.php');
        }else{
            echo "Erro ao logar";
        
        }
    }

?>