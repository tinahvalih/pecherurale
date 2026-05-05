function initPageTransition() {
    const transitionLinks = document.querySelectorAll(
        "a[href]:not([target='_blank']):not([href^='#']):not([href^='mailto:']):not([href^='tel:'])"
    );

    const transitionOverlay = document.querySelector(".page-transition");

    if (!transitionOverlay) {
        document.body.classList.add("page-is-ready");
        return;
    }

    requestAnimationFrame(() => {
        document.body.classList.add("page-is-ready");
        transitionOverlay.classList.add("is-hidden");
    });

    transitionLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            const targetUrl = link.getAttribute("href");

            if (!targetUrl) return;
            if (link.classList.contains("is-disabled")) return;

            const currentUrl = window.location.pathname + window.location.search;
            const nextUrl = new URL(targetUrl, window.location.href);
            const nextPath = nextUrl.pathname + nextUrl.search;

            if (currentUrl === nextPath) {
                event.preventDefault();
                return;
            }

            event.preventDefault();

            document.body.classList.add("page-is-leaving");
            transitionOverlay.classList.remove("is-hidden");
            transitionOverlay.classList.add("is-active");

            setTimeout(() => {
                window.location.href = targetUrl;
            }, 720);
        });
    });

    window.addEventListener("pageshow", () => {
        document.body.classList.add("page-is-ready");
        document.body.classList.remove("page-is-leaving");
        transitionOverlay.classList.add("is-hidden");
        transitionOverlay.classList.remove("is-active");
    });
}