class Fabrica{ //nome sempre deve ser com a primeira letra maísucula
    constructor(valor1, valor2, valor3){
        this.marca = valor1;
        this.modelo = valor2;
        this.ano = valor3;
    }
    buzina(){
        return this.modelo + " buzinou: Biiiiiiiii";
    }
}

const fiesta = new Fabrica("Ford", "Fiesta", 2005);
const evoque = new Fabrica("Range Rover", "Evoque", 2019);
const cybertruck = new Fabrica("Tesla", "Cybertruck", 2024);

console.log(evoque);
console.log(fiesta.modelo); //chama apenas o modelo

cybertruck.ano = 2023; //altera o ano
console.log(cybertruck); 