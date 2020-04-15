var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
  loop: true,
  speed: 500,
  spaceBetween: 10,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
      speed: 1000,
      autoplay: {
        delay: 5000,
      },
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
      speed: 1500,
    }
  }
});