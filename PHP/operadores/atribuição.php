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
    $preco = $_GET["p"];
    echo "Preço original: R$$preco";

    //$preco = $preco - ($preco*30/100);
    $preco -= $preco*30/100;
    
    echo "<br>Preço com desconto (-30%): R$$preco";
    ?>
</body>
</html>