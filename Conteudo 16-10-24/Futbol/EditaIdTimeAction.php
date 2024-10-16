<?php
        include '../ConexaoSql.php';

        $id = $_GET['idTime'];
        $nome = $_GET['nomeTime'];
        $pontos = $_GET['pontosTime'];

        $codigoSql = "UPDATE `tblfutbol` SET `nomeTime` = :nm, `pontosTime` = :pts WHERE `tblfutbol`.`idTime` = :id";  
           
           try{
               
               $comandoSql = $conn->prepare($codigoSql);

               $resultado = $comandoSql->execute(array('nm' => $_GET['nomeTime'], 'pts' => $_GET['pontosTime'], 'id' => $_GET['idTime']));
   
               if($resultado != 0){
                   echo $resultado;
               }else{
                   echo "Erro ao alterar Arquivo";
               }
           }catch(Exception $e){
               echo "Erro: $e";
           }
   
   
    ?>