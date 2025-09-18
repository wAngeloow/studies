let contador = 0;
let input = document.getElementById('inputTarefa');
let btnAdd = document.getElementById('btn-add');
let main = document.getElementById('areaLista');

function addTarefa() {
    //Pega o valor digitado no input
    let valorInput = input.value;

    //Se não for vázio, nem nulo, nem indefinido
    if (valorInput !== "" && valorInput !== null && valorInput !== undefined) {
        ++contador; //adiciona 1 no contador

        //adiciona um novo elemento a lista
        let novoItem = `<div id="${contador}" class="item">
    <div onclick="marcarTarefa(${contador})" class="item-icone">
        <i id="icone_${contador}" class="fa-regular fa-circle"></i>
    </div>
    <div onclick="marcarTarefa(${contador})" class="item-nome">
        ${valorInput}
    </div>
    <div class="item-botao">
        <button onclick="deletar(${contador})" class="delete"><i class="fa-solid fa-trash"></i></button>
    </div>
    </div>`;

        //Adicionar novo item no main
        main.innerHTML += novoItem;

        //Zerar campo do input
        input.value = "";
        input.focus(); //deixa o input clicado após limpar
    }
}

function deletar(id) {
    var tarefa = document.getElementById(id);
    tarefa.remove(); //remove a tarefa de acordo com seu id
}

function marcarTarefa(id) {
    var item = document.getElementById(id);
    var classe = item.getAttribute("class"); //pega o atributo classe do item

    var icone = document.getElementById("icone_" + id);

    if (classe == "item") { //se a classe for igual a "item"
        item.classList.add("clicado"); //add a classe clicado no item
        icone.classList.remove("fa-regular", "fa-circle");
        icone.classList.add("fa-solid", "fa-circle-check");

        item.parentNode.appendChild(item); //move pro final
    } else {
        item.classList.remove("clicado"); //add a classe clicado no item

        var icone = document.getElementById("icone_" + id);
        icone.classList.remove("fa-solid", "fa-circle-check");
        icone.classList.add("fa-regular", "fa-circle");

        main.prepend(item); //move o item para o topo
    }
}

//Adicionar tarefa apertando enter
input.addEventListener("keyup", function (event) { //cria um evento para ouvir algo; se "keyup", ou seja, uma tecla for apertada

    //Se aperta ENTER que é a tecla 13
    if (event.keyCode === 13) { //se o código da tecla for 13

        event.preventDefault(); //remove todas as funções que o ENTER tinha anteriormente

        btnAdd.click(); //quando apertar a tecla enteder, ele vai clicar no botão "btnAdd"
    }
})