//1° FORMA
                //0        //1       //2        //3
const lista = ["arroz", "feijão", "macarrão", "leite"];
console.log(lista[1]);

//2° FORMA
const frutas = [];
frutas[0] = 'banana';
frutas[1] = 'maça';
frutas[2] = 'kiwi';
frutas[3] = 'abacaxi';
frutas[4] = 'tomate';
console.log(frutas);

//3° FORMA
const bebidas = new Array("agua", "suco", "whisky", "refrigerante");
console.log(bebidas);



//OBJETO vs ARRAY
const people = {nome: "Angelo", sobrenome: "Gabriel", idade: 30}; //objeto
const pessoa = ["Angelo", "Gabriel", 20] //array

console.log(pessoa.length); //retorna a quantidade de itens dentro da array
console.log(pessoa[pessoa.length - 1]);  //retorna o último dado da array
console.log(pessoa);



//VERIFICA SE É UMA ARRAY
console.log(Array.isArray(pessoa));
console.log(Array.isArray(people));



//MÉTODOS
pessoa.push("Italiano"); //adiciona um item no array

pessoa.shift(); //remove o primeiro item da lista - .pop() remove o último

pessoa.unshift("Programador"); //adiciona um item na posição 0 e empurra os outros itens para o lado

pessoa.splice(2, 0, "Solteiro" , "Humano"); //adiciona itens (posição, remove algo?, itens...)

document.getElementById("texto").innerHTML = pessoa.join(" - ") //ao lado de cada item



//MÉTODO SLICE
const jogadores = ["Jemerson", "Andrada", "Neymar", "Pelé", "Grealish", ];
const craques = jogadores.slice(2, 4); //mostra apenas os itens da posição 2 até a posição 3 (posição 4 não é mostrada)

console.log(craques);
document.getElementById("jogadores").innerHTML = jogadores.sort(); //põe em ordem alfabética



//ORDENANDO NÚMEROS
const numeros = [40, 50, 123, 55, 856, 7];

numeros.sort(function (a, b){ //função para por números em ordem crescente
    return a -b
});

document.getElementById("numeros").innerHTML = numeros.reverse(); //se retirar o .reverse() fica em ordem crescente



//FILTRANDO NUMEROS
const maior100 = numeros.filter(filtragem);
function filtragem (value, index, array){
    return value > 100;
}
console.log(maior100);


//CONCATENAÇÃO DE LISTAS
const PS = ["Days Gone", "Spider-Man"];
const Xbox = ["Halo", "Gears"];
const Nintendo = ["Mario", "Zelda"];

const superLista = PS.concat(Xbox, Nintendo);
document.getElementById("games").innerHTML = superLista;