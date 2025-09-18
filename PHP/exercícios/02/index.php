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
    <?php 
    $estado = $_POST["estado"];
    switch ($estado){
        case 1:
        case 5:
        case 10:
            echo "Seu estado fica na Região Sul.";
            break;
        case 2:
        case 6:
            echo "Seu estado fica na Região Sudeste.";
            break;
        case 3:
        case 9:
            echo "Seu estado fica na Região Norte.";
            break;
        case 4:
        case 7:
        case 8:
            echo "Seu estado fica na Região Nordeste.";
            break;
    }
    ?>

    <br>
    <a href="index.html">Voltar</a>
</body>
</html>