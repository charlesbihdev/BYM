var menu = document.getElementById("mobile-menu");
var icon = document.getElementById("menu-icon");

icon.addEventListener("click", function () {
  if (menu.classList.contains("hidemenu")) {
    menu.classList.remove("hidemenu");
  } else {
    menu.classList.add("hidemenu");
  }
});
