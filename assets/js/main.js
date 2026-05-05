document.addEventListener("DOMContentLoaded", () => {
    if (typeof initMenu === "function") {
        initMenu();
    }

    if (typeof initPageTransition === "function") {
        initPageTransition();
    }

    if (typeof initIntroPage === "function") {
        initIntroPage();
    }

    if (typeof initIntroVideo === "function") {
        initIntroVideo();
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
});