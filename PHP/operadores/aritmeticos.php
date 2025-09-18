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
    <!---->
    <?php 

    $n1 = 3;
    $n2 = 5;
    $media = ($n1+$n2)/2;
    
    echo "A média entre $n1 e $n2 é de $media";

    echo "</br>A soma vale ". ($n1+$n2);
    echo "</br>A subtração vale ". ($n1-$n2);
    echo "</br>A multiplicação vale ". ($n1*$n2);
    echo "</br>A divisão vale ". ($n1/$n2);
    echo "</br>O módulo vale ". ($n1%$n2);

    //GET pega os valores da URL (?x=4&y=3)
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];

    echo "<br><br>Valores recebidos: $v1 e $v2";
    echo "<br>O valor absoluto de $v2 é ". abs($v2);
    echo "<br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "<br>A raiz quadrada de $v1 é ". sqrt($v1);
    echo "<br>O valor de $v2 arredondado é ". round($v2); //ceil e floor
    echo "<br>A parte inteira de $v2 é ". intval($v2);
    echo "<br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
    ?>
</body>
</html>