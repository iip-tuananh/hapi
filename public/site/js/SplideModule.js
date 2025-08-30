export default function SplideModule() {
  function initializeSplide(selector, options = {}) {
    if ($(selector).length) {
      const hasSlides = $(selector).find(".splide__list").length > 0;

      if (hasSlides) {
        new Splide(selector, {
          type: "loop",
          perPage: "auto",
          arrows: false,
          pagination: false,
          focus: "center",
          clones: 10,
          autoScroll: {
            speed: 0.7,
          },
          ...options,
        }).mount(window.splide.Extensions);
      }
    }
  }

  if ($(".js-together-left").length) {
    const togetherSplide = initializeSplide(".js-together-left .splide");
  }

  if ($(".js-together-right").length) {
    const togetherRightSplide = initializeSplide(".js-together-right .splide", {
      direction: "rtl",
    });
  }

  if ($(".js-factory-top").length) {
    const factoryTopSplide = initializeSplide(".js-factory-top .splide", {
      direction: "ttb",
      height: "100%",
      autoHeight: true,
      arrows: false,
      pagination: false,
      focus: "center",
      clones: 10,
      autoScroll: {
        speed: 0.7,
      }
    });
  }
}
