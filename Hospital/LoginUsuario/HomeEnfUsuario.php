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
        if($_SESSION['login'][2] == "ENFERMEIRO"){
            //var_dump($_SESSION['login']);
            echo "<h2>Bem vindo! ".$_SESSION['login'][1]." - ".$_SESSION['login'][2]."</h2>";

        
    ?>
    <form action="HomeEnfUsuario.php">
        <input type="submit" name="CadastrarAplicacao" value="Cadastrar Aplicacao">
        <input type="submit" name="CadastrarMedicamentos" value="Cadastrar Medicamentos">
    </form>
    <?php 

            if(isset($_GET["CadastrarAplicacao"])){
                echo '<form action="HomeEnfUsuario.php" method="post">
                        <h3>Procurar por Paciente</h3><br>
                        <input type="radio" name="cpfnomePacienteR" value="leito" checked="checked">
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
                    $sql = "SELECT * FROM `vwenfermeiro` WHERE `nomePaciente` LIKE '%".$_POST['cpfnomePaciente']."%'";
                    $comando = $conn->prepare($sql);
                    $resultado = $comando->execute();
                    echo '<form action="HomeEnfUsuario.php" method="post">
                        <h3>Procurar por Paciente</h3><br>
                        <input type="radio" name="cpfnomePacienteR" value="cpf">
                        <label style="margin-right: 40px;" for="cpfnomePacienteR">CPF</label>
                        <input type="radio" name="cpfnomePacienteR" value="nome" checked="checked">
                        <label for="cpfnomePacienteR">NOME</label><br><p>
                        <label for="cpfPaciente">Digite:</label><br>
                        <input type="text" name="cpfnomePaciente"><br><p>
                        <input type="submit" value="Procurar">
                    </form>';
                }elseif($cpfnomeP == "leito"){
                    $sql = "SELECT * FROM `vwenfermeiro` WHERE `nomePaciente` LIKE '%".$_POST['cpfnomePaciente']."%'";
                    $comando = $conn->prepare($sql);
                    $resultado = $comando->execute();
                    echo '<form action="HomeEnfUsuario.php" method="post">
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
                            <th>Nome do Paciente</th>
                            <th>Leito do Paciente</th>
                            <th>Nome do Medicamento</th>
                            <th>Data de Aplicação</th>
                            <th>Hora de Aplicação</th>
                            <th>Dose do Medicamento</th>

                        </tr>
                        ';
                    while($linha = $comando->fetch()){
                        echo '
                        <tr>
                            <td><p>'.$linha['nomePaciente'].'</p></td>
                            <td><p>'.$linha['leitoPaciente'].'</p></td>
                            <td><p>'.$linha['nomeReceita'].'</p></td>
                            <td><p>'.$linha['dataAplicacao'].'</p></td>
                            <td><p>'.$linha['horaAplicacao'].'</p></td>
                            <td><p>'.$linha['doseReceita'].'</p></td>
                            <td>
                                <a href="http://localhost/Desenvolvimento%20Web%202/Hospital/CadastroAdministracao/CadastroAdministracao.php?idReceita='.$linha["idReceita"].'">Cadastrar Administração</a>
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