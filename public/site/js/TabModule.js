export default function TabModule() {
  let tab = document.querySelectorAll(".tabJS");
  if (tab) {
    tab.forEach((t) => {
      let tBtn = t.querySelectorAll(".tabBtn");
      let tPanel = t.querySelectorAll(".tabPanel");
      const isIProduct = t.closest(".i-product") !== null;

      // for tab
      if (tBtn.length !== 0 && tPanel.length === tBtn.length) {
        tBtn[0].classList.add("active");
        if (isIProduct) {
          tPanel[0].style.display = "block";
        } else {
          $(tPanel[0]).slideDown();
        }

        for (let i = 0; i < tBtn.length; i++) {
          tBtn[i].addEventListener("click", showPanel);

          function showPanel(e) {
            e.preventDefault();
            for (let a = 0; a < tBtn.length; a++) {
              tBtn[a].classList.remove("active");
              if (isIProduct) {
                tPanel[a].style.display = "none";
              } else {
                $(tPanel[a]).slideUp(400);
              }
            }
            tBtn[i].classList.add("active");
            if (isIProduct) {
              tPanel[i].style.display = "block";
            } else {
              $(tPanel[i]).slideDown(400);
            }
          }
        }
      }
    });
  }
}
