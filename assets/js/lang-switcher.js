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
    }

    langButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();

            const lang = button.dataset.lang;

            if (!lang) return;

            applyLanguage(lang);
        });
    });
}