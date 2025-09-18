function verificaCor(){
    let cor = document.getElementById("cor").value;
    cor = cor.toLowerCase();

    switch (cor){
        case "azul":
            document.body.style.backgroundColor = "blue";
            break;
        case "verde":
            document.body.style.backgroundColor = "green";
            break;
        case "vermelho":
            document.body.style.backgroundColor = "red";
            break;
        default:
            document.getElementById("message").innerHTML = "Cor " + cor + " não encontrada!";
            document.body.style.backgroundColor = "white";

    }
}

function diaSemana(){
    var dia = new Date().getDay();
    console.log(dia); //mostra os dias em 0,1,2,3,4,5,6

    switch (dia) {
        case 0:
            document.getElementById("diaSemana").innerHTML = "Hoje é Domingo!";
            break;
        case 1:
            document.getElementById("diaSemana").innerHTML = "Hoje é Segunda!";
            break;
        case 2:
            document.getElementById("diaSemana").innerHTML = "Hoje é Terça!";
            break;
        case 3:
            document.getElementById("diaSemana").innerHTML = "Hoje é Quarta!";
            break;
        case 4:
            document.getElementById("diaSemana").innerHTML = "Hoje é Quinta!";
            break;
        case 5:
            document.getElementById("diaSemana").innerHTML = "Hoje é Sexta!";
            break;
        case 6:
            document.getElementById("diaSemana").innerHTML = "Hoje é Sábado!";
            break;
        default:
            document.getElementById("diaSemana").innerHTML = "Dia não encontrado!";
    }
}
diaSemana(); //chama a função para ela aparecer no site