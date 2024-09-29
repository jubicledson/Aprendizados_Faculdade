<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Composto</title>
</head>
<body>
    <h1>Cálculo de Juros Composto</h1>

    <form method="GET" action="">
        <label for="capital">Capital (R$):</label>
        <input type="number" id="capital" name="capital" required step="0.01">
        <br><br>

        <label for="taxa">Taxa de Juros (%):</label>
        <input type="number" id="taxa" name="taxa" required step="0.01">
        <br><br>

        <label for="tempo">Tempo (anos):</label>
        <input type="number" id="tempo" name="tempo" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

<?php

    if (isset($_GET['capital']) && isset($_GET['taxa']) && isset($_GET['tempo'])) {
        $capital = $_GET['capital'];
        $taxa = $_GET['taxa'];
        $tempo = $_GET['tempo'];

        function jurosComposto($capital, $taxa, $tempo){
            echo "<h2>Resultado:</h2>";
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>Montante (R$)</th><th>Juros (R$)</th></tr>";

            
            for ($t = 0; $t <= $tempo; $t++) {
                $juros = $capital * pow((1 + $taxa / 100), $t); 
                $montante = $capital + $juros;          
            }
            echo "<tr>";
            echo "<td>" . number_format($montante, 2, ',', '.') . "</td>";
            echo "<td>" . number_format($montante - $capital, 2, ',', '.') . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        
        jurosComposto($capital, $taxa, $tempo);

    }

        
?>
