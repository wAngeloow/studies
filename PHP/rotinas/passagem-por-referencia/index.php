<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

</head>
<body>
    <?php 
    //Passando valores por referência (com  &)
    function teste (&$x){
        $x += 2;
        echo "O valor de X é $x";
    }

    $a = 3;
    teste ($a);
    echo "<p>O valor de A é $a </p>";
    ?>
</body>
</html>