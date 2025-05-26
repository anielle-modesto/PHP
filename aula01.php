<h1>Minha Primeira Página PHP</h1>
<?php 

# 28/04/2025

// Exibindo texto na tela
echo "Olá Mundo!<br>";
echo "Meu nome é Eduardo";

echo "<h3>Aprendendo PHP</h3>";

// comentário de uma linha
# comentário de uma linha
/*
   comentário de várias linhas
   echo "Olá Mundo!<br>";
   echo "Meu nome é Eduardo"; 
*/

# 06/05/2025
// Variáveis
// Usamos o símbolo $ para declarar uma variável
// As variáveis podem armazenar diferentes tipos de dados, como string, inteiro, float, booleano e nulo

$nome = "Eduardo"; // string
$idade = 41; // inteiro
$altura = 1.74; // float
$peso = 83.5; // float
$casado = false; // booleano
$filhos = null; // nulo

// Exibindo variáveis
echo "<h3>Dados Pessoais</h3>";
echo "Nome: $nome<br>";
echo "Idade: $idade<br>";
echo "Altura: $altura<br>";
echo "Peso: $peso<br>";
echo "Casado: $casado<br>";
echo "Filhos: $filhos<br>";
echo "<br>";

// Cálculo do IMC
$imc = $peso / ($altura * $altura); // Fórmula do IMC: peso / (altura * altura)
// Exibindo o resultado do IMC
echo "<h3>Cálculo do IMC</h3>"; 
echo "Seu IMC é: $imc"; // . number_format($imc, 2) . "<br>"; // number_format formata o número com 2 casas decimais
echo "<br>";

// Classificação do IMC
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso<br>";
} elseif ($imc < 25) {
    echo "Classificação: Peso normal<br>";
} elseif ($imc < 30) {
    echo "Classificação: Sobrepeso<br>";
} else {
    echo "Classificação: Obesidade<br>";
}



?>
