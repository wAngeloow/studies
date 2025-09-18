<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    $ano = $_GET["ano"];
    $idade = date("Y") - $ano;
    echo "Você nasceu em $ano e tem $idade anos.";

    if ($idade < 16){
        $tipoVoto = "não vota";
    }
    elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
        $tipoVoto = "opicional";
    }
    else{
        $tipoVoto = "obrigatório";
    }

    echo "<br>Para está idade, o status do voto é: $tipoVoto"
    ?>
</body>
</html>