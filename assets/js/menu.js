function initMenu() {
    const menuButton = document.querySelector(".menu-button");

    if (!menuButton) return;

    menuButton.addEventListener("click", () => {
        document.body.classList.toggle("menu-open");
    });
}