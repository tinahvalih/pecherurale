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

<?php include 'includes/header.php'; ?>

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

    <button id="skipIntro">Passer</button>
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
    <section class="container-block">
      <div class="content">
        <span class="label">01 — MATIN</span>
        <h2>La vie du pêcheur</h2>
        <p>À l’aube, le pêcheur quitte le port et prépare ses filets.</p>

        <button
          class="js-video-open"
          data-video-provider="vimeo"
          data-video-id="762023745"
          data-video-title="Le pêcheur"
          data-video-eyebrow="Partie 1"
        >
          Commencer à pêcher
        </button>
      </div>
    </section>

    <!-- PART 2 -->
    <section class="container-block">
      <div class="content">
        <span class="label">02 — MIDI</span>
        <h2>La poissonnerie</h2>
        <p>Le poisson arrive au marché, trié et vendu.</p>

        <button class="js-video-open" data-video-id="762023173">
          Explorer la poissonnerie
        </button>
      </div>
    </section>

    <!-- PART 3 -->
    <section class="container-block">
      <div class="content">
        <span class="label">03 — SOIR</span>
        <h2>Le restaurant</h2>
        <p>La mer devient repas et mémoire vivante.</p>

        <button class="js-video-open" data-video-id="762021539">
          Découvrir le restaurant
        </button>
      </div>
    </section>

    <!-- CONCLUSION -->
    <section class="container-block">
      <div class="content">
        <span class="label">Conclusion</span>
        <h2>La mer reste</h2>
        <p>Les gestes changent, la mémoire dépend de ceux qui la transmettent.</p>
      </div>
    </section>

  </section>

</main>

<?php include 'includes/video-modal.php'; ?>

<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script src="assets/js/main.js"></script>


</body>

</html>