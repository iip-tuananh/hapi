export default function MatchHeightModule() {
  jQuery(document).ready(function ($) {
    function MatchHeight() {
      if ($(".article-title").length) {
        $(".article-title .text-16").matchHeight({});
      }

      if ($(".why-content").length) {
        $(".why-content .title-24").matchHeight({});
      }

      if ($(".trip-content").length) {
        $(".trip-content .text-20").matchHeight({});
      }

      if ($(".m-process-content").length) {
        $(".m-process-content .title-24").matchHeight({});
      }

      if ($(".age-content").length) {
        $(".age-content .title-24").matchHeight({});
      }

      if ($(".core-content").length) {
        $(".core-content .title-36").matchHeight({});
      }
    }

    MatchHeight();
    $(document).ajaxComplete(function () {
      MatchHeight();
      AOS.refresh();
    });
  });
}
