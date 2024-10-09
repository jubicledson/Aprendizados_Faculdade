<?php 
    include 'PHPStartServer.php';


    try{
      $sql = "INSERT INTO `tblingredientes` ( `nomeIngrediente`, `qntdIngrediente`) VALUES (:nome, :qntd)";
      $command = $conn->prepare($sql);
      
      $nFormat = floatval(number_format($_GET['qntd'], 1, ',', '.'));
      while(strlen($nFormat) != ","){
        
      }
      echo $nFormat;
      $result = $command->execute(array('nome' => $_GET['nome'], 'qntd' => $nFormat));

      if($result){
        echo "Comando executado";
      }else{
        echo "Erro ao executar o comando";
      }
    }catch(Exception $e ){
        echo "Erro: $e";
    }

?>