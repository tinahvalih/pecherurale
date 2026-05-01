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

<!-- Bullet Nav -->

<nav class="nav-chapitres" aria-label="Navigation des chapitres">
  <ul>
    <li><a href="#chapitre-1" aria-label="Chapitre 1"></a></li>
    <li><a href="#chapitre-2" aria-label="Chapitre 2"></a></li>
    <li><a href="#chapitre-3" aria-label="Chapitre 3"></a></li>
  </ul>
</nav>

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
    <section class="container-block" id="chapitre-1">
      <div class="content">
        <span class="label">Première partie :</span>
        <h2>La vie du pêcheur</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>

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
    <section class="container-block" id="chapitre-2">
      <div class="content">
        <span class="label">Deuxième partie :</span>
        <h2>La poissonnerie</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>

        <button class="js-video-open" data-video-id="762023173">
          Explorer la poissonnerie
        </button>
      </div>
    </section>

    <!-- PART 3 -->
    <section class="container-block" id="chapitre-3">
      <div class="content">
        <span class="label">Troisième partie :</span>
        <h2>Le restaurant</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>

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