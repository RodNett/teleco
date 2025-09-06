// Menú responsive
const toggle = document.querySelector(".menu-toggle");
const menu = document.querySelector("nav ul");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
});

// Slider automático
let currentIndex = 0;
const slides = document.querySelectorAll(".slider img");

function changeSlide() {
  slides[currentIndex].classList.remove("active");
  currentIndex = (currentIndex + 1) % slides.length;
  slides[currentIndex].classList.add("active");
}

setInterval(changeSlide, 4000); // cada 4 segundos
