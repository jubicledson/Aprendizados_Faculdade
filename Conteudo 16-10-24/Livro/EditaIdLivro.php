<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $id = $_GET['idLivro']; ?>
    <form action="EditaIdLivroAction.php">
        <label for="tituloLivro">Novo titulo do Livro</label><input name="tituloLivro" type="text"><br>
        <label for="idiomaLivro">Novo ponto do Livro</label><input name="idiomaLivro" type="text">
        <label for="qntPagLivro">Novo ponto do Livro</label><input name="qntPagLivro" type="text">
        <label for="editoraLivro">Novo ponto do Livro</label><input name="editoraLivro" type="text">
        <label for="dataPubLivro">Novo ponto do Livro</label><input name="dataPubLivro" type="date">
        <label for="isbnLivro">Novo ponto do Livro</label><input name="isbnLivro" type="text">
        <input name="idLivro" type="hidden" value="<?php echo $id ?>"><br>
        <input type="submit">
    </form>

</body>
</html>