<?php
$pageTitle = "Vivre de la mer a Geoje - Immersions sonores";
$siteHeaderVariant = "journal";
include_once 'includes/assets.php';
include 'includes/lang.php';

$tracks = [
  [
    'category' => 'Geoje Island Experience',
    'title' => 'Geoje Bridge - Chilcheongyo',
    'instruction' => 'Appuyer sur la cassette pour lire',
    'audio' => 'assets/audio/sea-expressing.mp3',
    'image' => 'assets/img/tape.png',
    'description' => "Avant d'etre un territoire que l'on regarde, Geoje est un lieu que l'on entend. Cette page rassemble des fragments sonores enregistres entre Geoje et Busan : la mer, les voix, les marches, les restaurants et les mouvements du quotidien. Choisissez une ambiance, laissez-la tourner en boucle, et entrez dans le documentaire par l'ecoute.",
    'tags' => ['#NATURE', '#BIRDS', '#CHOUETTE', '#BISFF'],
  ],
  [
    'category' => 'Geoje Island Experience',
    'title' => 'Geoje Bridge - Chilcheongyo',
    'instruction' => 'Appuyer sur la cassette pour lire',
    'audio' => 'assets/audio/restaurant-working.mp3',
    'image' => 'assets/img/tape-yellow.png',
    'description' => "Une autre ecoute de Geoje : les frottements du port, les respirations de la ville et les sons de passage qui prolongent le trajet.",
    'tags' => ['#MER', '#PORT', '#VOIX', '#GEOJE'],
  ],
  [
    'category' => 'Jagalchi Market & Busan',
    'title' => 'Geoje Bridge - Chilcheongyo',
    'instruction' => 'Appuyer sur la cassette pour lire',
    'audio' => 'assets/audio/raining-calm.mp3',
    'image' => 'assets/img/tape-green.png',
    'description' => "Fragments de marche, de circulation et de conversations : Busan prolonge la mer dans les rues, entre les etals et les restaurants.",
    'tags' => ['#MARCHE', '#BUSAN', '#VOIX', '#VILLE'],
  ],
  [
    'category' => 'Jagalchi Market & Busan',
    'title' => 'Geoje Bridge - Chilcheongyo',
    'instruction' => 'Appuyer sur la cassette pour lire',
    'audio' => 'assets/audio/asian-market.mp3',
    'image' => 'assets/img/tape-blue.png',
    'description' => "Une ambiance plus proche des gestes quotidiens : pas, appels, objets et mouvements qui composent la rumeur du marche.",
    'tags' => ['#MARCHE', '#GESTES', '#BUSAN', '#SON'],
  ],
];

$track = $tracks[0];
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
            data-audio-image="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-category="<?= htmlspecialchars($track['category'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-description="<?= htmlspecialchars($track['description'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-tags="<?= htmlspecialchars(implode(',', $track['tags']), ENT_QUOTES, 'UTF-8') ?>"
            aria-label="Lire <?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?>"
          >
            <img class="immersion-cassette__image" src="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
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

      <section class="immersion-listening immersion-listening--reverse" aria-label="Cassette sonore secondaire">
        <aside class="immersion-description">
          <div class="immersion-description__inner">
            <p><?= htmlspecialchars($tracks[1]['description'], ENT_QUOTES, 'UTF-8') ?></p>

            <div class="immersion-tags" aria-label="Themes">
              <?php foreach ($tracks[1]['tags'] as $tag) : ?>
                <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </aside>

        <article class="immersion-cassette immersion-cassette--right">
          <button
            class="immersion-cassette__button"
            type="button"
            data-audio-card
            data-audio-src="<?= htmlspecialchars($tracks[1]['audio'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-title="<?= htmlspecialchars($tracks[1]['title'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-image="<?= htmlspecialchars($tracks[1]['image'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-category="<?= htmlspecialchars($tracks[1]['category'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-description="<?= htmlspecialchars($tracks[1]['description'], ENT_QUOTES, 'UTF-8') ?>"
            data-audio-tags="<?= htmlspecialchars(implode(',', $tracks[1]['tags']), ENT_QUOTES, 'UTF-8') ?>"
            aria-label="Lire <?= htmlspecialchars($tracks[1]['title'], ENT_QUOTES, 'UTF-8') ?>"
          >
            <img class="immersion-cassette__image" src="<?= htmlspecialchars($tracks[1]['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
            <img class="immersion-cassette__scotch immersion-cassette__scotch--right" src="assets/img/scotch.png" alt="" aria-hidden="true">
          </button>

          <h2><?= htmlspecialchars($tracks[1]['title'], ENT_QUOTES, 'UTF-8') ?></h2>
        </article>
      </section>

      <section class="immersion-category-strip immersion-category-strip--split" aria-label="Jagalchi Market & Busan">
        <div>
          <h2>Jagalchi Market &amp; Busan</h2>
          <img src="assets/img/anchor-icon2.svg" alt="" aria-hidden="true">
        </div>
        <p>Appuyer sur la cassette pour lire</p>
      </section>

      <section class="immersion-cassette-grid" aria-label="Jagalchi Market et Busan">
        <?php foreach (array_slice($tracks, 2) as $index => $item) : ?>
          <article class="immersion-cassette immersion-cassette--grid">
            <button
              class="immersion-cassette__button"
              type="button"
              data-audio-card
              data-audio-src="<?= htmlspecialchars($item['audio'], ENT_QUOTES, 'UTF-8') ?>"
              data-audio-title="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>"
              data-audio-image="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>"
              data-audio-category="<?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?>"
              data-audio-description="<?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8') ?>"
              data-audio-tags="<?= htmlspecialchars(implode(',', $item['tags']), ENT_QUOTES, 'UTF-8') ?>"
              aria-label="Lire <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>"
            >
              <img class="immersion-cassette__image" src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
              <img class="immersion-cassette__scotch <?= $index === 0 ? 'immersion-cassette__scotch--top' : 'immersion-cassette__scotch--left' ?>" src="assets/img/scotch.png" alt="" aria-hidden="true">
            </button>

            <h2><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h2>
          </article>
        <?php endforeach; ?>
      </section>

      <div class="immersion-separator" aria-hidden="true"></div>

      <section class="immersion-footer-cta">
        <span>Retourner voir les chapitres</span>
        <a href="chapitres.php">Explorer les chapitres &rarr;</a>
      </section>

    </main>
  </div>

  <section class="audio-drawer" data-audio-drawer aria-hidden="true">
    <button class="audio-drawer__backdrop" type="button" data-audio-drawer-close aria-label="Fermer le panneau audio"></button>

    <aside class="audio-drawer__panel" aria-label="Lecteur audio">
      <div class="audio-drawer__cassette" aria-hidden="true">
        <img class="audio-drawer__cassette-image" data-audio-drawer-image src="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
        <img class="audio-drawer__cassette-scotch" src="assets/img/scotch.png" alt="">
      </div>

      <h2 data-audio-drawer-title><?= htmlspecialchars($track['title'], ENT_QUOTES, 'UTF-8') ?></h2>

      <p class="audio-drawer__description" data-audio-drawer-description>
        <?= htmlspecialchars($track['description'], ENT_QUOTES, 'UTF-8') ?>
      </p>

      <p class="audio-drawer__notice">
        Pour avoir une meilleure experience, veuillez mettre un casque
      </p>

      <button class="audio-drawer__play" type="button" data-audio-drawer-toggle aria-label="Mettre en pause ou relancer l'audio">
        <span data-audio-drawer-action>Pause</span>
      </button>
    </aside>
  </section>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/immersion.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
