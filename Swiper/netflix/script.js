const container = document.querySelector(".container");
const swiper = new Swiper('.swiper', {
  grabCursor: true,
  initialSlide: 3,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 10,
  speed: 500,
  freeMode: true,
  keyboard: true,
  effect: 'slide',
  mousewheel:{
    thresholDelta: 30
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});