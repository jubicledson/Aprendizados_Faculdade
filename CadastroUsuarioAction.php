<?php

    include 'ConexaoSql.php';

    try{
        $sql = "INSERT INTO `tblusuario` (`nomeUsuario`, `senhaUsuario`, `tipoUsuario`, `crmUsuario`, `especialidadeUsuario`, `idLoginUsuario`) VALUES (:nome, :senha, :tipo, :crm, :especialidade, 0)";
        
        $comando = $conn->prepare($sql);

        $resultado = $comando->execute(array('nome' => $_POST['nomeUsuario'], 'senha' => md5($_POST['senhaUsuario']), 'tipo' => $_POST['tipoUsuario'], 'crm' => $_POST['crmUsuario'], 'especialidade' => $_POST['especialidadeUsuario'] ));

        if($resultado){
            echo "Usuario cadastrado";

            $sql = "SELECT `idUsuario` FROM `tblusuario` WHERE `nomeUsuario` LIKE :nome AND `senhaUsuario` LIKE :senha AND `tipoUsuario` LIKE :tipo AND `crmUsuario` LIKE :crm AND `especialidadeUsuario` LIKE :especialidade AND `idLoginUsuario` = 0";
            
            $comando = $conn->prepare($sql);
  
            if($resultado){
                echo "Comando executado";

                while($dados = $comando->fetch()){
                    $idLogin = sprintf('%06d' ,$dados['idUsuario']);
                    $sql = "UPDATE `tblusuario` SET `idLoginUsuario` = $idLogin WHERE `tblusuario`.`idUsuario` = ".$dados['idUsuario'];

                    $comando = $conn->execute($sql);
  
                }
            }
        }else{
            echo "Erro ao executar o cadastro";
        }
    }
    catch(Exeption $e){
        echo "Erro: $e";
    }

?>