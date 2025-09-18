<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <style>
        body{
            background-color: antiquewhite;
            color: blue;
            font-size: 1.5rem;
        }
    </style>

</head>
<body>
    <?php 
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NÃO";
    echo "As variáveis A e B são iguais? $r";

    $r = ($a === $b) ? "SIM" : "NÃO";
    echo "<br>As variáveis A e B são idênticas? $r";

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1+$n2)/2;
    echo "<br><br>A média entre $n1 e $n2 é $media";
    echo "<br>Portanto, o aluno está " . (($media<6) ? "REPROVADO":"APROVADO");
    ?>
</body>
</html>