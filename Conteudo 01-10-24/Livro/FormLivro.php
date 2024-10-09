<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="FormLivroAction.php" method="POST">
        <label for="titulo">Título do livro: </label><input name="titulo" type="text"><br>
        <label for="idioma">Idioma do Livro: </label><input name="idioma" type="text"><br>
        <label for="qntP">Quantidade de Páginas do Livro: </label><input name="qntP" type="text"><br>
        <label for="editora">Editora do livro: </label><input name="editora" type="text"><br>
        <label for="dPub">Data de Publicação: </label><input name="dPub" type="date"><br>
        <label for="isbn">ISBN do Livro: </label><input maxlength="13" name="isbn" type="text"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>