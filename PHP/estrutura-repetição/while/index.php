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
    <!--
    - break; (sai fora do codigo while)
    - continue; (volta para o inicio da repetição)
    -->
    <?php 
    $c = 1;
    while ($c <= 10){
        echo "$c <br>";
        $c++; //$c += 1; $c = $c+1
    }
    ?>

    <br>

    <?php 
    $n = 10;
    while ($n >= 0){
        echo "$n <br>";
        $n -= 2; //$n = $n-2
    }
    ?>

    <br>

    <form method="post" action="index.php">
        <?php
        $v = 1;
        while ($v <= 5) {
            echo "Valor $v: <input type='number' name='n$v' max='100' min='0' value='0'><br>";
            $v++;
        }
        ?>
    </form>

</body>
</html>