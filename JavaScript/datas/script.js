//Pegar a data
let data = new Date();
console.log(data);

//Pegar o ano atual com 4 digitos
let ano = data.getFullYear();
console.log(ano);

//Pegar o mês atual - vai de 0 até 11, sendo 0 = janeiro e 11 = dezembro
let mes = data.getMonth(); //ou data.getMonth() + 1; o 0 vira 1, e 11 vira 12
console.log(mes);

const mesesDoAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
let mesEscrito = mesesDoAno[data.getMonth()]; //mesesDoAno[posição]
console.log(mesEscrito);

//Pegar dia do mês - 1 até 31
let diaMes = data.getDate();
console.log(diaMes);

//Pegar dia da semana - 0 até 6
let diaSemana = data.getDay();
console.log(diaSemana);

const diasDaSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
let diasDaSemanaEscrito = diasDaSemana[data.getDay()];
console.log(diasDaSemanaEscrito);

//Pegar a hora - 0 até 23
let hora = data.getHours();
console.log(hora);

//Pegar minutos - 0 até 59
let minutos = data.getMinutes();
console.log(minutos);

//Pegar segundos - 0 até 59
let segundos = data.getSeconds();
console.log(segundos);

//Pegar milisegundos - 0 até 999
let milisegundos = data.getMilliseconds();
console.log(milisegundos);

//Pegar data no padrão brasileiro - dia/mes/ano
let dataBR = data.toLocaleString('pt-BR'); 
//toLocaleString('pt-BR', {dataStyle: 'short'}); - para retirar a data
//toLocaleString('pt-BR', {timeStyle: 'short'}); - para retirar a hora
console.log(dataBR);

//Comparar datas (Ex: vencimentos)
var hoje = new Date();
var vencimento = new Date(2026, 4, 26); //(ano, mês, dia)

if (hoje > vencimento){
    console.log("Sua conta está vencida!");
}else{
    console.log("Ainda não venceu, tudo certo!");
}

//Diferença entre duas datas em dias
var dataInicial = new Date();
var dataFinal = new Date(2026, 4, 26);

var diferecaTempo = dataFinal.getTime() - dataInicial.getTime(); //getTime() - pega os milisegundos

var diferencaDias = Math.ceil(diferecaTempo / (24 * 60 * 60 * 1000)); //.ceil arredonda
console.log(diferencaDias + " dias")