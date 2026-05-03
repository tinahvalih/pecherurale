function initPageTransition() {
    const langLinks = document.querySelectorAll(".js-lang-switch");

    if (!langLinks.length) return;

    document.body.classList.add("page-is-ready");

    langLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            const targetUrl = link.getAttribute("href");

            if (!targetUrl) return;
            if (link.classList.contains("is-active")) {
                event.preventDefault();
                return;
            }

            event.preventDefault();

            document.body.classList.add("page-is-leaving");

            setTimeout(() => {
                window.location.href = targetUrl;
            }, 420);
        });
    });
}