<?php $siteHeaderVariant = $siteHeaderVariant ?? 'default'; ?>

<?php if ($siteHeaderVariant === 'journal') : ?>
  <header class="journal-header" aria-label="<?= t('aria_main_nav') ?>">
    <a class="journal-header__brand" href="./" aria-label="Retour a l'accueil">
      <img src="assets/img/logo.svg" alt="" aria-hidden="true">
    </a>

    <div class="journal-header__title">
      <p>Vivre de la mer &agrave; Geoje</p>
      <span>Journal de bord - Documentaire interactif</span>
    </div>

    <button
      class="menu-button journal-header__menu-button"
      type="button"
      aria-label="<?= t('aria_open_menu') ?>"
      aria-controls="mainMenu"
      aria-expanded="false"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>
<?php elseif ($siteHeaderVariant === 'chapter-video') : ?>
  <header class="chapter-video-header" aria-label="<?= t('aria_main_nav') ?>">
    <a class="chapter-video-header__back" href="chapitres.php" aria-label="Retour aux chapitres">
      <span aria-hidden="true"></span>
    </a>

    <button
      class="menu-button chapter-video-header__menu-button"
      type="button"
      aria-label="<?= t('aria_open_menu') ?>"
      aria-controls="mainMenu"
      aria-expanded="false"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>
<?php else : ?>
  <header class="site-header" aria-label="<?= t('aria_main_nav') ?>">
    <button
      class="menu-button"
      type="button"
      aria-label="<?= t('aria_open_menu') ?>"
      aria-controls="mainMenu"
      aria-expanded="false"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>
  </header>
<?php endif; ?>

<div class="site-menu" id="mainMenu" aria-hidden="true">
  <div class="site-menu__backdrop" data-menu-close></div>

  <aside class="site-menu__panel" aria-label="Menu principal">

    <button class="site-menu__anchor" type="button" data-menu-close aria-label="Fermer le menu">
      <img src="assets/img/anchor-icon.svg" alt="" aria-hidden="true">
    </button>

    <div class="site-menu__top">

      <nav class="language-switcher language-switcher--menu" aria-label="<?= t('aria_language_switcher') ?>">
        <a
          href="#"
          data-lang="fr"
          class="lang-item js-lang-switch <?= $lang === 'fr' ? 'is-active' : '' ?>"
          aria-label="<?= t('lang_fr') ?>"
        >
          FR
        </a>

        <a
          href="#"
          data-lang="ko"
          class="lang-item js-lang-switch <?= $lang === 'ko' ? 'is-active' : '' ?>"
          aria-label="<?= t('lang_ko') ?>"
        >
          KR
        </a>
      </nav>
    </div>

    <nav class="site-menu__nav">
      <a href="./" class="site-menu__link" data-menu-link data-preview="https://i.imgflip.com/k4fek.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_home"><?= t('menu_home') ?></span>
      </a>

      <a href="chapitres.php" class="site-menu__link" data-menu-link data-preview="https://i.pinimg.com/originals/02/79/e6/0279e6b012ba6fe706d26a96b14534c5.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_chapters"><?= t('menu_chapters') ?></span>
      </a>

      <a href="archive.php" class="site-menu__link" data-menu-link data-preview="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExeHp4eGRrMW8wdTdub3hwcjFmbjhtMm9oenh3ZDA3MGhubTZ2cjhucyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/uDj0Fa3q8ipBS/giphy.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_archive"><?= t('menu_archive') ?></span>
      </a>

      <a href="immersion.php" class="site-menu__link" data-menu-link data-preview="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExbnFxbjJjZWJkaXdja2xua2lzOW9zdmF4Z3YyaGZka2x5ZTFkc25ieSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/xTdAjl8en9LvBXBEKk/giphy.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_immersion"><?= t('menu_immersion') ?></span>
      </a>

      <a href="a-propos.php" class="site-menu__link" data-menu-link data-preview="https://i.pinimg.com/originals/95/6b/42/956b42ff1e70e4a535d4bc888f9cbb6a.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_about"><?= t('menu_about') ?></span>
      </a>

      <a href="documentaire.php" class="site-menu__link" data-menu-link data-preview="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExamJzYmx0dXNkMTBjaGowc21oYnRqNG51Zjc4eTcxcjhyZ2Y2aWRpNCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/10h8d7DM6tOTK/giphy.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text" data-i18n="menu_full_doc"><?= t('menu_full_doc') ?></span>
      </a>
    </nav>

  </aside>
</div>
