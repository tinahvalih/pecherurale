<?php
$pageTitle = "Vivre de la mer a Geoje - Chapitres";
$siteHeaderVariant = "journal";
include 'includes/lang.php';
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

<body class="chapitres-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="chapitres-shell">
    <?php include 'includes/header.php'; ?>

    <main class="chapitres-main">
      <section class="chapitres-hero" aria-labelledby="chapitres-title">
        <h1 id="chapitres-title">Explorer le journal de bord</h1>
        <p>
          Choisissez un fragment du parcours, ouvrez une fenetre sur Geoje et laissez-vous
          guider par les voix
        </p>
      </section>

      <section class="chapitres-grid" aria-label="Liste des chapitres">
        <article class="chapitre-card chapitre-card--tilted-left">
          <h2>Chapitre I : Geoje Island</h2>

          <div class="chapitre-card__media">
            <img class="chapitre-card__tape chapitre-card__tape--left" src="assets/img/scotch.png" alt="" aria-hidden="true">

            <video muted playsinline preload="metadata">
              <source src="assets/video/hero_video_loop.mp4" type="video/mp4">
            </video>

            <a
              class="chapitre-card__play"
              href="chapitre-video.php?chapitre=1"
              aria-label="Lire le chapitre Geoje Island"
            ></a>

            <a href="intro.php" class="chapitre-card__cta">
              Explorer ce Chapitre
            </a>
          </div>

          <p>
            Premier arret du journal de bord : une traversee des paysages, des ports et des
            gestes maritimes qui racontent Geoje.
          </p>
        </article>

        <article class="chapitre-card chapitre-card--tilted-right">
          <h2>Chapitre II : Jagalchi Market</h2>

          <div class="chapitre-card__media">
            <img class="chapitre-card__tape chapitre-card__tape--right" src="assets/img/scotch.png" alt="" aria-hidden="true">

            <video muted playsinline preload="metadata">
              <source src="assets/video/video-scroll.mp4" type="video/mp4">
            </video>

            <a
              class="chapitre-card__play"
              href="chapitre-video.php?chapitre=2"
              aria-label="Lire le chapitre Jagalchi Market"
            ></a>

            <a href="#" class="chapitre-card__cta">
              Explorer ce Chapitre
            </a>
          </div>

          <p>
            Deuxieme fragment : le marche, les voix et les circulations qui prolongent la
            memoire de la mer jusque dans la ville.
          </p>
        </article>
      </section>
    </main>
  </div>

  <div class="chapitres-bottom-paper" aria-hidden="true"></div>

  <script src="assets/js/menu.js"></script>
  <script src="assets/js/page-transition.js"></script>
  <script src="assets/js/language-switcher.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
