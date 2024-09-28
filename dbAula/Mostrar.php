<?php 
    $resultado = "";
    include('testeBanco.php');

    $codSql = "SELECT `nomeUsuario` FROM `tblusuario`";

    try{
        $resultado = $conexao->query($codSql);
    }catch (PDOException $excecao){
        echo "Erro de conexao: " . $excecao->getMessage();
    }
?>
    <table border='1px'>
    
    <?php foreach($resultado as $linha){ ?>
        <tr><td>
        <?php echo $linha['nomeUsuario'];?>
        </td></tr>
    <?php } ?>
   
    </table>

