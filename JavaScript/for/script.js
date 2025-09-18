const carros = ["Evoque", "Porshe", "Ferrari", "Tesla", "BYD"];
var tamanho = carros.length; //pega o tamanho da const

for (let i = 0; i < tamanho; i++){
    document.getElementById("texto").innerHTML += carros[i] + " - ";
}

var ano = new Date().getFullYear();

for (let i = ano; i >= 1900; i--){
    document.getElementById("select").innerHTML += "<option value='" + i + "'>" + i + "</option>"
}