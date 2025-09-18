const carro = {
    marca: "Fiat",
    modelo: "Uno",
    ano: 2001
}

//Converter o JSON para texto
let texto = JSON.stringify(carro);

//Coloca o texto no HTML com id "area"
document.getElementById('area').innerHTML = texto;

//Converte o texto de volta para OBJETO
let obj = JSON.parse(texto);

//Exibe o valor do modelo do objeto no console
console.log(obj.modelo);



//Função para buscar o CEP
function buscarCEP(){
    let input = document.getElementById('cep').value;

    const ajax = new XMLHttpRequest();  //pede para acessar um site localmente
    ajax.open('GET', 'https://viacep.com.br/ws/' + input + '/json/'); // configura a requisição GET com a URL da API do ViaCEP
    ajax.send(); //envia a requisição

    ajax.onload = function(){ //executa esta função quando a resposta da requisição for carregada

        document.getElementById('texto').innerHTML = this.responseText; //pega a resposta em texto recebida aqui e exibe no HTML

        //converte o texto em objeto
        let objeto = JSON.parse(this.responseText);

        //pega os valores desejados
        let rua = objeto.logradouro;
        let bairro = objeto.bairro;
        let cidade = objeto.localidade;
        let estado = objeto.uf

        console.log(rua, bairro, cidade, estado);
    }
}