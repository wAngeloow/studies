const swiper = new Swiper('.swiper', {
  loop: true,
  grabCursor: true,

  //utoplay
  autoplay: {
    delay: 2000, //2s
    disableOnInteraction: true  //pausar quando usuário interagir
  },

  //Botões de próximo e anterior  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //Bolinhas de navegação
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  //Responsividade
  breakpoints: {
    596: {
      slidesPerView: 1, // 1 slide por vez em telas com largura <= 596px
      spaceBetween: 15
    },
    992: {
      slidesPerView: 2, // 2 slides por vez em telas com largura <= 992px
      spaceBetween: 15
    },
    1200: {
      slidesPerView: 3, // 3 slides por vez em telas com largura <= 1200px
      spaceBetween: 15
    }
  },
});