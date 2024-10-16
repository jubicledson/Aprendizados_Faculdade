<?php 
    include '../ConexaoSql.php';


    try{
      $sql = "INSERT INTO `tbllivro` ( `tituloLivro`, `idiomaLivro`, `qntPagLivro`, `editoraLivro`, `dataPubLivro`, `isbnLivro`) 
      VALUES (:titulo, :idioma, :qntP, :editora, :dPub, :isbn)";
      $command = $conn->prepare($sql);

      $post = array('titulo' => $_POST['titulo'], 'idioma' => $_POST['idioma'], 'qntP' => $_POST['qntP'],
       'editora' => $_POST['editora'], 'dPub' => $_POST['dPub'], 'isbn' => $_POST['isbn']);

      $result = $command->execute($post);

      if($result){
        echo "Comando executado";
      }else{
        echo "Erro ao executar o comando";
      }
    }catch(Exception $e ){
        echo "Erro: $e";
    }

    $conn = null;
?>