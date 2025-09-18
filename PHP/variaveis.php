<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <style>
        body {
            background-color: antiquewhite;
            color: blue;
            font-size: 1.5rem;
        }
    </style>

</head>

<body>
    <!--
    - A linguagem diferencia letras maíusculas de minúsculas;
    - São representadas por $;
    - Colocam automaticamente o tipo;
    - Pode forçar um tipo através de ();

    TIPOS:
    - Inteiro: int, integer;
    - Real: real, float, double;
    - Caractere: string;
    - Lógico: true = 1 false = vazio;

    EXEMPLO:
    $idade = (int) 3;
    $salario = 1825.52;
    $nome = "Angelo"
    $casado = false;
    -->

    <?php

    $n_sorte =  (int) 19; //força que a variável seja do tipo int
    $nome = "Angelo";

    echo "Meu nome é $nome e meu número da sorte é $n_sorte";

    # VARIÁVEIS REFERENCIADAS (são ligadas umas nas outras através do "&"):
    //$b recebe 3, porém soma 3+5 e vira 8, como está interligada com $a através do &, o $a passa a valer 8 também.
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "<br><br>A variável A vale $a";
    echo "<br>A variável B vale $b.";

    # VARIÁVEIS DE VARIÁVEIS (cria uma variável com a informação que está dentro de outra variável.):
    //neste caso, cursoemvideo viraria uma variável, que teria armazenado cursoPHP
    $site = "youtube";
    $$site = "Cocielo";
    echo "<br><br>O nome do site é $site";
    echo "<br>A variável armazenada dentro de $site é $youtube";
    ?>
</body>

</html>