<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function envia() {
            var nome = document.getElementById('nomeUsuario').value;
            var senha = document.getElementById('senhaUsuario').value;
            var tipo = document.getElementById('tipoUsuario').value;
            var crm = document.getElementById('crmUsuario').value;
            var especialidade = document.getElementById('especialidadeUsuario').value;

            // Construindo a URL com os parâmetros
            var url = 'CadastroUsuarioAPI.php?nomeUsuario=' + nome + '&senhaUsuario=' + senha + '&tipoUsuario=' + tipo + '&crmUsuario=' + crm + '&especialidadeUsuario=' + especialidade;

            fetch(url)
            .then(response => response.json())
            .then(data => {
                document.getElementById('saida').textContent = "Usuario Cadastrado: " + data.nome + ", ID para login: " + data.id;
            });
        }   
    </script>
    <div>
        <label for="nomeUsuario">Nome do Usuario</label>
        <input type="text" id="nomeUsuario"><br>
        <label for="senhaUsuario">Senha do Usuario</label>
        <input type="text" id="senhaUsuario"><br>
        <label for="tipoUsuario">Tipo do Usuario</label>
        <select id="tipoUsuario">
            <option value="MEDICO">MEDICO</option>
            <option value="ENFERMEIRO">ENFERMEIRO</option>
            <option value="OUTRO">OUTRO</option>
        </select><br>
        <label for="crmUsuario">CRM do Usuario</label>
        <input type="text" id="crmUsuario"><br>
        <label for="especialidadeUsuario">Especialidade do Usuario</label>
        <input type="text" id="especialidadeUsuario" ><br>
        <input type="button" value="Salvar Usuario" onclick='envia()'>

        <p id="saida"></p>
    </div>
</body>
</html>