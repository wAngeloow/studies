// script.js

// Seleciona o botão de menu e o elemento da sidebar
const menuToggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');

// Adiciona um evento de clique ao botão de menu
menuToggle.addEventListener('click', () => {
    // Alterna a largura da sidebar entre 0 e 250px
    if (sidebar.style.width === '150px') {
        sidebar.style.width = '0'; // Se a sidebar estiver aberta, fecha ela
    } else {
        sidebar.style.width = '150px'; // Se estiver fechada, abre ela
    }
});
