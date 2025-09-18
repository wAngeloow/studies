//Função de fazer a média de 2 notas
function soma (n1, n2){
    return (n1+n2)/2;
}
document.getElementById("nota").innerHTML = soma(10,6);


//Função de fazer a conversão do real para o dólar
function realParaDolar(real, dolar){
    return real * dolar;
}

var dolar = 5.64;
var real = 10;
var conversao = realParaDolar(real, dolar);

document.getElementById("dolar").innerHTML = "o valor de R$" + real + " convertido para dolar ficará U$" + conversao;


//Função de converter milhas para km
function milhasParaKm(milhas, km){
    return milhas * 1.6;
}

var milha = 62;
var quilometros = milhasParaKm(milha, 1.6);

document.getElementById("milhas").innerHTML = milha + " milhas é igual a " + quilometros + "km.";


//Função de criar um alert quando clicar em um botão
function alertaHello(){
    alert("Hello world!");
}

alertaHello(); //chamar uma função

