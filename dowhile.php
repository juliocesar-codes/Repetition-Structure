<?php
include 'includes/header.php';

echo '<a href="index.php"><button>Voltar</button></a>';
echo '<div class="whileNumeroPar">';

echo '<h2>Exemplo de utilização do loop Do While</h2>';
echo '<p>Por favor, digite um número par:</p>';

// Verifica se o número foi enviado via POST
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    // Estrutura DO...WHILE para verificar se o número é par
    do {
        if ($numero % 2 != 0) { // Se o número for ímpar
            echo '<div class="numeroInvalido"><p>Você digitou ' . $numero . ', que é um número ímpar!</p>';
            echo '<p>Por favor, digite um número par.</p></div>';
            break;
        } else { // Se o número for par
            echo '<div class="numeroValido"><p>Obrigado! Você digitou ' . $numero . ', que é um número par.</p>';
            echo '<p>Ótimo trabalho!</p></div>';
            break;
        }
    } while (true); // O loop continua até que um número par seja digitado
} 
echo '</div>';

?>

<!-- Formulário HTML para enviar o número -->
<form method="post" action="">
    <label for="numero">Número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Enviar</button>
</form>

<?php
include 'includes/footer.php';
?>
