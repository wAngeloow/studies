let hora = new Date().getHours(); //pega as horas do sistema

if (hora < 12){
    let saudacoes = document.getElementById("saudacoes");
    saudacoes.innerHTML = "Bom dia!"
}else if (hora <= 18){
    saudacoes.innerHTML = "Boa tarde!"
}else{
    saudacoes.innerHTML = "Boa noite!"
}

function verificar(){
    let nome = document.getElementById("nome").value;

    if (nome == "" || nome == null){
        let p = document.getElementById("aviso");
        p.innerHTML = "Campo obrigatório!";
        p.style.color = "red";
    } else{
        let p = document.getElementById("aviso");
        p.innerHTML = "Informações enviadas com sucesso!"
        p.style.color = "green";
    }
}