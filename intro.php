<?php
$pageTitle = "Vivre de la mer à Geoje - Introduction";
include 'includes/lang.php';

$nextPage = "experience.php";
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle; ?></title>

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon-black.svg">
</head>

<body class="intro-page">

  <div class="page-transition" aria-hidden="true"></div>

  <main class="intro-page__main" data-next-page="<?= $nextPage ?>">

    <!-- Ripped paper frame -->
    <div class="paper-frame intro-paper-frame" aria-hidden="true">
      <img class="paper-frame__piece paper-frame__piece--top" src="assets/img/border-top.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--right" src="assets/img/border-right.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--bottom" src="assets/img/border-bottom.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--left" src="assets/img/border-left.png" alt="">
    </div>

    <section class="intro-page__scene" aria-label="Vidéo d’introduction">
      <div class="intro-page__video-card">
        <img class="intro-page__scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">

        <iframe
          id="introPagePlayer"
          class="intro-page__player"
          src="https://player.vimeo.com/video/1189989735?autoplay=1&muted=1&controls=0&title=0&byline=0&portrait=0"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
        ></iframe>

        <a href="<?= $nextPage ?>" class="intro-page__skip paper-button paper-button--secondary">
          <span><?= t('skip_intro') ?> →</span>
        </a>
      </div>
    </section>

  </main>

  <script src="https://player.vimeo.com/api/player.js"></script>

  <script src="assets/js/page-transition.js"></script>
  <script src="assets/js/intro-page.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>