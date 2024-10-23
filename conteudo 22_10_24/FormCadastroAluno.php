<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    include 'ConexaoSQL.php';

    $sql = "SELECT * FROM `turmas`";

    $comando = $conn->prepare($sql);
    $resultado = $comando->execute();
?>
    <form action="SalvaCadastro.php">
        <label for="nomeAluno">Nome do Aluno: </label>
        <input type="text" name="nomeAluno">
        <select name="Turmas" id="">
            <?php
                if($resultado){
                    while($linha = $comando->fetch()){
                        echo "<option value='".$linha['id']."'>".$linha['nome']."</option>'";
                    }
                }
            ?>
            
        </select>
        <input name="btnSalvaAluno" type="submit" value="Salvar Aluno">
    </form>
</body>
</html>