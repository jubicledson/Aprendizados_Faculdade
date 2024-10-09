<?php 
    include 'PHPStartServer.php';


    try{
      $sql = "INSERT INTO `tblproduto` ( `nomeProduto`, `urlProduto`, `descricaoProduto`, `precoProduto`) 
      VALUES (:nome, :urlP, :descr, :preco)";
      $command = $conexao->prepare($sql);

      $result = $command->execute(array('nome' => $_POST['nome'], 'urlP' => $_POST['urlP'], 'descr' => $_POST['descr'], 'preco' => $_POST['preco']));

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