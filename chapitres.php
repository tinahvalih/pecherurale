<?php
$pageTitle = "Vivre de la mer a Geoje - Chapitres";
$siteHeaderVariant = "journal";
include_once 'includes/assets.php';
include 'includes/lang.php';
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

      <section class="chapitres-next" aria-label="Prolonger le parcours">
        <div class="chapitres-next__rule" aria-hidden="true"></div>

        <div class="chapitres-next__body">
          <article class="chapitres-next__portraits">
            <h2>Portraits / Personnages</h2>
            <p>
              Rencontrez les voix, les gestes et les presences qui traversent le
              journal de bord.
            </p>
            <a href="#" class="chapitres-next__portrait-button">
              Decouvrir les portraits
            </a>
          </article>

          <article class="chapitres-next__immersion">
            <div class="chapitres-next__copy">
              <span class="chapitres-next__tag">#Immersion</span>
              <h2>Experience sonore</h2>
              <a href="immersion.php" class="chapitres-next__button">
                Explorer les immersions
              </a>
            </div>

            <img
              class="chapitres-next__tape"
              src="assets/img/tape.png"
              alt="Cassette sound of Geoje"
            >
          </article>
        </div>

        <div class="chapitres-next__rule" aria-hidden="true"></div>

        <div class="chapitres-next__documentary">
          <p>Regarder le documentaire en entier</p>
          <a href="intro.php" class="chapitres-next__documentary-button">
            Voir le documentaire →
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
