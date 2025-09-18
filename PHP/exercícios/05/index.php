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
    $valor = isset($_POST["valor"])?$_POST["valor"]:1;
    echo "Analisando o número $valor... <br>";

    $c = 0;
    $i = 1;

    echo "<br>Valores múltiplos: ";
    do{
        if ($valor % $i == 0){
            echo "$i ";
            $c++;
        }
        $i++;
    } while ($i <= $valor);

    echo "<br>Total de múltiplos: $c";

    if ($c == 2){
        echo "<br>Resultado: $valor é primo!";
    }else{
        echo "<br>Resultado: $valor não é primo!";
    }
    ?>
    <br><br>
    <a href="index.html">Voltar</a>
</body>
</html>