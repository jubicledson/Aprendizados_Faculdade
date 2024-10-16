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
        <label for="idiomaLivro">Novo idioma do Livro</label><input name="idiomaLivro" type="text"><br>
        <label for="qntPagLivro">Nova Quantidade de paginas do Livro</label><input name="qntPagLivro" type="text"><br>
        <label for="editoraLivro">Nova editora do Livro</label><input name="editoraLivro" type="text"><br>
        <label for="dataPubLivro">Nova data do Livro</label><input name="dataPubLivro" type="date"><br>
        <label for="isbnLivro">Novo ISBN do Livro</label><input name="isbnLivro" type="text" maxlength="13"><br>
        <input name="idLivro" type="hidden" value="<?php echo $id ?>"><br>
        <input type="submit">
    </form>

</body>
</html>