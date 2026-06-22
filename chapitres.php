<?php
include_once 'includes/assets.php';
include 'includes/lang.php';

$pageTitle = t('chapters_page_title');
$siteHeaderVariant = "journal";
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle; ?></title>

<?php render_css_links(); ?>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon-black.svg">
  <script>window.siteAssetVersion = "<?= asset_version(); ?>";</script>
</head>

<body class="chapitres-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="chapitres-shell">
    <?php include 'includes/header.php'; ?>

    <main class="chapitres-main">
      <section class="chapitres-hero" aria-labelledby="chapitres-title">
        <h1 id="chapitres-title" data-i18n="chapters_hero_title"><?= t('chapters_hero_title') ?></h1>
        <p data-i18n="chapters_hero_description">
          <?= t('chapters_hero_description') ?>
        </p>
      </section>

      <section class="chapitres-grid" aria-label="<?= t('chapters_list_aria') ?>" data-i18n-aria-label="chapters_list_aria">
        <article class="chapitre-card chapitre-card--tilted-left">
          <h2 data-i18n="chapters_chapter1_title"><?= t('chapters_chapter1_title') ?></h2>

          <div class="chapitre-card__media">
            <img class="chapitre-card__tape chapitre-card__tape--left" src="assets/img/scotch.png" alt="" aria-hidden="true">

            <img class="chapitre-card__thumbnail" src="assets/img/chapter1_thumbnail.png" alt="<?= t('chapters_chapter1_thumbnail_alt') ?>" data-i18n-alt="chapters_chapter1_thumbnail_alt">

            <a
              class="chapitre-card__play"
              href="chapitre-video.php?chapitre=1"
              aria-label="<?= t('chapters_chapter1_play_aria') ?>"
              data-i18n-aria-label="chapters_chapter1_play_aria"
            ></a>

            <a href="chapitre-info.php?chapitre=1" class="chapitre-card__cta" data-i18n="chapters_explore_cta">
              <?= t('chapters_explore_cta') ?>
            </a>
          </div>

          <p data-i18n="chapters_chapter1_description">
            <?= t('chapters_chapter1_description') ?>
          </p>
        </article>

        <article class="chapitre-card chapitre-card--tilted-right">
          <h2 data-i18n="chapters_chapter2_title"><?= t('chapters_chapter2_title') ?></h2>

          <div class="chapitre-card__media">
            <img class="chapitre-card__tape chapitre-card__tape--right" src="assets/img/scotch.png" alt="" aria-hidden="true">

            <img class="chapitre-card__thumbnail" src="assets/img/chapter2_thumbnail.png" alt="<?= t('chapters_chapter2_thumbnail_alt') ?>" data-i18n-alt="chapters_chapter2_thumbnail_alt">

            <a
              class="chapitre-card__play"
              href="chapitre-video.php?chapitre=2"
              aria-label="<?= t('chapters_chapter2_play_aria') ?>"
              data-i18n-aria-label="chapters_chapter2_play_aria"
            ></a>

            <a href="chapitre-info.php?chapitre=2" class="chapitre-card__cta" data-i18n="chapters_explore_cta">
              <?= t('chapters_explore_cta') ?>
            </a>
          </div>

          <p data-i18n="chapters_chapter2_description">
            <?= t('chapters_chapter2_description') ?>
          </p>
        </article>
      </section>

      <section class="chapitres-next" aria-label="<?= t('chapters_next_aria') ?>" data-i18n-aria-label="chapters_next_aria">
        <div class="chapitres-next__rule" aria-hidden="true"></div>

        <div class="chapitres-next__body">
          <article class="chapitres-next__portraits">
            <h2 data-i18n="chapters_portraits_title"><?= t('chapters_portraits_title') ?></h2>
            <p data-i18n="chapters_portraits_description">
              <?= t('chapters_portraits_description') ?>
            </p>
            <a href="#" class="chapitres-next__portrait-button" data-i18n="chapters_portraits_cta">
              <?= t('chapters_portraits_cta') ?>
            </a>
          </article>

          <article class="chapitres-next__immersion">
            <div class="chapitres-next__copy">
              <span class="chapitres-next__tag" data-i18n="chapters_immersion_tag"><?= t('chapters_immersion_tag') ?></span>
              <h2 data-i18n="chapters_sound_title"><?= t('chapters_sound_title') ?></h2>
              <a href="immersion.php" class="chapitres-next__button" data-i18n="chapters_immersion_cta">
                <?= t('chapters_immersion_cta') ?>
              </a>
            </div>

            <img
              class="chapitres-next__tape"
              src="assets/img/tape.png"
              alt="<?= t('chapters_sound_tape_alt') ?>"
              data-i18n-alt="chapters_sound_tape_alt"
            >
          </article>
        </div>

        <div class="chapitres-next__rule" aria-hidden="true"></div>

        <div class="chapitres-next__documentary">
          <p data-i18n="chapters_full_doc_label"><?= t('chapters_full_doc_label') ?></p>
          <a href="intro.php" class="chapitres-next__documentary-button">
            <span data-i18n="chapters_full_doc_cta"><?= t('chapters_full_doc_cta') ?></span> &rarr;
          </a>
        </div>
      </section>
    </main>
  </div>

  <div class="chapitres-bottom-paper" aria-hidden="true"></div>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
