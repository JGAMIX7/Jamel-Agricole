const menu = document.getElementById("menu");
const toggle = document.getElementById("toggle");
const close = document.getElementById("close");

toggle.addEventListener("click", () => {
  menu.classList.add("active");
  toggle.style.display = "none";
});

close.addEventListener("click", () => {
  menu.classList.remove("active");
  toggle.style.display = "block";
});
