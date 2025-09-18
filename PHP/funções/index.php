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
    # 1° printf - formata automaticamente
    $produto = "leite";
    $preco = 4.5;
    printf("O %s está custando R$ %.2f", $produto, $preco);

    //%d - valor decimal (positivo ou negativo)
    //%u - valor decimal sem sinal (apenas positivos)
    //%f - valor real (.numero_casas_decimais)
    //%s - string

    echo "<br>";
    echo "<br>";

    # 2° print_r - exibe na tela em formato de vetor
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;
    print_r($v);
    echo "<br>";
    var_dump($v);
    echo "<br>";
    var_export($v);

    echo "<br>";
    echo "<br>";

    # 3° wordwarp - cria quebra de linhas dentro do código
    $txt = "Esta é uma frase meramente ilustritiva para fins de testes.";
    $r = wordwrap($txt, 10, "<br>", false); //(texto, caracteres afetados, espaço, true/false para palavras acima dos caracteres)
    echo $r;

    echo "<br>";
    echo "<br>";

    # 4° strlen - calcula o comprimento de uma string
    $text = "Curso em Video";
    $tamanho = strlen($text);
    echo $tamanho;

    echo "<br>";
    echo "<br>";

    # 5° trim - remove espaços vázios do ínicio e do final
    $nome = "   José da Silva   ";
    $novo = trim($nome);
    echo $novo;

    echo "<br>";
    echo "<br>";

    # 6° ltrim - remove os espaços do ínicio (left)
    $nome1 = "   José da Silva ";
    $novo1 = ltrim($nome1);
    echo $novo1;

    echo "<br>";
    echo "<br>";

    # 7° rtim - remove os espaços do final (right)
    $nome2 = "  José da Silva  ";
    $novo2 = rtrim($nome2);
    echo $novo2;

    echo "<br>";
    echo "<br>";

    # 8° str_word_count - mostra a quantidade de palavras dentro da string
    $frase = "Eu esotu aprendendo PHP pelo curso em video";
    $contador = str_word_count($frase, 0); //0 = mostra o número de palavras, 1 = criar um vetor com as palavras, 2 = mostra a posição que cada palavra começa
    echo $contador;

    echo "<br>";
    echo "<br>";

    # 9° explode - separa palavras em vetores removendo coisas específicas
    $site = "Curso em Video";
    $vetor = explode(" ", $site); //" " = diz que vai remover o que tiver dentro das aspas
    print_r($vetor);
    
    echo "<br>";
    echo "<br>";

    # 10° str_split - coloca cada caractere de texto em um vetor
    $nome = "Maria";
    $vetor = str_split($nome);
    print_r($vetor);

    echo "<br>";
    echo "<br>";

    # 11° implode - junta os valores de uma array
    $vt[0] = "curso";
    $vt[1] = "em";
    $vt[2] = "video";
    $texto = implode("#", $vt); //"#" = diz que é para colocar # na frnte das palavras do vetor (pode usar join() ao invés de implode)
    print($texto);

    echo "<br>";
    echo "<br>";

    # 12° chr - mostra qual letra representa um determinado código
    $letra = chr(88);
    echo "A letra de código 88 é $letra";

    echo "<br>";
    echo "<br>";

    # 13° ord - mostra o código de uma determinada letra
    $letra1 = ord("Y");
    echo "A letra Y tem o código número $letra1";

    echo "<br>";
    echo "<br>";

    # 14° strtolower - coloca todas as letras em minúsculo
    $nome3 = "Angelo Gabriel";
    echo "Seu nome é " . strtolower($nome3);

    echo "<br>";
    echo "<br>";

    # 15° strtoupper - coloca todas as letras em maiúsculo
    $nome4 = "Angelo Gabriel";
    echo "Seu nome é " . strtoupper($nome4);

    echo "<br>";
    echo "<br>";

    # 16° ucfirst - coloca a primeira letra da string em maiúsculo
    $nome5 = "anGelo gaBRiel";
    echo ucfirst($nome5);

    echo "<br>";
    echo "<br>";

    # 17° ucwords - coloca a primeira letra de todas as palavras em maiúsculo
    $frase1 = "esta é uma frase aleatória para fins de teste";
    echo ucwords($frase1);

    echo "<br>";
    echo "<br>";

    # 18° strrev - coloca as palavras de trás para frente
    $nome6 = "Angelo Gabriel";
    echo strrev($nome6);

    echo "<br>";
    echo "<br>";

    # 19° stripos (strpos) - mostra a posição de uma palavra na string
    $frase2 = "Estou aprendendo PHP";
    $pos = stripos($frase2, "PHP"); //(string, "palavra que quer saber a posição")
    echo "$frase2 <br> A string foi encontrada na posição $pos"; 

    echo "<br>";
    echo "<br>";

    # 20° substr_count - mostra quantas vezes uma palavra aparece dentro da string
    $frase3 = "Estou aprendendo PHP no Curso em Video de PHP";
    $cont = substr_count($frase3, "PHP"); //(string, "palavra que quer contar")
    echo "PHP é encontrado $cont vezes na frase"; 

    echo "<br>";
    echo "<br>";

    # 21° substr - mostra as letras que tem em uma determinada posição da string
    $site1 = "Curso em Video";
    $sub = substr($site1, 0, 5); //começa da posição 0, e anda 5 letras
    echo "$sub ";

    echo "<br>";
    echo "<br>";

    # 22° str_pad (_right, _both, _left) - faz uma palavra caber em um determinado espaço
    $nome7 = "Gabriel";
    $novo3 = str_pad($nome7, 30, "-", STR_PAD_BOTH); //(palavra, espaço, "o que vai no espaço vázio, local")
    echo "Meu nome $novo3 é lindo!";

    echo "<br>";
    echo "<br>";

    # 23° str_repeat - repete um string
    $txt1 = str_repeat("-", 10); //("o que será repetido", vezes que será repetido)
    print ("O texto gerado foi $txt1");

    echo "<br>";
    echo "<br>";

    # 24° str_ireplace (str_replace) - troca uma palavra por outra
    $frase4 = "Gosto de estudar Matemática! Matemática é muito legal!";
    $novafrase = str_ireplace("matemática", "PHP", $frase4);
    echo $novafrase;

    echo "<br>";
    echo "<br>";
    
    ?>
</body>
</html>