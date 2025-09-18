<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <style>
        body{
            font-size: 1.5rem;
        }
    </style>

</head>
<body>
    <?php 
    $c = 50;
    do {
        echo "$c ";
        $c -= 5;
    }while ($c >= 5);

    $valor = isset($_POST["valor"])?$_POST["valor"]:1;
    echo "<h1>Calculando o valor fatorial de $valor</h1>";
    $contador = $valor;
    $fat = 1;
    do {
        $fat = $fat * $contador;
        $contador--;
    }while ($contador >= 1);
    echo "<h2>$valor ! = $fat</h2>";
    ?>

    <br>
    <a href="index.html">Voltar</a>
</body>
</html>