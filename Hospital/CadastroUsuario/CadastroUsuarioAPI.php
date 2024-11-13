<?php

    include '../ConexaoSql.php';

    try{
        $sql = "INSERT INTO `tblusuario` (`nomeUsuario`, `senhaUsuario`, `tipoUsuario`, `crmUsuario`, `especialidadeUsuario`, `idLoginUsuario`) VALUES (:nome, :senha, :tipo, :crm, :especialidade, 0)";
        
        $comando = $conn->prepare($sql);

        $resultado = $comando->execute(array('nome' => $_GET['nomeUsuario'], 'senha' => md5($_GET['senhaUsuario']), 'tipo' => $_GET['tipoUsuario'], 'crm' => $_GET['crmUsuario'], 'especialidade' => $_GET['especialidadeUsuario'] ));

        if($resultado){
           // echo "Usuario cadastrado";

            $sql = "SELECT `idUsuario` FROM `tblusuario` WHERE `nomeUsuario` LIKE :nome AND `senhaUsuario` LIKE :senha AND `tipoUsuario` LIKE :tipo AND `crmUsuario` LIKE :crm AND `especialidadeUsuario` LIKE :especialidade AND `idLoginUsuario` = 0";
            
            $comando = $conn->prepare($sql);
            
            $resultado = $comando->execute(array('nome' => $_GET['nomeUsuario'], 'senha' => md5($_GET['senhaUsuario']), 'tipo' => $_GET['tipoUsuario'], 'crm' => $_GET['crmUsuario'], 'especialidade' => $_GET['especialidadeUsuario']));

            if($resultado){
                //echo "Comando executado";
                $dados = 0;
                while($dados = $comando->fetch()){

                    $idLogin = sprintf('%05d', $dados['idUsuario']);
                    $idLogin = strval($idLogin);
                    //echo($idLogin);
                    $sql = "UPDATE `tblusuario` SET `idLoginUsuario` = ? WHERE `tblusuario`.`idUsuario` = ?";
                    $comando2 = $conn->prepare($sql);

                    $comando2->execute(array($idLogin, $dados['idUsuario']));
                    
                    $json = array('id' => $idLogin, 'nome' => $_GET['nomeUsuario']);

                    echo json_encode($json);
               
                }
            }
        }else{
           // echo "Erro ao executar o cadastro";
        }
    }
    catch(Exeption $e){
       // echo "Erro: $e";
    }

?>