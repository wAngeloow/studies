<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

</head>
<body>
    <?php 
    include "functions.php"; // Inclui o arquivo, mas continua a execução mesmo se ele não for encontrado.
    # require "functions.php"; - Inclui o arquivo, mas gera um erro fatal e para o carregamento se não for encontrado.
    # include_once "functions.php"; - Inclui o arquivo apenas uma vez, mesmo que a chamada apareça várias vezes no código.
    # require_once "functions.php"; - Mesma lógica do require, mas inclui o arquivo apenas uma vez.

    echo "<h1>Tstando novas funções:</h1>";
    ola();
    mostraValor(4);
    echo "<h2>Finalizando programa!</h2>"
    ?>
</body>
</html>