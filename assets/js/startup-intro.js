function initStartupIntro() {
    const intro = document.getElementById("startupIntro");

    if (!intro) return;

    const slides = intro.querySelectorAll("[data-startup-slide]");
    const nextButton = intro.querySelector("[data-startup-next]");
    const enterButton = intro.querySelector("[data-startup-enter]");

    const storageKey = "geoje_startup_intro_seen";
    const duration = 24 * 60 * 60 * 1000; // 24h

    const saved = localStorage.getItem(storageKey);
    const now = Date.now();

    if (saved && now - Number(saved) < duration) {
        intro.remove();
        return;
    }

    let currentSlide = 0;

    function goToSlide(index) {
        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle("is-active", slideIndex === index);
        });

        currentSlide = index;
    }

    function closeIntro() {
        localStorage.setItem(storageKey, String(Date.now()));
        intro.classList.add("is-hidden");
        intro.setAttribute("aria-hidden", "true");

        setTimeout(() => {
            intro.remove();
        }, 900);
    }

    nextButton?.addEventListener("click", () => {
        goToSlide(1);
    });

    enterButton?.addEventListener("click", closeIntro);

    document.addEventListener("keydown", (event) => {
        if (!document.body.contains(intro)) return;

        if (event.key === "Enter" || event.key === "ArrowRight") {
            if (currentSlide === 0) {
                goToSlide(1);
            } else {
                closeIntro();
            }
        }

        if (event.key === "Escape") {
            closeIntro();
        }
    });
}