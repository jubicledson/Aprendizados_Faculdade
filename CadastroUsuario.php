<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CadastroUsuarioAction.php" method="post">
        <label for="nomeUsuario">Nome do Usuario</label>
        <input type="text" name="nomeUsuario"><br>
        <label for="senhaUsuario">Senha do Usuario</label>
        <input type="text" name="senhaUsuario"><br>
        <label for="tipoUsuario">Tipo do Usuario</label>
        <select name="tipoUsuario">
            <option value="MEDICO">MEDICO</option>
            <option value="ENFERMEIRO">ENFERMEIRO</option>
            <option value="OUTRO">OUTRO</option>
        </select><br>
        <label for="crmUsuario">CRM do Usuario</label>
        <input type="text" name="crmUsuario"><br>
        <label for="especialidadeUsuario">Especialidade do Usuario</label>
        <input type="text" name="especialidadeUsuario" ><br>
        <input type="submit" value="Salver Usuario">
    </form>
</body>
</html>