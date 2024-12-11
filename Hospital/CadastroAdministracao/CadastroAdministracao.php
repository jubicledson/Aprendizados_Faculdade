<?php
include '../ConexaoSql.php';
session_start();
if(isset($_GET["idReceita"])){
    
        
        try{
            $dataR = date('Y-m-d');
            $hora = date('H:i:s');
            $sql = "INSERT INTO `tblAdministracao` (`dataAdministrada`, `horaAdministrada`, `idReceita`) VALUES (:dataR, :hora, :idReceita)";
            
            $comando = $conn->prepare($sql);
        
            $resultado = $comando->execute(array('dataR' => $dataR, 'hora' => $hora, 'idReceita' => $_GET['idReceita']));
            if($resultado){
                $sql = "UPDATE `tblReceita` SET administradoReceita = 1 WHERE idReceita = ".$_GET['idReceita'];
            
                $comando = $conn->prepare($sql);
            
                $resultado = $comando->execute();
                if($resultado){
                    echo "Administração Cadastrada em $dataR às $hora";
                }
        
            }else{
                echo "Erro ao executar o cadastro";
            }
        
        }
        catch(Exeption $e){
            echo "Erro: $e";
        }
    
}else{
    header('location: HomeEnfUsuario.php');
}
?>