<?php
include 'includes/header.php';

echo "<h2>Exemplo de utilização do loop FOR</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$numero = $_POST['numero'];
/*
Estrutura do FOR
for(inicialização ; condição ; incremento){
    trecho de código para executar;
}
*/
echo "Tabuada do $numero:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}

include 'includes/footer.php';
