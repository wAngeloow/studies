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
    <pre>
    <?php 
    $c = range (2,20,4); //começa em 2, vai até 20, pulando de 4 em 4
    print_r($c);

    //para cada item de $c tratado como $valor, mostre $valor
    foreach ($c as $valor){
        echo "$valor ";
    }
    ?>
    </pre>
</body>
</html>