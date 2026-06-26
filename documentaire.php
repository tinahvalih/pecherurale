<?php
$pageTitle = "Vivre de la mer a Geoje - Documentaire complet";
include_once 'includes/assets.php';
include 'includes/lang.php';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

<?php render_css_links(); ?>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon-black.svg">
  <script>window.siteAssetVersion = "<?= asset_version(); ?>";</script>
</head>

<body class="chapter-video-page documentary-video-page">

  <div class="page-transition" aria-hidden="true"></div>

  <main class="chapter-video documentary-video" aria-labelledby="documentary-video-title">
    <div class="paper-frame chapter-video__paper-frame" aria-hidden="true">
      <img class="paper-frame__piece paper-frame__piece--top" src="assets/img/border-top.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--right" src="assets/img/border-right.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--bottom" src="assets/img/border-bottom.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--left" src="assets/img/border-left.png" alt="">
    </div>

    <a class="documentary-video__close" href="./" aria-label="Fermer le documentaire">
      <span aria-hidden="true">&times;</span>
    </a>

    <section class="chapter-video__scene documentary-video__scene">
      <h1 id="documentary-video-title" data-i18n="menu_full_doc"><?= t('menu_full_doc') ?></h1>

      <div class="chapter-video__frame documentary-video__frame">
        <img class="chapter-video__scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">

        <iframe
          class="chapter-video__player"
          src="https://player.vimeo.com/video/1204874341?autoplay=1&controls=1&title=0&byline=0&portrait=0&dnt=1"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </section>
  </main>

  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
