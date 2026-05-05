<?php
$pageTitle = "Vivre de la mer à Geoje - Experience";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle; ?></title>

  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

  <div class="page-transition" aria-hidden="true"></div>

  <?php include 'includes/lang.php'; ?>
  <?php include 'includes/header.php'; ?>

<!-- Bullet Nav -->
<nav class="nav-chapitres" aria-label="<?= t('aria_chapter_nav') ?>">
  <ul>
    <li><a href="#chapitre-1" aria-label="Chapitre 1"></a></li>
    <li><a href="#chapitre-2" aria-label="Chapitre 2"></a></li>
    <li><a href="#chapitre-3" aria-label="Chapitre 3"></a></li>
  </ul>
</nav>

<main id="experience">

  <!-- SCROLL EXPERIENCE -->
  <section id="container">

    <!-- VIDEO BACKGROUND -->
    <div class="video-wrapper ma-video-sticky">
      <video class="video-background" muted playsinline preload="auto">
        <source src="assets/video/video-scroll.mp4" type="video/mp4">
      </video>
    </div>

    <!-- PART 1 -->
    <section class="container-block chapitre" id="chapitre-1">
      <div class="content">
        <span class="label" data-i18n="chapter_1_label"><?= t('chapter_1_label') ?></span>
        <h2 data-i18n="chapter_1_title"><?= t('chapter_1_title') ?></h2>
        <p data-i18n="chapter_1_text"><?= t('chapter_1_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762023745"
          data-video-title="<?= t('chapter_1_title') ?>"
          data-video-eyebrow="<?= t('chapter_1_label') ?>"
          data-i18n-video-title="chapter_1_title"
          data-i18n-video-eyebrow="chapter_1_label"
        >
          <span data-i18n="chapter_1_cta"><?= t('chapter_1_cta') ?></span> 🐟
        </button>
      </div>
    </section>

    <!-- PART 2 -->
    <section class="container-block chapitre" id="chapitre-2">
      <div class="content">
        <span class="label" data-i18n="chapter_2_label"><?= t('chapter_2_label') ?></span>
        <h2 data-i18n="chapter_2_title"><?= t('chapter_2_title') ?></h2>
        <p data-i18n="chapter_2_text"><?= t('chapter_2_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762023173"
          data-video-title="<?= t('chapter_2_title') ?>"
          data-video-eyebrow="<?= t('chapter_2_label') ?>"
          data-i18n-video-title="chapter_2_title"
          data-i18n-video-eyebrow="chapter_2_label"
        >
          <span data-i18n="chapter_2_cta"><?= t('chapter_2_cta') ?></span> 🐟
        </button>
      </div>
    </section>

    <!-- PART 3 -->
    <section class="container-block chapitre" id="chapitre-3">
      <div class="content">
        <span class="label" data-i18n="chapter_3_label"><?= t('chapter_3_label') ?></span>
        <h2 data-i18n="chapter_3_title"><?= t('chapter_3_title') ?></h2>
        <p data-i18n="chapter_3_text"><?= t('chapter_3_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762021539"
          data-video-title="<?= t('chapter_3_title') ?>"
          data-video-eyebrow="<?= t('chapter_3_label') ?>"
          data-i18n-video-title="chapter_3_title"
          data-i18n-video-eyebrow="chapter_3_label"
        >
          <span data-i18n="chapter_3_cta"><?= t('chapter_3_cta') ?></span>
        </button>
      </div>
    </section>

    <!-- CONCLUSION -->
    <section class="container-block">
      <div class="content">
        <span class="label" data-i18n="conclusion_label"><?= t('conclusion_label') ?></span>
        <h2 data-i18n="conclusion_title"><?= t('conclusion_title') ?></h2>
        <p data-i18n="conclusion_text"><?= t('conclusion_text') ?></p>
      </div>
    </section>

  </section>

</main>

<?php include 'includes/video-modal.php'; ?>

<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script src="assets/js/menu.js"></script>
<script src="assets/js/page-transition.js"></script>
<script src="assets/js/video-modal.js"></script>
<script src="assets/js/experience-scroll.js"></script>
<script src="assets/js/chapter-nav.js"></script>
<script src="assets/js/language-switcher.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>