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
        if($_SESSION['login'][2] == "MEDICO"){
            //var_dump($_SESSION['login']);
            echo "<h2>Bem vindo! ".$_SESSION['login'][1]." - ".$_SESSION['login'][2]."</h2>";

        
    ?>
    <form action="HomeMedUsuario.php">
        <input type="submit" name="CadastrarPacientes" value="Cadastrar Pacientes">
        <input type="submit" name="CadastrarMedicamentos" value="Cadastrar Medicamentos">
    </form>
    <?php 

            if(isset($_GET["CadastrarPacientes"])){
                echo '<form action="../CadastroPaciente/cadastroPaciente.php" method="post">
                        <h3>Cadastro de Pacientes</h3>
                        <label for="nomePaciente">Nome do Paciente: </label><br>
                        <input type="text" name="nomePaciente"><br><p>
                        <label for="cpfPaciente">cpf do Paciente:</label><br>
                        <input type="text" maxlength="11" name="cpfPaciente"><br><p>
                        <label for="leitoPaciente">Leito do Paciente:</label><br>
                        <input type="text" name="leitoPaciente"><br><p>
                        <input type="hidden" name="crpUsuario" value="'.$_SESSION["login"][0].'">
                        <input type="submit" value="Salvar">
                    </form>';
            }if(isset($_GET["CadastrarMedicamentos"])){
                echo '<form action="HomeMedUsuario.php" method="post">
                        <h3>Procurar por Paciente</h3><br>
                        <input type="radio" name="cpfnomePacienteR" value="cpf" checked="checked">
                        <label style="margin-right: 40px;" for="cpfnomePacienteR">CPF</label>
                        <input type="radio" name="cpfnomePacienteR" value="nome">
                        <label for="cpfnomePacienteR">NOME</label><br><p>
                        <label for="cpfPaciente">Digite:</label><br>
                        <input type="text" name="cpfnomePaciente"><br><p>
                        <input type="submit" value="Procurar">
                    </form>';
            }

            
            if(isset($_POST["cpfnomePaciente"])){
                $cpfnomeP = $_POST["cpfnomePacienteR"];
                $cpf = $_POST["cpfnomePaciente"];
                if($cpfnomeP == "nome"){
                    $sql = "SELECT * FROM `tblpaciente` WHERE `nomePaciente` LIKE '%".$_POST['cpfnomePaciente']."%'";
                    $comando = $conn->prepare($sql);
                    $resultado = $comando->execute();
                    echo '<form action="HomeMedUsuario.php" method="post">
                        <h3>Procurar por Paciente</h3><br>
                        <input type="radio" name="cpfnomePacienteR" value="cpf">
                        <label style="margin-right: 40px;" for="cpfnomePacienteR">CPF</label>
                        <input type="radio" name="cpfnomePacienteR" value="nome" checked="checked">
                        <label for="cpfnomePacienteR">NOME</label><br><p>
                        <label for="cpfPaciente">Digite:</label><br>
                        <input type="text" name="cpfnomePaciente"><br><p>
                        <input type="submit" value="Procurar">
                    </form>';
                }elseif($cpfnomeP == "cpf"){
                    $sql = "SELECT * FROM `tblpaciente` WHERE `cpfPaciente` LIKE '%".$_POST['cpfnomePaciente']."%'";
                    $comando = $conn->prepare($sql);
                    $resultado = $comando->execute();
                    echo '<form action="HomeMedUsuario.php" method="post">
                        <h3>Procurar por Paciente</h3><br>
                        <input type="radio" name="cpfnomePacienteR" value="cpf" checked="checked">
                        <label style="margin-right: 40px;" for="cpfnomePacienteR">CPF</label>
                        <input type="radio" name="cpfnomePacienteR" value="nome">
                        <label for="cpfnomePacienteR">NOME</label><br><p>
                        <label for="cpfPaciente">Digite:</label><br>
                        <input type="text" name="cpfnomePaciente"><br><p>
                        <input type="submit" value="Procurar">
                    </form>';
                }else{
                    echo "Houve um erro...";
                }
                
            if($resultado){
                    echo '
                    <table class="table" border="1">
                        <tr>
                            <th>ID</th>
                            <th>Nome do Paciente</th>
                            <th>Cpf do Paciente</th>
                            <th>Leito do Paciente</th>
                            <th>Estado do Paciente</th>
                            <th>Cuidador Responsável</th>

                        </tr>
                        ';
                    while($linha = $comando->fetch()){
                        if($linha['situacaoPaciente'] == true){
                            $sit = "Em atendimento";
                        }else{$sit = "Liberado";}

                        echo '
                        <tr>
                            <td><p>'.$linha['idPaciente'].'</p></td>
                            <td><p>'.$linha['nomePaciente'].'</p></td>
                            <td><p>'.$linha['cpfPaciente'].'</p></td>
                            <td><p>'.$linha['leitoPaciente'].'</p></td>
                            <td><p>'.$sit.'</p></td>
                            <td><p>'.$linha['cuiResPaciente'].'</p></td>
                            <td>
                                <a href="http://localhost/Desenvolvimento%20Web%202/Hospital/CadastroReceita/CadastroReceita.php?idPaciente='.$linha["idPaciente"].'">Cadastrar Medicamento</a>
                            </td>
                        </tr>       
                            ';
                    }
                }
            }
        }else{
            echo "USUÁRIO NÃO AUTORIZADO!";
        }
    
    ?>




</body>
</html>