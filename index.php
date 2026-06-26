<?php
$pageTitle = "Vivre de la mer a Geoje";
include_once 'includes/assets.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vivre de la mer a Geoje est un documentaire interactif sur la memoire maritime, les villages de pecheurs et les mutations de la peche rurale en Coree du Sud.">

  <title><?= $pageTitle; ?></title>

<?php render_css_links(); ?>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon-black.svg">
  <script>window.siteAssetVersion = "<?= asset_version(); ?>";</script>
</head>

<body class="home-page">

  <div class="page-transition" aria-hidden="true"></div>

  <!-- Startup Intro -->
  <div class="startup-intro" id="startupIntro" aria-hidden="false">
    <div class="startup-intro__frame">

      <section class="startup-slide is-active" data-startup-slide="0">
        <p class="startup-slide__korean">
          거가 대교로 새 생명 불어넣은 거제도<br>
          해금강 거제도는 아열대 식물 낙원<br>
          소철 종려나무 석란 풍란 동백 팔손이
        </p>


        <p class="startup-slide__translation">
          L'ile de Geoje, insufflee d'une vie nouvelle par le pont de Geoga.<br>
          Haegeumgang devient un paradis de plantes subtropicales :<br>
          orchidees du vent, camelias, palmiers, rochers et mer ouverte.
        </p>

        <p class="startup-slide__caption">
          ~ d'apres un poeme maritime coreen consacre à Geoje.
        </p>
      </section>

      <section class="startup-slide" data-startup-slide="1">
        <div class="startup-slide__sound-icon" aria-hidden="true">
          <img src="assets/img/headphone.png" alt="Icone sonore">
        </div>

        <h2 class="startup-slide__title" style="margin-top: 12px;">
          더욱 몰입감 있는 경험을 위해 헤드폰이나 이어폰 사용을 권장합니다.
        </h2>

        <h2 class="startup-slide__title">
          Pour une meilleure immersion, nous vous conseillons d'utiliser 
          un casque ou des ecouteurs.
        </h2>

        <button class="startup-intro__button" type="button" data-startup-enter>
          Commencer
        </button>

      </section>

    </div>
  </div>

  <?php include 'includes/lang.php'; ?>
  <?php include 'includes/header.php'; ?>

  <main class="hero-home">

    <video class="hero-video" autoplay muted loop playsinline preload="metadata">
      <source src="assets/video/hero_video_loop.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <!-- Ripped paper frame -->
    <div class="paper-frame" aria-hidden="true">
      <img class="paper-frame__piece paper-frame__piece--top" src="assets/img/border-top.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--right" src="assets/img/border-right.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--bottom" src="assets/img/border-bottom.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--left" src="assets/img/border-left.png" alt="">
    </div>

    <section class="hero-content" aria-label="Introduction du documentaire">
      <p class="hero-korean">
        거제에서 바다를 통해 생계를 유지하다
      </p>

      <div class="hero-title">
        <span class="hero-title-small">Vivre de la mer à</span>
        <img src="assets/img/geoje_logo.png" alt="Geoje" class="geoje-svg">
      </div>

      <nav class="hero-actions" aria-label="Actions principales">
        <a href="intro.php" class="paper-button paper-button--primary" data-i18n="firstcta">
          <span><?= t('firstcta') ?></span>
        </a>

        <a href="documentaire.php" class="paper-button paper-button--secondary" data-i18n="secondcta">
          <span><?= t('secondcta') ?></span>
        </a>
      </nav>
    </section>

    <div class="hero-logos" aria-label="Partenaires universitaires">
      <img src="assets/img/uge_logo.png" alt="Universite Gustave Eiffel" loading="lazy" decoding="async">
      <img src="assets/img/dongeui_logo.png" alt="Universite Dong-eui" loading="lazy" decoding="async">
    </div>

  </main>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/startup-intro.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
