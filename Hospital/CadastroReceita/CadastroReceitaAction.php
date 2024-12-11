<?php
include '../ConexaoSql.php';
session_start();
if(isset($_POST["nomeReceita"]) && isset($_POST["doseReceita"]) && isset($_POST["idPaciente"]) ){
    
        
        try{
            $dataR = date('Y-m-d');
            $hora = date('H:i:s');
            $sql = "INSERT INTO `tblReceita` (`nomeReceita`, `dataReceita`, `horaReceita`, `doseReceita`, `idPaciente`, `idUsuario`, `dataAplicacao`, `horaAplicacao`) VALUES (:nome, :dataR, :hora, :dose, :idPaciente, :idUsuario, :dataA, :horaA)";
            
            $comando = $conn->prepare($sql);
        
            $resultado = $comando->execute(array('nome' => $_POST['nomeReceita'],'dataR' => $dataR, 'hora' => $hora, 'dose' => $_POST['doseReceita'], 'idPaciente' => $_POST['idPaciente'], 'idUsuario' => $_SESSION['login'][0], 'dataA' => $_POST['dataAplicacao'], 'horaA' => $_POST['horaAplicacao']));
            if($resultado){
                echo "Receita Cadastrada em $dataR às $hora";
        
            }else{
                echo "Erro ao executar o cadastro";
            }
        
        }
        catch(Exeption $e){
            echo "Erro: $e";
        }
    
}else{
    header('location: CadastroReceita.php');
}
?>