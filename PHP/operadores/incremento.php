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
    $ano_atual = $_GET["ano"];
    echo "O ano atual é $ano_atual, e o ano anterior foi " . --$ano_atual . ".";
    ?>
</body>
</html>