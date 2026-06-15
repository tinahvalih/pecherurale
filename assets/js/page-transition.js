function initPageTransition() {
    const transitionDuration = 820;
    const transitionLinks = document.querySelectorAll(
        "a[href]:not(.js-lang-switch):not([target='_blank']):not([href^='#']):not([href^='mailto:']):not([href^='tel:'])"
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
            if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0) {
                return;
            }

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
            }, transitionDuration);
        });
    });

    window.addEventListener("pageshow", () => {
        document.body.classList.add("page-is-ready");
        document.body.classList.remove("page-is-leaving");
        transitionOverlay.classList.add("is-hidden");
        transitionOverlay.classList.remove("is-active");
    });
}
