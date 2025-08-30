export default function AsideModule() {
  $(document).ready(function () {
    // Check if elements exist before binding events
    const $asideWrap = $(".aside-wrap");
    const $asideIcon = $(".aside-icon");
    const $asideClose = $(".aside-close");
    const $asideOverlay = $(".aside-overlay");

    if (
      $asideWrap.length &&
      ($asideIcon.length || $asideClose.length || $asideOverlay.length)
    ) {
      function toggleDirectory() {
        $asideWrap.toggleClass("is-active");
        $("body").css(
          "overflow",
          $asideWrap.hasClass("is-active") ? "hidden" : "auto"
        );
      }

      $asideIcon
        .add($asideClose)
        .add($asideOverlay)
        .on("click", toggleDirectory);
    }
  });
}
