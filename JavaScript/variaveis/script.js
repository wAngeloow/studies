/*
var = pode ter seu valor redeclarado, funciona fora e dentro de blocos, sendo seu valor sempre o último definido.

let = seu valor só pode ser definido uma vez, mas pode ser alterado dentro de um bloco (apenas uma vez por bloco).

const = usado quando uma variável precisa ter um valor que não pode ser alterado em nenhum lugar do código, nem em blocos.
*/


// VARIÁVEL - VAR
//declação de variáveis
var nome, sobrenome, nomeCompleto, idade;

//atribuição dos valores
nome = "Angelo";
sobrenome = "Basdoni";
idade = 20;
nomeCompleto = nome + " " + sobrenome;

document.getElementById("var").innerHTML = nomeCompleto;


// VARIÁVEL - LET
let x = 30; //aqui é 30

{
    let x = 15; //aqui é 2
}
document.getElementById("let").innerHTML = x; //aqui também é 30


// VARIÁVEL - CONST
const y  = 10 //aqui é 10

{
    const y = 2 
}
document.getElementById("const").innerHTML = y; //aqui vai continuar sendo 10