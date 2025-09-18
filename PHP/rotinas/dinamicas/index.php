<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

</head>
<body>
    <?php 
    function soma (){
        $p = func_get_args(); //pega todos os argumntos e coloca dentro de um vetor chamado "p" (p[0], p[1], etc...)
        $total = func_num_args(); //retorna o número de argumentos passados
        $s = 0;
        for ($i=0; $i<$total; $i++){
            $s += $p[$i];
        }
        return $s;
    }

    $r = soma (5,5,5,5,5,5);
    print "A soma de todos os valores é igual a $r";
    ?>
</body>
</html>