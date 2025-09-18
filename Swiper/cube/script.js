const swiper = new Swiper('.swiper', {
    effect: "cube",
    grabCursor: true,
    loop: true, //quando chegar no fim volta para o começo
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    keyboard: true,
});