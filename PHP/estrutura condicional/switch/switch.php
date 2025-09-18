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
    $numero = $_POST["num"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case 1:
            $result = $numero * 2;
            break;
        case 2:
            $result = pow($numero, 3); // pow (numero base, numero de vezes que irá multiplicar)
            break;
        break;
            case 3:
            $result = sqrt($numero); // $numero ^ (1/2);
            break;
    }
    echo "O resultado a operação solicitada foi $result <br>";

    $dia_semana = $_POST["diasemana"];
    switch ($dia_semana){
        case 1:
        case 7:
            echo "Descanse, pequeno gafanhoto!";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar! :)";
            break;
    }

    ?>

    <br>
    <a href="switch.html">Voltar</a>
</body>
</html>