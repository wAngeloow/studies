/*
onclick => disparado quando recebe um click
ondblclick => disparado quando click duplo
onmouseover => disparado quando o mouse está sobre
onmouseout => disparado quando o mouse sai do objeto
onmousemove => disparado quando o mouse é movido no elemento
onmousedown => disparado quando o click do botão for pressionado
onmouseup = > disparado quando o click do mouse é solto
onfocus => disparado quando o elemento recebe o foco. Válido para input
onchange => disparado quando há uma mudança no conteúdo. "Ao mudar"
onblur => disparado quando o elemento perde o foco
onkeydown => disparado quando uma tecla é pressionada 
onkeypress => disparado quando uma tecla é pressionada e solta
onkeyup => disparado quando uma tecla é solta sobre o elemento
onload => disparado quando a página terminou de ser carregada. Body
onresize => disparado quando há um redimencionamento da janela
*/

function eventoClick(){
    document.body.style.background = "orange";
}

function clickDuplo(){
    document.body.style.background = "gray"
}

function viraVermelho(){
    let div = document.getElementById("mudacor");
    div.style.background = "red";
}

function viraRoxo(){
    let div = document.getElementById("mudacor");
    div.style.background = "purple";
}

function limpaTexto(){
    document.getElementById("inputText").value = "";
}

function apertaTecla(){
    let input = document.getElementById("inputText").value;
    document.getElementById("teclas").innerHTML = "Tecla [" + input + "] apertada.";
}