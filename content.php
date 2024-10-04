<section>
    <h3>Tabuada usando FOR</h3>
    <p>Usaremos <code>for</code> para criar uma tabuada do número fornecido pelo usuário e ela será exibida completa:</p>
    <form action="for.php" method="post">
        <label for="numero">Digite um número para fazer a tabuada</label>
        <input type="text" name="numero" id="numero" placeholder="Digite um número" required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>WHILE</h3>
    <p>Usaremos <code>while</code> para realizar a soma de todos os número de 1 a 100 e exibir o resultado.</p>
    <form action="while.php" method="post">
        <label for="soma">Vamos começar!</label>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>DO...WHILE</h3>
    <p>Usaremos <code>do...while</code> para a solicitação de um número par, caso seja digitado um impar, o progama irá pedir novamente o par.</p>
    <form action="dowhile.php" method="post">
        <label for="numeros">Clique no  botão abaixo para iniciar a verificação do número:</label>
        <input type="submit" value="OK">
    </form>
</section>