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

        <span
          class="lang-item is-disabled"
          aria-disabled="true"
          title="<?= t('lang_soon') ?>"
        >
          EN
        </span>

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
      <a href="index.php" class="site-menu__link" data-menu-link data-preview="https://i.imgflip.com/k4fek.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">Accueil</span>
      </a>

      <a href="experience.php" class="site-menu__link" data-menu-link data-preview="https://i.pinimg.com/originals/02/79/e6/0279e6b012ba6fe706d26a96b14534c5.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">Chapitres</span>
      </a>

      <a href="#" class="site-menu__link" data-menu-link data-preview="https://c.tenor.com/mLOHQJCayyAAAAAC/tenor.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">Immersions</span>
      </a>

      <a href="#" class="site-menu__link" data-menu-link data-preview="https://i.giphy.com/d8o0mo9jiM2hyA6o4T.webp">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">Archives</span>
      </a>

      <a href="#" class="site-menu__link" data-menu-link data-preview="https://i.pinimg.com/originals/95/6b/42/956b42ff1e70e4a535d4bc888f9cbb6a.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">A propos</span>
      </a>

      <a href="#" class="site-menu__link" data-menu-link data-preview="https://media.tenor.com/f7OR3mAH2xMAAAAM/true-romance-tony-scott.gif">
        <span class="site-menu__preview"></span>
        <span class="site-menu__text">Docu. complet</span>
      </a>
    </nav>

    <div class="site-menu__footer">
      <a href="#">Mentions l&eacute;gales</a>
      <a href="#">Credits</a>
    </div>

  </aside>
</div>
