const mMenu = document.querySelector(".mobile-toggled-menu");
const wrapper = document.querySelector(".wrapper");

mMenu.addEventListener("click", () => {
  wrapper.classList.toggle("toggled");
});