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
    // coloca o valor na posição desejada do vetor
    $vetor = array (3 => 5,
                    1 => 9,
                    8 => 8,
                    0 => 6);
    unset($vetor[0]); //remove a posição 0 do vetor
    print_r($vetor); 
    ?>
    </pre>
</body>
</html>