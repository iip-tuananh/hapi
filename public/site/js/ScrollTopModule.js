export default function ScrollTopModule() {
  $(document).ready(function () {
    const $backToTop = $(".backToTop");
    const $progressPath = $(".progress-path");
    const pathLength = 100;

    $progressPath.css({
      "stroke-dasharray": pathLength,
      "stroke-dashoffset": pathLength,
    });

    function updateProgress() {
      const scroll = $(window).scrollTop();
      const height = $(document).height() - $(window).height();
      const progress = (scroll / height) * pathLength;
      $progressPath.css("stroke-dashoffset", pathLength - progress);

      if (scroll > 5) {
        $backToTop.addClass("active");
      } else {
        $backToTop.removeClass("active");
      }
    }

    $(window).on("scroll", updateProgress);
    updateProgress();

    $(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "smooth");
    });
  });
}
