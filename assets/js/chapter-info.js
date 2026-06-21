function initChapterInfo() {
    const slider = document.querySelector("[data-character-slider]");
    if (!slider) return;

    const slides = Array.from(slider.querySelectorAll("[data-character-slide]"));
    const dots = Array.from(slider.querySelectorAll("[data-character-dot]"));
    let currentIndex = 0;
    let timer = null;

    function showSlide(index) {
        currentIndex = (index + slides.length) % slides.length;

        slides.forEach((slide, slideIndex) => {
            slide.classList.toggle("is-active", slideIndex === currentIndex);
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle("is-active", dotIndex === currentIndex);
        });
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
