<?php
header('Content-Type: application/json');

// Função para calcular o IMC
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// Função para classificar o IMC
function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        return "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        return "Obesidade grau 2";
    } else {
        return "Obesidade grau 3";
    }
}

// Função para calcular o peso ideal com IMC de 24,9
function calcularPesoIdeal($altura) {
    return 24.9 * ($altura * $altura);
}

// Verifica se os parâmetros peso e altura foram passados
if (isset($_GET['peso']) && isset($_GET['altura'])) {
    $peso = floatval($_GET['peso']);
    $altura = floatval($_GET['altura']);
    
    if ($peso > 0 && $altura > 0) {
        // Cálculo do IMC
        $imc = calcularIMC($peso, $altura);
        $classificacao = classificarIMC($imc);
        
        // Peso ideal para IMC de 24,9
        $pesoIdeal = calcularPesoIdeal($altura);
        $diferencaPeso = $pesoIdeal - $peso;

        $response = [
            "imc" => number_format($imc, 2),
            "classificacao" => $classificacao,
            "peso_ideal" => number_format($pesoIdeal, 2),
            "diferenca_peso" => number_format($diferencaPeso, 2),
            "acao" => $diferencaPeso > 0 ? "ganhar" : "perder"
        ];

        echo json_encode($response);
    } else {
        echo json_encode(["erro" => "Peso e altura devem ser maiores que zero."]);
    }
} else {
    echo json_encode(["erro" => "Parâmetros 'peso' e 'altura' são obrigatórios."]);
}
?>
