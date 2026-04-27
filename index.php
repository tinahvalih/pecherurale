<?php
$pageTitle = "Vivre de la mer à Geoje";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $pageTitle; ?></title>

  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="home-page">
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
        <a href="experience.php" class="hero-link">
          Commencer à naviguer ⛵
        </a>

        <button class="hero-link hero-link-button" type="button" data-video="documentaire-complet">
          Regarder le documentaire en entier 🐟
        </button>
      </nav>

      <div class="headphones-note">
        <span class="headphones-icon">🎧</span>        
        <p>Profitez d’une meilleure expérience avec un casque</p>
      </div>
    </section>

    <div class="hero-logos">
      <img src="assets/img/uge_logo.png" alt="Université Gustave Eiffel">
      <img src="assets/img/dongeui_logo.png" alt="Université Dong-eui">
    </div>

  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>