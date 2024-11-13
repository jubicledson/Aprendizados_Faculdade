<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
    <script>
        function envia() {
            var capital = document.getElementById('capital').value;
            var taxa = document.getElementById('taxa').value;
            var tempo = document.getElementById('tempo').value;

            // Construindo a URL com os parâmetros
            var url = 'APIJurosSimples.php?capital=' + capital + '&taxa=' + taxa + '&tempo=' + tempo;

            fetch(url)
            .then(response => response.json())
            .then(data => {
                document.getElementById('saida').textContent = "Os juros são: R$" + data.juros.toFixed(2);
            });
        }
    </script>
</head>
<body>
    <h1>Calculadora de Juros Simples</h1>

    <div id='mostrar'>
        <label for="capital">Capital Inicial:</label>
        <input type="number" id="capital">

        <label for="taxa">Taxa de Juros (% a.a.):</label>
        <input type="number" id="taxa">

        <label for="tempo">Tempo (anos):</label>
        <input type="number" id="tempo">

        <input type="button" value='Calcular' onclick='envia()'>
        
        <p id='saida'></p>
    </div>

</body>
</html>  