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
    $vetor = array ("nome" => "Ana",
                    "idade" => 23,
                    "peso" => "78.5");
    $vetor["fuma"] = true; //true = 1, false = 0
    print_r($vetor); 

    //para cada elemento do $vetor associe campo a valor 
    foreach ($vetor as $campo => $valor){
        echo "O valor de $campo é $valor <br>";
    }
    ?>
    </pre>
</body>
</html>