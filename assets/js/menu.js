function initMenu() {
    const menuButton = document.querySelector(".menu-button");
    const menu = document.querySelector("#mainMenu");
    const closeTargets = document.querySelectorAll("[data-menu-close]");
    const menuLinks = document.querySelectorAll("[data-menu-link]");

    if (!menuButton || !menu) return;

    function splitMenuText(link) {
        const textElement = link.querySelector(".site-menu__text");
        if (!textElement || textElement.dataset.splitted === "true") return;

        const text = textElement.textContent.trim();
        textElement.innerHTML = "";

        [...text].forEach((char, index) => {
            const span = document.createElement("span");
            span.className = "site-menu__char";
            span.style.setProperty("--char-index", index);
            span.textContent = char === " " ? "\u00A0" : char;
            textElement.appendChild(span);
        });

        textElement.dataset.splitted = "true";
    }

    function setPreviewImage(link) {
        const preview = link.querySelector(".site-menu__preview");
        const image = link.dataset.preview;

        if (!preview || !image) return;

        preview.style.setProperty("--preview-image", `url("${image}")`);
    }

    function openMenu() {
        document.body.classList.add("menu-open");
        menu.setAttribute("aria-hidden", "false");
        menuButton.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
        document.body.classList.remove("menu-open");
        menu.setAttribute("aria-hidden", "true");
        menuButton.setAttribute("aria-expanded", "false");
    }

    function toggleMenu() {
        if (document.body.classList.contains("menu-open")) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    menuLinks.forEach((link) => {
        splitMenuText(link);
        setPreviewImage(link);

        link.addEventListener("click", () => {
            closeMenu();
        });
    });

    menuButton.addEventListener("click", toggleMenu);

    closeTargets.forEach((target) => {
        target.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && document.body.classList.contains("menu-open")) {
            closeMenu();
        }
    });
}