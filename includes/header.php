<header class="site-header" aria-label="<?= t('aria_main_nav') ?>">

  <nav class="language-switcher" aria-label="<?= t('aria_language_switcher') ?>">
    <a
      href="?lang=fr"
      class="lang-item js-lang-switch <?= $lang === 'fr' ? 'is-active' : '' ?>"
      aria-label="<?= t('lang_fr') ?>"
    >
      FR
    </a>

    <a
      href="?lang=ko"
      class="lang-item js-lang-switch <?= $lang === 'ko' ? 'is-active' : '' ?>"
      aria-label="<?= t('lang_ko') ?>"
    >
      KR
    </a>

    <span
      class="lang-item is-disabled"
      aria-disabled="true"
      title="<?= t('lang_soon') ?>"
    >
      EN
    </span>
  </nav>

  <button class="menu-button" type="button" aria-label="<?= t('aria_open_menu') ?>">
    <span></span>
    <span></span>
    <span></span>
  </button>

</header>