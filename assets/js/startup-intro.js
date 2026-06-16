function initStartupIntro() {
    const intro = document.getElementById("startupIntro");

    if (!intro) return;

    const slides = intro.querySelectorAll("[data-startup-slide]");
    const enterButton = intro.querySelector("[data-startup-enter]");

    const autoSlideDelay = 5000; // 5s

    let currentSlide = 0;
    let autoSlideTimer = null;

    function goToSlide(index) {
        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle("is-active", slideIndex === index);
        });

        currentSlide = index;

        if (autoSlideTimer) {
            clearTimeout(autoSlideTimer);
            autoSlideTimer = null;
        }
    }

    function goToSecondSlide() {
        if (currentSlide !== 0) return;
        goToSlide(1);
    }

    function closeIntro() {
        intro.classList.add("is-hidden");
        intro.setAttribute("aria-hidden", "true");

        if (autoSlideTimer) {
            clearTimeout(autoSlideTimer);
            autoSlideTimer = null;
        }

        setTimeout(() => {
            intro.remove();
        }, 900);
    }

    autoSlideTimer = setTimeout(goToSecondSlide, autoSlideDelay);

    intro.addEventListener("click", (event) => {
        if (currentSlide !== 0) return;
        if (event.target.closest("[data-startup-enter]")) return;

        goToSecondSlide();
    });

    enterButton?.addEventListener("click", closeIntro);

    document.addEventListener("keydown", (event) => {
        if (!document.body.contains(intro)) return;

        if (event.key === "Enter" || event.key === "ArrowRight") {
            if (currentSlide === 0) {
                goToSecondSlide();
            } else {
                closeIntro();
            }
        }

        if (event.key === "Escape") {
            closeIntro();
        }
    });
}
