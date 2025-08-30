export default function SwiperModule() {
  function functionSlider(element, customizeOption, typePagi) {
    const swiperSlider = document.querySelectorAll(element);
    if (swiperSlider) {
      swiperSlider.forEach((item) => {
        const swiper = item.querySelector(".swiper");
        const pagi = item.querySelector(".pagi-pagination");
        const next = item.querySelector(".swiper-button-next");
        const prev = item.querySelector(".swiper-button-prev");
        if (!typePagi) {
          typePagi = "bullets";
        }
        var slide = new Swiper(swiper, {
          speed: 1200,
          watchSlidesProgress: true,

          pagination: {
            el: pagi,
            clickable: true,
            type: "progressbar",
          },

          navigation: {
            nextEl: next,
            prevEl: prev,
          },

          fadeEffect: {
            crossFade: true,
          },

          ...customizeOption,
        });
      });
    }
  }

  functionSlider(".js-detail", {
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".js-blog", {
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".banner", {
    effect: "fade",
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".banner", {
    effect: "fade",
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".i-product-gallery", {
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".why-wrap", {
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".tab-cer", {
    loop: true,
    slidesPerView: "auto",
    centeredSlides: true,

    autoplay: { delay: 6000 },
  });

  functionSlider(".tab-review", {
    slidesPerView: "auto",
    autoplay: { delay: 6000 },
  });

  functionSlider(".related", {
    slidesPerView: "auto",
  });

  functionSlider(".js-eco", {
    slidesPerView: "auto",
  });

  functionSlider(".m-banner", {
    slidesPerView: "auto",
  });

  functionSlider(".develop-sw", {
    effect: "fade",
    slidesPerView: "auto",

    pagination: {
      el: ".develop-sw .pagi-pagination",
      clickable: true,
      type: "progressbar",
    },

    navigation: {
      nextEl: ".develop-sw .next",
      prevEl: ".develop-sw .prev",
    },
  });

  functionSlider(".js-core", {
    slidesPerView: "auto",
    slideToClickedSlide: true,
    centeredSlides: true,
    initialSlide: 0,
    watchSlidesProgress: true,
    on: {
      click: function (swiper, event) {
        swiper.slideTo(swiper.clickedIndex);
      },
    },
  });

  functionSlider(".customer", {
    loop: true,
    slidesPerView: "auto",
    autoplay: { delay: 6000 },

    pagination: {
      el: ".customer .pagi-pagination-1",
      clickable: true,
      type: "progressbar",
    },
  });

  functionSlider(".js-customer", {
    loop: true,
    slidesPerView: "auto",
    autoplay: { delay: 6000 },

    pagination: {
      el: ".customer .pagi-pagination-2",
      clickable: true,
      type: "progressbar",
    },
  });

  functionSlider(".js-process", {
    centeredSlides: true,
    slidesPerView: "auto",
    direction: "horizontal",
    slideToClickedSlide: true,

    breakpoints: {
      1201: {
        initialSlide: 2,
        spaceBetween: 12,
        centeredSlides: true,
        direction: "vertical",
      },
    },
  });

  if ($(".product-detail-slide").length) {
    const productdt_swiper = document.querySelectorAll(".product-detail-slide");
    productdt_swiper.forEach((item, i) => {
      const swiperMain = item.querySelector(".js-product-gallery");
      const swiperThumb = item.querySelector(".js-product-thumbs");

      const itemImg = new Swiper(swiperThumb, {
        speed: 1200,
        slidesPerView: "auto",
      });

      const itemMain = new Swiper(swiperMain, {
        speed: 1200,
        effect: "slide",
        grabCursor: true,
        thumbs: { swiper: itemImg },
        fadeEffect: { crossFade: true },
      });
    });
  }

  if ($(".trip-slide").length) {
    const trip_swiper = document.querySelectorAll(".trip-slide");
    trip_swiper.forEach((item, i) => {
      const swiperMain = item.querySelector(".js-trip-slide .swiper");
      const swiperThumb = item.querySelector(".js-trip-gallery .swiper");

      const itemImg = new Swiper(swiperThumb, {
        speed: 1200,
        slidesPerView: "auto",
      });

      const itemMain = new Swiper(swiperMain, {
        speed: 1200,
        effect: "slide",
        grabCursor: true,
        slidesPerView: "auto",
        thumbs: { swiper: itemImg },
        fadeEffect: { crossFade: true },
      });
    });
  }
}
