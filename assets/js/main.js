document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.querySelector(".menu-button");

    if (menuButton) {
        menuButton.addEventListener("click", () => {
            document.body.classList.toggle("menu-open");
        });
    }
});