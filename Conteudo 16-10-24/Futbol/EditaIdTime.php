<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $id = $_GET['idTime']; ?>
    <form action="EditaIdTimeAction.php">
        <label for="nomeTime">Novo nome do Time</label><input name="nomeTime" type="text"><br>
        <label for="pontosTime">Novo ponto do Time</label><input name="pontosTime" type="text">
        <input name="idTime" type="hidden" value="<?php echo $id ?>"><br>
        <input type="submit">
    </form>

</body>
</html>