export default function FaqsModule() {
  const $faqsList = $(".js-faqs-list");
  const $faqsItems = $faqsList.find(".faqs-item");
  const $faqsHeadings = $(".js-faqs-heading");

  // Initialize first item
  if ($faqsItems.length) {
    $faqsItems.each((id, item) => {
      if (id === 0) {
        $(item).addClass("is-active");
      } else {
        $(item)
          .find(".js-faqs-content")
          .stop()
          .slideUp(400, function () {
            AOS.refresh();
          });
      }
    });
  }

  // Handle click events
  if ($faqsHeadings.length) {
    $faqsHeadings.click(function () {
      const $currentItem = $(this).parent();
      const $currentContent = $(this).next();

      // If clicking active item, close it
      if ($currentItem.hasClass("is-active")) {
        $currentItem.removeClass("is-active");
        $currentContent.stop().slideUp(400, function () {
          AOS.refresh();
        });
        return;
      }

      // Otherwise, close all and open clicked item
      $faqsItems.removeClass("is-active");
      $(".js-faqs-content")
        .stop()
        .slideUp(400, function () {
          $currentItem.addClass("is-active");
          $currentContent.stop().slideDown(400, function () {
            AOS.refresh();
          });
        });
    });
  }

  // Handle ajax reload
  jQuery(document).ajaxComplete(function () {
    if ($faqsItems.length) {
      $faqsItems.each((id, item) => {
        if (id !== 0) {
          $(item)
            .find(".js-faqs-content")
            .stop()
            .slideUp(400, function () {
              AOS.refresh();
            });
        }
      });
    }
  });
}
