export default function SearchModule() {
  function toggleActiveClass(element) {
    element.toggleClass("is-active");

    if (element.hasClass("is-active")) {
      $("body").addClass("no-scroll");
    } else {
      $("body").removeClass("no-scroll");
    }
  }

  $("body").click(function (e) {
    if (!$(e.target).closest(".js-menu-search").length) {
      $("body").removeClass("no-scroll");
      $(".js-menu-search").removeClass("is-active");
    }
  });

  $(".js-menu-search .search").click(function (e) {
    toggleActiveClass($(this).parents(".js-menu-search"));
  });
}
