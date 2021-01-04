const eventButtons = document.querySelectorAll(".event-btn");
const eventContentContainers = document.querySelectorAll(
    ".event-content-container"
);

eventButtons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        eventContentContainers[i].classList.toggle("visible");
    });
});
