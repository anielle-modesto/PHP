<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        return "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        return "Obesidade grau 2";
    } else {
        return "Obesidade grau 3";
    }
}

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
    $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);

    if ($peso && $altura && $altura > 0) {
        $imc = calcularIMC($peso, $altura);
        $classificacao = classificarIMC($imc);
        $resultado = "Seu IMC é: " . number_format($imc, 2) . "<br>Classificação: " . $classificacao;
    } else {
        $resultado = "Por favor, insira valores válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required><br><br>
        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura" required><br><br>
        <button type="submit">Calcular IMC</button>
    </form>
    <br>
    <div>
        <?php if (!empty($resultado)) echo $resultado; ?>
    </div>
</body>
</html>
