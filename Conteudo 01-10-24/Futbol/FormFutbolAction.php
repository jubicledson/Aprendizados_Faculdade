<?php 
    include 'PHPStartServer.php';


    try{
      $sql = "INSERT INTO `tblfutbol` ( `nometime`, `pontostime`) VALUES (:nome, :pnt)";
      $command = $conn->prepare($sql);
      $result = $command->execute(array('nome' => $_GET['nome'], 'pnt' => $_GET['pnt']));

      if($result){
        echo "Comando executado";
      }else{
        echo "Erro ao executar o comando";
      }
    }catch(Exception $e ){
        echo "Erro: $e";
    }

?>