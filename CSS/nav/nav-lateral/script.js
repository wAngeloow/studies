
// Array com os URLs das imagens das bandeiras e páginas correspondentes
const flags = [
    {
        src: "https://www.eccobandeiras.com.br/image/cache/catalog/antigas/Franca-1111x740.jpg", // França
        lang: "frances.html" // Página para francês
    },
    {
        src: "https://coisadeitaliano.com.br/wp-content/uploads/2017/06/italy-1460295_1920_mini-1200x766.jpg", // Itália
        lang: "italiano.html" // Página para italiano
    },
    {
        src: "https://cdn.awsli.com.br/2500x2500/900/900758/produto/171892750/4e3347ca7c.jpg", // Espanha
        lang: "espanhol.html" // Página para espanhol
    },
    {
        src: "https://cdn.awsli.com.br/600x450/900/900758/produto/173999958/0789228510.jpg", // Canadá
        lang: "canada.html" // Página para canadense
    },
    {
        src: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTMP9Yqak2Emm2GkXhLB3kg5mNeBrtbSTtpw&s", // Brasil
        lang: "index.html" // Página para português (Brasil)
    }
];

// Tenta obter o índice da bandeira do localStorage (caso exista)
let currentFlagIndex = localStorage.getItem('currentFlagIndex') ? parseInt(localStorage.getItem('currentFlagIndex')) : 0;

// Referência ao elemento da imagem
const flagImg = document.getElementById('flag-img');

// Atualiza a imagem da bandeira com base no índice armazenado
flagImg.src = flags[currentFlagIndex].src;

// Função para mudar a bandeira e redirecionar para o arquivo HTML correspondente
function changeLanguage() {
    // Atualiza o índice da bandeira
    currentFlagIndex = (currentFlagIndex + 1) % flags.length;

    // Atualiza a imagem da bandeira
    flagImg.src = flags[currentFlagIndex].src;

    // Salva o novo índice no localStorage
    localStorage.setItem('currentFlagIndex', currentFlagIndex);

    // Redireciona para a página correspondente ao idioma
    window.location.href = flags[currentFlagIndex].lang;
}

// Adiciona um evento de clique ao elemento com a classe logo
document.querySelector('.logo').addEventListener('click', changeLanguage);