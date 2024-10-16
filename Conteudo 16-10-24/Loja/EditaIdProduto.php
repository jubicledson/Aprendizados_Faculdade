<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $id = $_GET['idProduto']; ?>
    <form action="EditaIdProdutoAction.php" method="POST">
        <label for="nome">Nome: </label><input name="nome" type="text"><br>
        <label for="urlP">URL da Imagem: </label><input name="urlP" type="text"><br>
        <label for="descr">Descrição: </label><input name="descr" type="text"><br>
        <label for="preco">Preço do Produto: </label><input name="preco" type="text"><br>
        <input name="idProduto" type="hidden" value="<?php echo $id ?>"></input>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>