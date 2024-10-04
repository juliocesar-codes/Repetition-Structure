<?php
include 'includes/header.php';
echo '<a href="index.php"><button>Voltar</button></a>';

$soma = 0;
$i = 1; // Inicializa o contador

// Loop que continua enquanto $i for menor ou igual a 100
while ($i <= 100) {
    $soma += $i; // Adiciona o valor de $i à soma
    $i++; // Incrementa o contador
}

// Exibe o resultado da soma
echo "A soma de todos os números de 1 a 100 é: " . $soma;

include 'includes/footer.php';
