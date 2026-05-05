function initLanguageSwitcher() {
  const langButtons = document.querySelectorAll(".js-lang-switch");
  const translatableElements = document.querySelectorAll("[data-i18n]");

  if (!langButtons.length) return;

  const translationsCache = {};

  function setCookie(name, value, days) {
    const maxAge = days * 24 * 60 * 60;
    document.cookie = `${name}=${value}; path=/; max-age=${maxAge}`;
  }

  function updateActiveLang(lang) {
    langButtons.forEach((button) => {
      button.classList.toggle("is-active", button.dataset.lang === lang);
    });
  }

  async function loadTranslations(lang) {
    if (translationsCache[lang]) {
      return translationsCache[lang];
    }

    const response = await fetch(`assets/i18n/${lang}.json`);

    if (!response.ok) {
      throw new Error(`Impossible de charger la langue : ${lang}`);
    }

    const dictionary = await response.json();
    translationsCache[lang] = dictionary;

    return dictionary;
  }

  function updateDynamicVideoData(lang, dictionary) {
    document.querySelectorAll("[data-i18n-video-title]").forEach((element) => {
      const key = element.dataset.i18nVideoTitle;

      if (dictionary[key]) {
        element.dataset.videoTitle = dictionary[key];
      }
    });

    document.querySelectorAll("[data-i18n-video-eyebrow]").forEach((element) => {
      const key = element.dataset.i18nVideoEyebrow;

      if (dictionary[key]) {
        element.dataset.videoEyebrow = dictionary[key];
      }
    });
  }

  function applyTranslations(lang, dictionary) {
    translatableElements.forEach((element) => {
      const key = element.dataset.i18n;

      if (dictionary[key]) {
        element.textContent = dictionary[key];
      }
    });

    document.documentElement.setAttribute("lang", lang);
    localStorage.setItem("site_lang", lang);
    setCookie("lang", lang, 30);

    updateActiveLang(lang);
    updateDynamicVideoData(lang, dictionary);
  }

  langButtons.forEach((button) => {
    button.addEventListener("click", async (event) => {
      event.preventDefault();

      const lang = button.dataset.lang;

      if (!lang) return;
      if (button.classList.contains("is-active")) return;

      try {
        const dictionary = await loadTranslations(lang);
        applyTranslations(lang, dictionary);
      } catch (error) {
        console.error(error);
      }
    });
  });

  const savedLang = localStorage.getItem("site_lang");

  if (savedLang) {
    loadTranslations(savedLang)
      .then((dictionary) => applyTranslations(savedLang, dictionary))
      .catch((error) => console.error(error));
  }
}
