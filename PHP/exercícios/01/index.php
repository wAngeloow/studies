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
        .cor{
            color: blueviolet;
            font-weight: bold;
        }
    </style>

</head>
<body>
    <?php 
    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $media = ($n1 + $n2)/2;
    echo  "A média entre <span class='cor'>$n1</span> e <span class='cor'>$n2</span> é igual a <span class='cor'>$media</span>";

    if ($media >= 7){
        $situacao = "APROVADO!";
    }
    elseif ($media >= 5 && $media <7){
        $situacao = "EM RECUPERAÇÃO!";
    }
    else{
        $situacao = "REPROVADO!";
    }

    echo "<br>Situação do aluno: <span class='cor'>$situacao</span>";

    ?>
</body>
</html>