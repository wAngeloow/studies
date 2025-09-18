<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <?php
    $texto = $_POST["text"];
    $tamanho = $_POST["size"];
    $cor = $_POST["color"];

    echo "<span class='texto'>$texto</span>";
    ?>

    <style>
        body{
            background-color: antiquewhite;
            color: brown;
            font-size: 1.5rem;
        }
        .texto{
            font-size: <?php echo $tamanho;?>;
            color: <?php echo $cor;?>;
        }
    </style>

</head>
<body>
    <?php 
    $valor = $_POST["valor"];
    $raiz = sqrt($valor);
    echo "<br>A raiz quadrada de $valor é igual a " . number_format($raiz, 2);

    //isset = foi configurado
    $nome = isset($_POST["nome"])?$_POST["nome"]:"[Não informado]";
    $ano = isset($_POST["ano"])?$_POST["ano"]:date("Y");
    $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[Não informado]";
    $idade = date("Y") - $ano; #Y mostra o ano total, y mostra apenas 2 números

    echo "<br>$nome tem $idade anos e é do sexo $sexo.";
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>