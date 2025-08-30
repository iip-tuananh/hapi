export default function MenuModule() {
  $(document).ready(function () {
    let width = $(window).width();

    if (width < 1201) {
      $(".js-child0, .js-child1, .js-child2").hide(``);

      $(".js-dropdown").click(function (e) {
        e.stopPropagation();

        let childDropdowns = $(this).children(
          ".js-child0, .js-child1, .js-child2"
        );

        if ($(this).hasClass("is-active")) {
          childDropdowns.stop().slideUp();
          $(this).removeClass("is-active");
        } else {
          childDropdowns.stop().slideDown();
          $(this).addClass("is-active");
        }
      });

      $(document).click(function (e) {
        if (!$(e.target).closest(".js-dropdown").length) {
          $(".js-child0, .js-child1, .js-child2").slideUp();
          $(".js-dropdown").removeClass("is-active");
        }
      });

      $(".js-bar").click(function () {
        $(this).toggleClass("is-active");
        $(".js-menu, .overlay").toggleClass("is-active");

        if ($(this).hasClass("is-active")) {
          $(".main").off("touchmove");
          $("body").css("overflow", "hidden");
        } else {
          $("body").css("overflow", "unset");
        }
      });

      $(".overlay, .menu-close-icon").click(closeMenu);

      function closeMenu() {
        $(".js-bar, .js-menu, .overlay").removeClass("is-active");
        $("body").css("overflow", "unset");

        $(".js-child0, .js-child1, .js-child2").slideUp();
        $(".js-dropdown").removeClass("is-active");
      }
    }
  });

  // Onscroll
  $(document).ready(function () {
    if ($(document).scrollTop() > 100) {
      if ($(".js-header").length) {
        $(".js-header").addClass("is-fixed");
      }
    } else {
      if ($(".js-header").length) {
        $(".js-header").removeClass("is-fixed");
      }
    }
  });

  $(window).scroll(function () {
    if ($(document).scrollTop() > 100) {
      if ($(".js-header").length) {
        $(".js-header").addClass("is-fixed");
      }
    } else {
      if ($(".js-header").length) {
        $(".js-header").removeClass("is-fixed");
      }
    }
  });

  // Hide Header
  $(document).ready(function () {
    let lastScrollTop = 0;
    $(window).scroll(function () {
      let currentScroll = $(this).scrollTop();
      if (
        currentScroll > lastScrollTop &&
        currentScroll > 100 &&
        !$(".js-search-box").hasClass("is-active")
      ) {
        if ($(".js-header").length) {
          $(".js-header").addClass("is-hidden");
        }
      } else {
        if ($(".js-header").length) {
          $(".js-header").removeClass("is-hidden");
        }
      }
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
  });

  // ===== Get Height Of Footer =====
  function vh(percent) {
    var h = Math.max(
      document.documentElement.clientHeight,
      window.innerHeight || 0
    );
    return (percent * h) / 100;
  }
  let heightFooter;
  if ($(".js-footer").length) {
    heightFooter = $(".js-footer").outerHeight(true);
  } else {
    heightFooter = 0;
  }
  let heightHeight;
  if ($(".js-header").length) {
    heightHeight = $(".js-header").outerHeight(true);
  } else {
    heightHeight = 0;
  }

  let mainHeight = vh(100) - heightFooter;
  if ($(".main").length) {
    $(".main").css("min-height", mainHeight);
    if (!$("body").hasClass("p-blog-list")) {
      $(".main").css("padding-top", heightHeight);
    }
  }
}
