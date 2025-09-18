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
    $inicio = $_POST['n_inicio'];
    $final = $_POST['n_final'];
    $incremento = $_POST['incremento'];

    if ($inicio >= $final){
        while ($inicio >= $final){
            echo "$inicio ";
            $inicio -= $incremento;
        }
    }else{
        while ($inicio <= $final){
            echo "$inicio ";
            $inicio += $incremento;
        }
    }
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>