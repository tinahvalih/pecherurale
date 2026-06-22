function initChapterInfo() {
    const slider = document.querySelector("[data-character-slider]");
    initChapterGalleryLightbox();

    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll("[data-character-slide]"));
    const dots = Array.from(slider.querySelectorAll("[data-character-dot]"));
    let currentIndex = 0;
    let timer = null;
    let hasAnimated = false;

    function showSlide(index) {
        const nextIndex = (index + slides.length) % slides.length;
        const direction = nextIndex >= currentIndex ? "forward" : "backward";

        slider.classList.toggle("is-moving-forward", hasAnimated && direction === "forward");
        slider.classList.toggle("is-moving-backward", hasAnimated && direction === "backward");
        currentIndex = nextIndex;

        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle("is-active", slideIndex === currentIndex);
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle("is-active", dotIndex === currentIndex);
        });

        hasAnimated = true;
    }

    function start() {
        stop();
        timer = window.setInterval(() => {
            showSlide(currentIndex + 1);
        }, 6000);
    }

    function stop() {
        if (timer) {
            window.clearInterval(timer);
            timer = null;
        }
    }

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            showSlide(index);
            start();
        });
    });

    slider.addEventListener("mouseenter", stop);
    slider.addEventListener("mouseleave", start);

    showSlide(0);
    start();
}

function initChapterGalleryLightbox() {
    const lightbox = document.querySelector("[data-chapter-lightbox]");
    const image = document.querySelector("[data-gallery-image]");
    const items = Array.from(document.querySelectorAll("[data-gallery-item]"));
    const closeButtons = Array.from(document.querySelectorAll("[data-gallery-close]"));
    const prevButton = document.querySelector("[data-gallery-prev]");
    const nextButton = document.querySelector("[data-gallery-next]");

    if (!lightbox || !image || !items.length) return;

    let currentIndex = 0;

    function open(index) {
        currentIndex = (index + items.length) % items.length;
        render();
        lightbox.classList.add("is-open");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    }

    function close() {
        lightbox.classList.remove("is-open");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function render() {
        const item = items[currentIndex];
        const itemImage = item.querySelector("img");

        if (!itemImage) return;

        image.src = itemImage.src;
        image.alt = itemImage.alt || "";
    }

    function goTo(offset) {
        currentIndex = (currentIndex + offset + items.length) % items.length;
        render();
    }

    items.forEach((item, index) => {
        item.addEventListener("click", () => open(index));
    });

    closeButtons.forEach((button) => {
        button.addEventListener("click", close);
    });

    if (prevButton) {
        prevButton.addEventListener("click", () => goTo(-1));
    }

    if (nextButton) {
        nextButton.addEventListener("click", () => goTo(1));
    }

    document.addEventListener("keydown", (event) => {
        if (!lightbox.classList.contains("is-open")) return;

        if (event.key === "Escape") close();
        if (event.key === "ArrowLeft") goTo(-1);
        if (event.key === "ArrowRight") goTo(1);
    });

    document.addEventListener("geoje-language-change", () => {
        if (lightbox.classList.contains("is-open")) {
            render();
        }
    });
}
