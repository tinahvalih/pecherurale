function initLanguageSwitcher() {
    const langButtons = document.querySelectorAll(".js-lang-switch");
    const translatableElements = document.querySelectorAll("[data-i18n]");

    if (!langButtons.length) return;
    if (typeof translations === "undefined") return;

    function setCookie(name, value, days) {
        const maxAge = days * 24 * 60 * 60;
        document.cookie = `${name}=${value}; path=/; max-age=${maxAge}`;
    }

    function updateActiveLang(lang) {
        langButtons.forEach((button) => {
            const buttonLang = button.dataset.lang;
            button.classList.toggle("is-active", buttonLang === lang);
        });
    }

    function updateLinksLang(lang) {
        const internalLinks = document.querySelectorAll("a[href]");

        internalLinks.forEach((link) => {
            const href = link.getAttribute("href");

            if (!href) return;
            if (href.startsWith("#")) return;
            if (href.startsWith("mailto:")) return;
            if (href.startsWith("tel:")) return;
            if (link.hasAttribute("target")) return;

            const url = new URL(href, window.location.href);

            if (url.origin !== window.location.origin) return;

            url.searchParams.set("lang", lang);

            link.setAttribute("href", url.pathname + url.search + url.hash);
        });
    }

    function updateDynamicVideoData(lang) {
        document.querySelectorAll("[data-i18n-video-title]").forEach((element) => {
            const key = element.dataset.i18nVideoTitle;

            if (translations[lang][key]) {
                element.dataset.videoTitle = translations[lang][key];
            }
        });

        document.querySelectorAll("[data-i18n-video-eyebrow]").forEach((element) => {
            const key = element.dataset.i18nVideoEyebrow;

            if (translations[lang][key]) {
                element.dataset.videoEyebrow = translations[lang][key];
            }
        });
    }

    function applyLanguage(lang) {
        if (!translations[lang]) return;

        translatableElements.forEach((element) => {
            const key = element.dataset.i18n;

            if (translations[lang][key]) {
                element.textContent = translations[lang][key];
            }
        });

        document.documentElement.setAttribute("lang", lang);
        localStorage.setItem("site_lang", lang);
        setCookie("lang", lang, 30);

        updateActiveLang(lang);
        updateLinksLang(lang);
        updateDynamicVideoData(lang);
    }

    langButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();

            const lang = button.dataset.lang;
            if (!lang) return;

            applyLanguage(lang);
        });
    });

    const savedLang = localStorage.getItem("site_lang");

    if (savedLang && translations[savedLang]) {
        applyLanguage(savedLang);
    }
}