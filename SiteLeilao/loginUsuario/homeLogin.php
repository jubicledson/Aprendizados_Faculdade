<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="homeLogin.php" method="get">
        <input type="submit" name="CadastrarItem" value="Cadastrar Item">
    </form><p>
    <?php
        session_start();
        echo "Bem-vindo! ".$_SESSION['login'][1]."<br><p>";

        if(isset($_GET["CadastrarItem"])){
            echo '
                    <form enctype="multipart/form-data" method="post" action="../CadastrarItem/CadastrarItem.php">
                        <label for="nomeItem">Nome do Item: </label>
                        <input type="text" name="nomeItem"><p>
                        <label for="imagem">Escolha a imagem: </label>
                        <input type="file" name="imagem"><p>
                        <label for="">Lance Mínimo: </label>
                        <input type="text" name="minimo"><p>
                        <input type="submit" value="Cadastrar">
                    </form><br><hr>
            ';
        }
    ?>

</body>
</html>