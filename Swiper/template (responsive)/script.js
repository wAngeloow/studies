const swiper = new Swiper('.swiper', {
    loop: true,
    keyboard: true,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 10,
    speed: 500,
    keyboard: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    breakpoints: {
        300: {
          slidesPerView: 1, // 1 slide por vez em telas com largura <= 300px
        },
        700: {
          slidesPerView: 3, // 3 slides por vez em telas com largura <= 7000px
        },
        1024: {
          slidesPerView: 5, // 5 slides por vez em telas com largura <= 1024px
        }
      },
});