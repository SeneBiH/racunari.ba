const racunari = document.querySelector(
  ".header .nav-bar .nav-list .racunari"
);
const mobile_menu = document.querySelector(".header .nav-bar .nav-list ul");
const menu_item = document.querySelectorAll(
  ".header .nav-bar .nav-list ul li a"
);
const header = document.querySelector(".header.container");

racunari.addEventListener("click", () => {
  racunari.classList.toggle("active");
  mobile_menu.classList.toggle("active");
});

menu_item.forEach((item) => {
  item.addEventListener("click", () => {
    racunari.classList.toggle("active");
    mobile_menu.classList.toggle("active");
  });
});




