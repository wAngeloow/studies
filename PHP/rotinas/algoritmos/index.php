<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

</head>
<body>
    <?php 
    function soma ($a, $b) {
        $s = $a + $b;
        echo "<p>A soma entre $a e $b vale $s</p>";
    }

    soma(3,4);
    soma (8, -4);
    $x = 9;
    $y = 15;
    soma ($x, $y);


    //Outro jeito de fazer (sem usar variável e echo)
    function soma2 ($c, $d){
        return $c+$d;
    }

    $e = 15;
    $f = 12;
    $r = soma2($e, $f);
    echo "<p>A soma entre $e e $f é igual a $r </p>";

    ?>
</body>
</html>