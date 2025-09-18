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
    $ano = $_GET["ano"];
    $idade = 2025 - $ano;
    $tipo = ($idade >=18 && $idade<=65) ? "é OBRIGATÓRIO" : "NÃO é OBRIGATÓRIO";
    
    echo "Quem nasceu em $ano tem $idade anos.";
    echo "<br>Portanto, $tipo votar.";
    ?>
</body>
</html>