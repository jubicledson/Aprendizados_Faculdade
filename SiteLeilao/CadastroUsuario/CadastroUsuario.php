<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function cadastra(){
            var nome =  document.getElementById('nome').value;
            var cpf =  document.getElementById('cpf').value;
            var senha =  document.getElementById('senha').value;

            var url = 'CadastraUser.php?nome=' + nome + '&cpf=' + cpf + '&senha=' + senha;

            fetch(url)
            .then(response => response.json())
            .then(data => {
                document.getElementById('saida').textContent = "Usuario " + data.dados + " Cadastrado!";
            });
        }
    </script>
</head>
<body>
    <h1>Cadastrar Usuario</h1>

    <label for="nome">Insira seu nome</label>
    <input type="text" id="nome"><br> <br>
    <label for="cpf">Insira seu CPF</label>
    <input type="text" id="cpf"><br> <br>
    <label type="text">Insira sua senha</label>
    <input type="text" id="senha"><br> <br>
    <input type="button" value="Cadastrar" onclick="cadastra()">

    <h1 id="saida"></h1>
</body>
</html>