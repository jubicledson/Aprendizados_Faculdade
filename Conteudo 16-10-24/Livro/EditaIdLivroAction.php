<?php
        include '../ConexaoSql.php';

        $id = $_GET['idLivro'];
        $nome = $_GET['tituloLivro'];
        $pontos = $_GET['idiomaLivro'];

        $codigoSql = "UPDATE `tbllivro` SET `tituloLivro` = :nm, `idiomaLivro` = :idi, `qntPagLivro` = :qnt, `editoraLivro` = :ed, `dataPubLivro` = :dt, `isbnLivro` = :isbn WHERE `tbllivro`.`idLivro` = :id";  
           
           try{
               
               $comandoSql = $conn->prepare($codigoSql);

               $resultado = $comandoSql->execute(array('nm' => $_GET['tituloLivro'], 'idi' => $_GET['idiomaLivro'], 'id' => $_GET['idLivro'], 'qnt' => $_GET['qntPagLivro'], 'ed' => $_GET['editoraLivro'], 'dt' => $_GET['dataPubLivro'], 'isbn' => $_GET['isbnLivro']));
   
               if($resultado != 0){
                   echo $resultado;
               }else{
                   echo "Erro ao alterar Arquivo";
               }
           }catch(Exception $e){
               echo "Erro: $e";
           }
   
   
    ?>