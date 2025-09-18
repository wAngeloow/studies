var swiper = new Swiper(".swiper", {
    initialSlide: 2, //diz em qual slider começar (0 é o 1)
    effect: "coverflow",
    grabCursor: true, //habilita a mão ao passar o mouse em cima
    centeredSlides: true,
    slidesPerView: "auto",
    keyboard: true, //permite mudar a imagem do o teclado
    mousewheel: true, //permite mudar a imagem com o scroll do mouse
    coverflowEffect: {
      rotate: 0, //quantas vezes a imagem vai rotar/girar
      stretch: 80, //empurra a imagem para dentro 
      depth: 350, //tamanho da imagem, da impressão de distância
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });