/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,
  infinite: true, // Enable infinite loop

  autoplay: {
    delay: 3000, // Autoplay speed in milliseconds
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});



/*=============== SWIPER JS ===============*/
let swiperVideos = new Swiper(".card__content__video", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,
  infinite: true, // Enable infinite loop
  autoplay: {
    delay: 6000, // Autoplay speed in milliseconds
    disableOnInteraction: false, // Keep autoplay after user interaction
  },
  speed: 2000, // Speed of the transition in milliseconds
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  effect: 'coverflow', // 3D effect
  coverflowEffect: {
    rotate: 50, // Rotate slider items
    stretch: 0, // Stretch slider items
    depth: 100, // Depth offset (higher = deeper)
    modifier: 1, // Effect multiplier
    slideShadows : true, // Enable slide shadows
  },
  lazy: {
    loadPrevNext: true,
    loadPrevNextAmount: 3, // Number of slides to preload
    loadOnTransitionStart: true
  },
  breakpoints: {
    600: {
      slidesPerView: 1,
    },
    968: {
      slidesPerView: 1,
    },
  },
});

// Pause autoplay on hover
swiperVideos.el.addEventListener("mouseenter", function () {
  swiperVideos.autoplay.stop();
});

// Resume autoplay on mouse leave
swiperVideos.el.addEventListener("mouseleave", function () {
  swiperVideos.autoplay.start();
});





/*=============== SWIPER JS ===============*/
let swiperImages = new Swiper(".card__images", {
  loop: true,
  spaceBetween: 32,
  grabCursor: true,
  infinite: true, // Enable infinite loop

  autoplay: {
    delay: 3000, // Autoplay speed in milliseconds
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});


