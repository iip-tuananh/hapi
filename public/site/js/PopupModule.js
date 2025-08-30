export default function PopupModule() {
  $(document).ready(function () {
    const $body = $("body");

    function openPopup($popup) {
      $popup.addClass("open");
      $body.addClass("no-scroll-popup");
    }

    function closePopup() {
      $(".popup-js").removeClass("open");
      $body.removeClass("no-scroll-popup");
    }

    $(".btnJS").on("click", function (event) {
      event.preventDefault();
      const targetPopup = $(this).data("target");
      const $popup = $(`.popup-js[data-popup="${targetPopup}"]`);

      if ($popup.length) {
        closePopup();
        openPopup($popup);
      }
    });

    $(".popupClose-js, .popupOver-js").on("click", function () {
      closePopup();
    });
  });
}
