<?php
        include '../ConexaoSql.php';

        $id = $_GET['idLivro'];
        $nome = $_GET['nomeLivro'];
        $pontos = $_GET['pontosLivro'];

        $codigoSql = "UPDATE `tbllivro` SET `tituloLivro` = :nm, `idiomaLivro` = :idi, `qntPagLivro` = :qnt, `editoraLivro` = :ed, `` WHERE `tbllivro`.`idLivro` = :id";  
           
           try{
               
               $comandoSql = $conn->prepare($codigoSql);

               $resultado = $comandoSql->execute(array('nm' => $_GET['nomeLivro'], 'idi' => $_GET['pontosLivro'], 'id' => $_GET['idLivro']
               , 'qnt' => $_GET['qntPagLivro'],, 'ed' => $_GET['editoraLivro'],, 'dt' => $_GET['dataPubLivro'],
               , 'isbn' => $_GET['isbnLivro'],));
   
               if($resultado != 0){
                   echo $resultado;
               }else{
                   echo "Erro ao alterar Arquivo";
               }
           }catch(Exception $e){
               echo "Erro: $e";
           }
   
   
    ?>