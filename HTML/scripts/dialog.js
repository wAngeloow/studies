const dialog = document.querySelector("dialog");
const button = document.querySelector("button");
const btnClose = document.querySelector("dialog button");

//mostra o modal ao clicar no botão
button.onclick = function (){
    dialog.show()
}
 
//fecha o modal ao clicar no botão
btnClose.onclick = function (){
    dialog.close()
}