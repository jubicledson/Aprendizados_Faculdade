<?php
        include '../ConexaoSql.php';

        $codigoSql = "UPDATE `tblproduto` SET `nomeProduto` = :nm, `urlProduto` = :link, `descricaoProduto` = :descr, `precoProduto` = :preco WHERE `tblproduto`.`idProduto` = :id";  
           
           try{
               
               $comandoSql = $conn->prepare($codigoSql);

               $resultado = $comandoSql->execute(array('nm' => $_POST['nome'], 'link' => $_POST['urlP'], 'descr' => $_POST['descr'], 'preco' => $_POST['preco'], 'id' => $_POST['idProduto']));
   
               if($resultado != 0){
                   echo $resultado;
               }else{
                   echo "Erro ao alterar Arquivo";
               }
           }catch(Exception $e){
               echo "Erro: $e";
           }
   
   
    ?>