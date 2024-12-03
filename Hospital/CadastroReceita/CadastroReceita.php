<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include '../ConexaoSql.php';
        session_start();
        if(isset($_GET['idPaciente']) && $_GET['idPaciente'] != false){
            
            $comandoSql = "SELECT * FROM `tblpaciente` WHERE `idPaciente` = ".$_GET['idPaciente'];

            try{
                $comando = $conn->prepare($comandoSql);

                $resultado = $comando->execute();

                if($resultado){

                    while($linha = $comando->fetch()){

                        if($linha['situacaoPaciente'] == true){
                            $sit = "Em atendimento";
                        }else{$sit = "Liberado";}

                        echo '
                            <h3>Nome do paciente: '.$linha["nomePaciente"].'</h3>
                            <h3>Cpf do paciente: '.$linha["cpfPaciente"].'</h3>
                            <h3>Situação do paciente: '.$sit.'</h3>
                            <h3>Cuidador Responsável: '.capturaNomeMedico($linha["cuiResPaciente"]).'</h3>
                            <hr><p>
                            ';
                            $idPacienteG = $linha["idPaciente"];
                    }
                }
            }
            catch(Exception $e){ echo "Erro $e"; }

                
        }else{
            $idPacienteG = 0;
            echo "Id do Paciente não indexado, volte e selecione o paciente";
        }
        
        ?>
        
        <form action="CadastroReceitaAction.php" method="post">
            <h3>Cadastrar Medicamento</h3><br>
            <label for="nomeReceita">Nome do Medicamento:</label><br>
            <input type="text" name="nomeReceita"><br><p>
            <label for="doseReceita">Dose do Medicamento:</label><br>
            <input type="text" name="doseReceita"><br><p>
            <input type="hidden" name="idPaciente" value="<?php echo $idPacienteG; ?>">
            <input type="submit" name="btnCadastrar" value="Cadastar">
        </form>
        
 <?php

        function capturaNomeMedico($cuiResPaciente){
            include '../ConexaoSql.php';
            $comandoSql = "SELECT `nomeUsuario` FROM `tblusuario` WHERE `idUsuario` = $cuiResPaciente";

            try{
                $comando = $conn->prepare($comandoSql);

                $resultado = $comando->execute();

                if($resultado){

                    while($idCuiRes = $comando->fetch()){
                        return $idCuiRes[0];
                        var_dump($idCuiRes);
                    }
                }
            }
            catch(Exception $e){ echo "Erro $e"; }

        }
    ?>
</body>
</html>