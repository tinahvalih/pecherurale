document.addEventListener("DOMContentLoaded", () => {
    if (typeof initMenu === "function") {
        initMenu();
    }

    if (typeof initPageTransition === "function") {
        initPageTransition();
    }

    if (typeof initStartupIntro === "function") {
        initStartupIntro();
    }

    if (typeof initLanguageSwitcher === "function") {
        initLanguageSwitcher();
    }

    if (typeof initIntroPage === "function") {
        initIntroPage();
    }

    if (typeof initVideoModal === "function") {
        initVideoModal();
    }

    if (typeof initExperienceScroll === "function") {
        initExperienceScroll();
    }

    if (typeof initChapterNav === "function") {
        initChapterNav();
    }

    if (typeof initSmoothScroll === "function") {
        initSmoothScroll();
    }
});