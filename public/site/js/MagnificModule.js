export default function MagnificModule() {
  jQuery(document).ready(function ($) {
    if ($(".dismiss").length > 0) {
      $(document).on("click", ".dismiss", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
      });
    }

    if ($(".popup-video").length > 0) {
      $(".popup-video").magnificPopup({
        // disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedBgPos: true,
        fixedContentPos: true,
      });
    }
  });
}
