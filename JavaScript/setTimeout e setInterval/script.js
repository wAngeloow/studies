//setTimeout - executa uma ação depois do tempo determinado (1000 = 1s)
function ativarContagem() {
    document.getElementById("tempo").innerHTML = "Começou a contar!"

    tempo = setTimeout(function () { //cria uma variável global chamada tempo
        document.getElementById("tempo").innerHTML = "Executou o setTimeout!";
    }, 5000);
}

function pararContagem() {
    clearTimeout(tempo); //clearTimeout faz o contador parar
    document.getElementById("tempo").innerHTML = "Parou a contagem!";
}



//setInterval - executa a ação durante o tempo determinado (1000 = 1s)
function startCount() {
    tempo = setInterval(function () { //cria uma variável global chamada tempo
        var cronometro = document.getElementById("time").innerHTML;
        var soma = parseInt(cronometro) - 1; //parseInt passa a variável para número (int)

        if (soma === 0){
            document.getElementById("time").innerHTML = "Tempo esgotado!";
            pararContagem(); //chama a função para parar de contar
        }else{
            document.getElementById("time").innerHTML = soma;
        }
    }, 1000);
}

function stopCount() {
    clearInterval(tempo);
}