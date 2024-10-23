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

        $idAluno = $_GET['idAluno'];
        $idTurma = $_GET['idTurma'];
    ?>
    <form action="SalvaCadastro.php">
        <label for="notaAluno">Digite a nota do aluno</label>
        <input name="notaAluno" type="text">
        <input name="idAluno" type="hidden" value="<?php echo $idAluno; ?>">
        <input name="idTurma" type="hidden" value="<?php echo $idTurma; ?>">
        <input name="btnSalvaNota" type="submit" value="Salvar a Nota">
    </form>
    <table border="1">

        <tr>
            <td>Nota do Aluno</td>
        </tr>
        <?php 
        
        $sql = "SELECT * FROM `notas` WHERE `id_aluno` = $idAluno";
        try{
            
            $comando = $conn->prepare($sql);
            $resultado = $comando->execute();
            
            if($resultado){
                while($linha = $comando->fetch()){
                    echo "<tr><td>".$linha['valor']."</td></tr>'";
                }
            }
        }catch(Exception $e){
            echo "Sem nota cadastrada";
        }
        
        ?>
    </table>
</body>
</html>