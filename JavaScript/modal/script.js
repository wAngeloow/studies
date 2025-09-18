let modal = document.getElementById('modal');
let video = document.querySelector('iframe');
let foraDoModal = document.getElementById('modal');

function abrirModal() {
    modal.style.display = "flex";
    setTimeout(function () { //durante meio segundo vai fazer uma animação do modal vindo de baixo
        modal.style.opacity = '1';
        video.style.transform = "translateY(0)";
    }, 10);
    document.body.style.overflow = "hidden";
}

function fecharModal() {
    modal.style.opacity = '0'
    setTimeout(function () { //durante meio segundo, vai esconder o modal através de um efeito
        video.style.transform = "translateY(100%)";
        modal.style.display = "none";
    }, 500);
    document.body.style.overflow = "auto";
}

//add um evento que detecta quando clicar na área do modal em si, se clicar chama a função de fechar o modal
foraDoModal.addEventListener('click', function (e) {
    fecharModal();
})