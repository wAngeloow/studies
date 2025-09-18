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
    /* Sempre se começa em 0:
    $n[0] = 3;
    $n[1] = 4;
    $n[2] = 7;
    $n[3] = 6;
    */

    // A sintaxe abaixo faz a mesma coisa que a de cima:
    $n = array (3,4,7,6);
    $n[] = 9; //cria um novo item na array na última colocação
    print_r($n);
    ?>
    </pre>
</body>
</html>