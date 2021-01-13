const openHambBtn = document.getElementById("open-hamb-btn");
const closeHambBtn = document.getElementById("close-hamb-btn");
const regularMenu = document.querySelector(".regular-menu");
const hamburgerMenu = document.querySelector(".hamburger-menu");

openHambBtn.addEventListener("click", () => {
    regularMenu.classList.add("hidden");
    hamburgerMenu.classList.remove("hidden");
});

closeHambBtn.addEventListener("click", () => {
    regularMenu.classList.remove("hidden");
    hamburgerMenu.classList.add("hidden");
});
