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
    $valor = $_POST["valor"];
    $contador = 1;
    do {
        $tabuada = $valor * $contador;
        echo "$valor x $contador = $tabuada<br>";
        $contador++;
    } while ($contador <= 10)
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>