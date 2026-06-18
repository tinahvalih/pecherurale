<?php
$pageTitle = "Vivre de la mer a Geoje - Immersions sonores";
$siteHeaderVariant = "journal";
include_once 'includes/assets.php';
include 'includes/lang.php';

$track = [
  'category' => 'Geoje Island Experience',
  'title' => 'Geoje Bridge - Chilcheongyo',
  'instruction' => 'Appuyer sur la cassette pour lire',
  'audio' => 'assets/audio/sea-expressing.mp3',
  'description' => "Avant d'etre un territoire que l'on regarde, Geoje est un lieu que l'on entend. Cette page rassemble des fragments sonores enregistres entre Geoje et Busan : la mer, les voix, les marches, les restaurants et les mouvements du quotidien. Choisissez une ambiance, laissez-la tourner en boucle, et entrez dans le documentaire par l'ecoute.",
  'tags' => ['#NATURE', '#BIRDS', '#CHOUETTE', '#BISFF'],
];
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

<body class="immersion-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="immersion-shell">
    <?php include 'includes/header.php'; ?>

    <main class="immersion-main">
      <section class="immersion-hero" aria-labelledby="immersion-title">
        <h1 id="immersion-title">Explorer par l'ecoute</h1>
        <p>Des sons de mer, de ville et de repas pour prolonger l'experience documentaire.</p>
      </section>

      <section class="immersion-category-strip" aria-label="<?= htmlspecialchars($track['category'], ENT_QUOTES, 'UTF-8') ?>">
        <h2><?= htmlspecialchars($track['category'], ENT_QUOTES, 'UTF-8') ?></h2>
        <img src="assets/img/anchor-icon2.svg" alt="" aria-hidden="true">
      </section>

      <section class="immersion-listening" aria-label="Cassette sonore">
        <article class="immersion-cassette">
          <p><?= htmlspecialchars($track['instruction'], ENT_QUOTES, 'UTF-8') ?></p>

          <button
            class="immersion-cassette__button"
            type="button"
            data-audio-card
            data-audio-src="<?= htmlspecialchars($track['audio'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-title="<?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-category="<?= htmlspecialchars($track['category'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-description="<?= htmlspecialchars($track['description'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-tags="<?= htmlspecialchars(implode(',', $track['tags']), ENT_QUOTES, 'UTF-8') ?>"
            aria-label="Lire <?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?>"
          >
            <img class="immersion-cassette__image" src="assets/img/tape.png" alt="">
            <img class="immersion-cassette__scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">
          </button>

          <h2><?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?></h2>
        </article>

        <aside class="immersion-description">
          <div class="immersion-description__inner">
            <p><?= htmlspecialchars($track['description'], ENT_QUOTES, 'UTF-8') ?></p>

            <div class="immersion-tags" aria-label="Themes">
              <?php foreach ($track['tags'] as $tag) : ?>
                <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </aside>
      </section>

      <div class="immersion-separator" aria-hidden="true"></div>
    </main>
  </div>

  <section class="audio-drawer" data-audio-drawer aria-hidden="true">
    <button class="audio-drawer__backdrop" type="button" data-audio-drawer-close aria-label="Fermer le panneau audio"></button>

    <aside class="audio-drawer__panel" aria-label="Lecteur audio">
      <p class="audio-drawer__eyebrow" data-audio-drawer-category><?= htmlspecialchars($track['category'], ENT_QUOTES, 'UTF-8') ?></p>
      <h2 data-audio-drawer-title><?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?></h2>

      <button class="audio-drawer__play" type="button" data-audio-drawer-toggle>
        <span data-audio-drawer-action>Pause</span>
      </button>

      <p class="audio-drawer__description" data-audio-drawer-description>
        <?= htmlspecialchars($track['description'], ENT_QUOTES, 'UTF-8') ?>
      </p>

      <div class="audio-drawer__tags" data-audio-drawer-tags>
        <?php foreach ($track['tags'] as $tag) : ?>
          <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
        <?php endforeach; ?>
      </div>
    </aside>
  </section>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/immersion.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
