function initLanguageSwitcher() {
  const availableLangs = ["fr", "ko"];
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

    const version = window.siteAssetVersion ? `?v=${window.siteAssetVersion}` : "";
    const response = await fetch(`assets/i18n/${lang}.json${version}`);

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
        const premiumTextLines = element.querySelectorAll(".premium-button__text span");

        if (premiumTextLines.length) {
          premiumTextLines.forEach((line) => {
            line.textContent = dictionary[key];
          });
        } else {
          element.textContent = dictionary[key];
        }
      }
    });
  }

  function applyTranslations(lang, dictionary) {
    translatableElements.forEach((element) => {
      const key = element.dataset.i18n;

      if (dictionary[key]) {
        const premiumTextLines = element.querySelectorAll(".premium-button__text span");

        if (premiumTextLines.length) {
          premiumTextLines.forEach((line) => {
            line.textContent = dictionary[key];
          });
        } else {
          element.textContent = dictionary[key];
        }
      }
    });

    document.querySelectorAll("[data-i18n-alt]").forEach((element) => {
      const key = element.dataset.i18nAlt;

      if (dictionary[key]) {
        element.setAttribute("alt", dictionary[key]);
      }
    });

    document.querySelectorAll("[data-i18n-aria-label]").forEach((element) => {
      const key = element.dataset.i18nAriaLabel;

      if (dictionary[key]) {
        element.setAttribute("aria-label", dictionary[key]);
      }
    });

    document.querySelectorAll("[data-i18n-aria-label-prefix][data-i18n-aria-label-subject]").forEach((element) => {
      const prefixKey = element.dataset.i18nAriaLabelPrefix;
      const subjectKey = element.dataset.i18nAriaLabelSubject;

      if (dictionary[prefixKey] && dictionary[subjectKey]) {
        element.setAttribute("aria-label", `${dictionary[prefixKey]} ${dictionary[subjectKey]}`);
      }
    });

    document.querySelectorAll("[data-i18n-audio-title]").forEach((element) => {
      const titleKey = element.dataset.i18nAudioTitle;
      const categoryKey = element.dataset.i18nAudioCategory;
      const descriptionKey = element.dataset.i18nAudioDescription;
      const tagsKey = element.dataset.i18nAudioTags;

      if (dictionary[titleKey]) {
        element.dataset.audioTitle = dictionary[titleKey];
      }

      if (dictionary[categoryKey]) {
        element.dataset.audioCategory = dictionary[categoryKey];
      }

      if (dictionary[descriptionKey]) {
        element.dataset.audioDescription = dictionary[descriptionKey];
      }

      if (dictionary[tagsKey]) {
        element.dataset.audioTags = dictionary[tagsKey];
      }

      if (dictionary.immersion_play_aria && dictionary[titleKey]) {
        element.setAttribute("aria-label", `${dictionary.immersion_play_aria} ${dictionary[titleKey]}`);
      }
    });

    document.querySelectorAll("[data-i18n-tags]").forEach((element) => {
      const key = element.dataset.i18nTags;

      if (dictionary[key]) {
        element.innerHTML = "";
        dictionary[key]
          .split(",")
          .map((tag) => tag.trim())
          .filter(Boolean)
          .forEach((tag) => {
            const item = document.createElement("span");
            item.textContent = tag;
            element.appendChild(item);
          });
      }
    });

    document.querySelectorAll("[data-i18n-paragraphs]").forEach((element) => {
      const key = element.dataset.i18nParagraphs;

      if (dictionary[key]) {
        element.innerHTML = "";
        dictionary[key].split("\n\n").forEach((paragraph) => {
          const item = document.createElement("p");
          item.textContent = paragraph;
          element.appendChild(item);
        });
      }
    });

    document.documentElement.setAttribute("lang", lang);
    localStorage.setItem("site_lang", lang);
    setCookie("lang", lang, 30);

    updateActiveLang(lang);
    updateDynamicVideoData(lang, dictionary);
    document.dispatchEvent(new CustomEvent("geoje-language-change", {
      detail: { lang, dictionary },
    }));
  }

  langButtons.forEach((button) => {
    button.addEventListener("click", async (event) => {
      event.preventDefault();

      const lang = button.dataset.lang;

      if (!lang) return;
      if (!availableLangs.includes(lang)) return;
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

  if (savedLang && availableLangs.includes(savedLang)) {
    loadTranslations(savedLang)
      .then((dictionary) => applyTranslations(savedLang, dictionary))
      .catch((error) => console.error(error));
  } else if (savedLang) {
    localStorage.removeItem("site_lang");
  }
}
