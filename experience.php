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

  <?php include 'includes/lang.php'; ?>
  <?php include 'includes/header.php'; ?>

<!-- Bullet Nav -->

<nav class="nav-chapitres" aria-label="Navigation des chapitres">
  <ul>
    <li><a href="#chapitre-1" aria-label="Chapitre 1"></a></li>
    <li><a href="#chapitre-2" aria-label="Chapitre 2"></a></li>
    <li><a href="#chapitre-3" aria-label="Chapitre 3"></a></li>
  </ul>
</nav>



<main id="experience">

  <!-- INTRO VIDEO -->
  <div id="introVideo" class="intro-video">
    <div id="introPlayerWrapper">
        <iframe
            id="introPlayer"
            src="https://player.vimeo.com/video/762021329?autoplay=1&muted=1&controls=0&title=0&byline=0&portrait=0"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
        ></iframe>
    </div>

  <button id="skipIntro"><?= t('skip_intro') ?></button>
  
</div>

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
        <span class="label"><?= t('chapter_1_label') ?></span>
        <h2><?= t('chapter_1_title') ?></h2>
        <p><?= t('chapter_1_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762023745"
          data-video-title="<?= t('chapter_1_title') ?>"
          data-video-eyebrow="<?= t('chapter_1_label') ?>"
        >
          <?= t('chapter_1_cta') ?>🐟
        </button>
      </div>
    </section>

    <!-- PART 2 -->
    <section class="container-block chapitre" id="chapitre-2">
      <div class="content">
        <span class="label"><?= t('chapter_2_label') ?></span>
        <h2><?= t('chapter_2_title') ?></h2>
        <p><?= t('chapter_2_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762023173"
          data-video-title="<?= t('chapter_2_title') ?>"
          data-video-eyebrow="<?= t('chapter_2_label') ?>"
        >
          <?= t('chapter_2_cta') ?>
        </button>
      </div>
    </section>

    <!-- PART 3 -->
    <section class="container-block chapitre" id="chapitre-3">
      <div class="content">
        <span class="label"><?= t('chapter_3_label') ?></span>
        <h2><?= t('chapter_3_title') ?></h2>
        <p><?= t('chapter_3_text') ?></p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762021539"
          data-video-title="<?= t('chapter_3_title') ?>"
          data-video-eyebrow="<?= t('chapter_3_label') ?>"
        >
          <?= t('chapter_3_cta') ?>
        </button>
      </div>
    </section>

    <!-- CONCLUSION -->
    <section class="container-block">
      <div class="content">
        <span class="label"><?= t('conclusion_label') ?></span>
        <h2><?= t('conclusion_title') ?></h2>
        <p><?= t('conclusion_text') ?></p>
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
<script src="assets/js/intro-video.js"></script>
<script src="assets/js/video-modal.js"></script>
<script src="assets/js/experience-scroll.js"></script>
<script src="assets/js/chapter-nav.js"></script>
<script src="assets/js/main.js"></script>


</body>

</html>