/*
- são variáveis com muitos valores dentro.
- os valores são chamados de propriedades.
- objetos podem ter métodos.
- métodos são funções colocadas dentro das propriedades.

*/

const carro = {
    marca: "Rang Rover",
    modelo: "Velar",
    ano: "2025",
    placa: "ABC-1234",
    buzina: function(){
        alert('Biiiiiiiiiiiiii')
    },
    completo: function(){
        return "A marca do carro é " + this.marca + " e o modelo é " + this.modelo; //se usa this. porque está dentro da const, se tivesse fora seria carro.
    }
}

carro.buzina();
console.log(carro);
console.log(carro.placa); //console.log(["placa"]);
console.log(carro.completo());