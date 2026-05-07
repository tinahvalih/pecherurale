<?php
$pageTitle = "Vivre de la mer à Geoje";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Vivre de la mer à Geoje est un documentaire sur la survie d’un monde maritime pris entre traditions et mutations environnementales.">

  <title><?= $pageTitle; ?></title>

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon-black.svg">

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
        L’île de Geoje, insufflée d’une vie nouvelle par le pont de Geoga.<br>
        Haegeumgang devient un paradis de plantes subtropicales :<br>
        orchidées du vent, camélias, palmiers, rochers et mer ouverte.
      </p>

      <p class="startup-slide__caption">
        d’après un poème maritime coréen consacré à Geoje.
      </p>
    </section>

    <section class="startup-slide" data-startup-slide="1">
      <div class="startup-slide__sound-icon" aria-hidden="true">
        <img src="assets/img/sound-icon.png" alt="Icône sonore">
      </div>

      <h2 class="startup-slide__title">
        Pour une meilleure immersion, nous vous conseillons d’utiliser un casque ou des écouteurs.
      </h2>

      <button class="startup-intro__button" type="button" data-startup-enter>
        Appuyer pour entrer
      </button>
    </section>

  </div>
</div>


  <?php include 'includes/lang.php'; ?>
  <?php include 'includes/header.php'; ?>

  <main class="hero-home">

    <video class="hero-video" autoplay muted loop playsinline preload="metadata">
      <source src="assets/video/hero.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>

    <section class="hero-content" aria-label="Introduction du documentaire">
      <p class="hero-korean">
        거제에서 바다를 통해 생계를 유지하다
      </p>

      <div class="hero-title">
        <span class="hero-title-small">Vivre de la mer à</span>
        <img src="assets/img/geoje_logo.png" alt="Geoje" class="geoje-svg">
      </div>

      <nav class="hero-actions" aria-label="Actions principales">
        <a href="intro.php" class="premium-button premium-button--light" data-i18n="firstcta">
          <span class="premium-button__text">
            <span><?= t('firstcta') ?></span>
            <span aria-hidden="true"><?= t('firstcta') ?></span>
          </span>
        </a>

        <button
          class="premium-button premium-button--outline js-video-open"
          type="button"
          data-video-provider="vimeo"
          data-video-id="1189912427"
          data-video-eyebrow="Documentaire complet"
          data-video-title="Vivre de la mer à Geoje"
          data-i18n="secondcta"
        >
          <span class="premium-button__text">
            <span><?= t('secondcta') ?></span>
            <span aria-hidden="true"><?= t('secondcta') ?></span>
          </span>
        </button>
      </nav>

      <div class="headphones-note">
        <span class="headphones-icon">🎧</span>
        <p data-i18n="headphones"><?= t('headphones') ?></p>
      </div>
    </section>

    <div class="hero-logos">
      <img src="assets/img/uge_logo.png" alt="Université Gustave Eiffel">
      <img src="assets/img/dongeui_logo.png" alt="Université Dong-eui">
    </div>

  </main>

  <?php include 'includes/video-modal.php'; ?>

<script src="https://player.vimeo.com/api/player.js"></script>

<script src="assets/js/menu.js"></script>
<script src="assets/js/page-transition.js"></script>
<script src="assets/js/video-modal.js"></script>
<script src="assets/js/language-switcher.js"></script>
<script src="assets/js/startup-intro.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>