function initChapterNav() {
    const sections = document.querySelectorAll(".chapitre");
    const navLinks = document.querySelectorAll(".nav-chapitres a");

    if (!sections.length || !navLinks.length) return;

    function updateCurrentChapter() {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.scrollY >= sectionTop - sectionHeight / 2) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("is-active");

            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("is-active");
            }
        });
    }

    window.addEventListener("scroll", updateCurrentChapter);
    updateCurrentChapter();
}