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
    #(contador;expressão lógica;incremento)
    for ($c = 1; $c <= 10; $c++){
        echo "$c ";
    }

    print "<br>";

    for ($c = 10; $c >= 1; $c--){
        echo "$c "; 
    }

    print "<br>";

    for ($c = 0; $c <= 50; $c+=5){
        echo "$c ";
    }

    print "<br>";

    for ($c=20; $c>=0; $c-=2){
        echo "$c ";
    }

    print "<br><br>";

    //Tabuada
    $n = isset($_POST["numero"])?$_POST["numero"]:1;
    for ($c=1; $c<=10; $c++){
        $r = $n * $c;
        echo "$n x $c = $r <br>";
    }
    ?>

    <br>
    <a href="index.html">Voltar</a>
</body>
</html>