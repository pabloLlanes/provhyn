window.addEventListener("scroll", function () {
  let header = document.querySelector("header");
  let logo = document.getElementById("logoProvHyN");
  let windowPosition = window.scrollY > 0;
  header.classList.toggle("scrolling-active", windowPosition);

  logo.classList.toggle("logoDown", windowPosition);
});

function navToggle() {
  let btn = document.getElementById("menuBtn");
  let nav = document.getElementById("menu");
  let header = document.querySelector("header");

  header.classList.toggle("scrolling-active2");
  nav.classList.toggle("hidden");
  nav.classList.toggle("flex");
  btn.classList.toggle("open");
}
