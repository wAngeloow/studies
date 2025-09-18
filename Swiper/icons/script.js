const swiper = new Swiper('.swiper', {
    keyboard: true,
    grabCursor: true,
    speed: 500,
    keyboard: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});