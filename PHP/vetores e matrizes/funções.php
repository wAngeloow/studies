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
    <pre>
    <?php 
    // 1° print_r - exibe o vetor formatado
    $vetor = array ("A", "C", "E", "B", "F");
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 2° var_dump - exibe o vetor formatado, com o tipo e a quantidad de itens
    $vetor = array ("A", "C", "E", "B", "F");
    var_dump($vetor);

    echo "<br>";
    echo "<br>";

    // 3° count - conta a quantidade de elementos do vetor
    $vetor = array ("A", "C", "E", "B", "F");
    echo "O vetor tem " . count($vetor) , " elementos.";

    echo "<br>";
    echo "<br>";

    // 4° array_push - adiciona um item ao final do vetor
    $vetor = array ("A", "C", "E", "B", "F");
    array_push($vetor, "H"); //(var vetor, "item adicionado");
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 5° array_pop - remove um item do final do vetor
    $vetor = array ("A", "C", "E", "B", "F");
    array_pop($vetor); //(var vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 6° array_unshift - adiciona um item ao inicio do vetor
    $vetor = array ("A", "C", "E", "B", "F");
    array_unshift($vetor, "H"); //(var vetor, "item adicionado");
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 7° array_shift - remove um item do inicio do vetor
    $vetor = array ("A", "C", "E", "B", "F");
    array_shift($vetor); //(var vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 8° sort - coloca os itens do vetor em ordem 
    $vetor = array ("A", "C", "E", "B", "F");
    sort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";
    
    // 9° rsort - coloca os itens do vetor em ordem ao contrária 
    $vetor = array ("A", "C", "E", "B", "F");
    rsort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";
    
    // 10° asort - coloca os itens do vetor em ordem, porém muda os indices de lugar também ([0], [1], ...)
    $vetor = array ("A", "C", "E", "B", "F");
    asort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 11° arsort - coloca os itens do vetor em ordem ao contrária, porém muda os indices de lugar também ([0], [1], ...)
    $vetor = array ("A", "C", "E", "B", "F");
    arsort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 12° ksort - coloca os indices do vetor em ordem ([0], [1], ...), sem mexer nos itens
    $vetor = array ("A", "C", "E", "B", "F");
    ksort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    // 13° krsort - coloca os indices do vetor em ordem contrária ([0], [1], ...), sem mexer nos itens
    $vetor = array ("A", "C", "E", "B", "F");
    krsort($vetor);
    print_r($vetor);

    echo "<br>";
    echo "<br>";
    ?>
    </pre>
</body>
</html>