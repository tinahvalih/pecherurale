<?php
include 'includes/lang.php';
include_once 'includes/assets.php';
$siteHeaderVariant = 'journal';

$chapters = [
  '1' => [
    'title' => 'Chapitre I : Geoje Island',
    'subtitle' => "Retour sur les lieux, les gestes et les voix qui composent le premier fragment du journal de bord.",
    'video' => 'assets/video/hero_video_loop.mp4',
    'videoUrl' => 'chapitre-video.php?chapitre=1',
    'description' => "Depart avant l'aube. La lumiere est froide. Le premier son est celui d'une bouee jetee a l'eau.\n\nLe capitaine ne parle presque pas. Les gestes sont mecaniques mais precis. La mer semble se vider d'annee en annee, selon lui.",
    'characters' => [
      [
        'name' => 'Choi Jeong-Sun',
        'image' => 'assets/img/characters/geoje-grandma.png',
        'description' => "Agee de 71 ans, elle gere le restaurant avec son mari Lee Gap-Soo. Originaire du Gyeongsang du sud, elle a emmenage a Geoje pour suivre son mari dans son activite malgre qu'elle n'aime pas l'activite de la peche.\n\nAujourd'hui, elle aide son mari dans la gestion du restaurant, la preparation de la nourriture et l'accueil des gens.",
      ],
      [
        'name' => 'Lee Gap-Soo',
        'image' => 'assets/img/characters/geoje-grandpa.png',
        'description' => "Lee Gap-Soo a 73 ans, il est ne a Geoje et baigne dans le milieu maritime depuis son enfance. Il a commence a travailler dans le milieu de la peche a 17 ans.\n\nIl a ouvert le restaurant de poisson cru Eochon apres avoir fini son activite de pecheur en 2011, qu'il gere avec sa femme depuis 15 ans.",
      ],
      [
        'name' => 'Yeo Young-Dong',
        'image' => 'assets/img/characters/fisherman.png',
        'description' => "Age de 70 ans, il vit a Geoje depuis toujours et peche depuis 40 ans depuis la reprise de l'activite de ses parents.\n\nIl est aussi proprietaire d'un restaurant de poisson cru qui lui permet d'ecouler les stocks de poisson qu'il peche car les marches sont trop loin.",
      ],
    ],
    'gallery' => [
      ['file' => 'assets/img/chapter1/1.jpg', 'title' => 'Depart au port'],
      ['file' => 'assets/img/chapter1/2.jpg', 'title' => 'Bateaux de Geoje'],
      ['file' => 'assets/img/chapter1/3.jpg', 'title' => 'Retour de peche'],
      ['file' => 'assets/img/chapter1/4.jpg', 'title' => 'Rivage calme'],
      ['file' => 'assets/img/chapter1/5.jpg', 'title' => 'Gestes du matin'],
      ['file' => 'assets/img/chapter1/6.jpg', 'title' => 'Village maritime'],
      ['file' => 'assets/img/chapter1/7.jpg', 'title' => 'Mer ouverte'],
      ['file' => 'assets/img/chapter1/8.jpg', 'title' => 'Filets et memoire'],
      ['file' => 'assets/img/chapter1/9.jpg', 'title' => 'Fin de journee'],
    ],
  ],
];

$chapterId = $_GET['chapitre'] ?? '1';
$chapter = $chapters[$chapterId] ?? $chapters['1'];
$pageTitle = 'Vivre de la mer a Geoje - ' . $chapter['title'];
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

<body class="chapter-info-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="chapter-info-shell">
    <?php include 'includes/header.php'; ?>

    <main class="chapter-info-main">
      <section class="chapter-info-hero" aria-labelledby="chapter-info-title">
        <h1 id="chapter-info-title"><?= htmlspecialchars($chapter['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p><?= htmlspecialchars($chapter['subtitle'], ENT_QUOTES, 'UTF-8'); ?></p>
      </section>

      <section class="chapter-info-overview" aria-label="Presentation du chapitre">
        <article class="chapter-info-video-card">
          <img class="chapter-info-scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">
          <video muted playsinline preload="metadata" poster="assets/img/chapter1_thumbnail.png">
            <source src="<?= htmlspecialchars($chapter['video'], ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
          </video>
          <a class="chapter-info-play" href="<?= htmlspecialchars($chapter['videoUrl'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Lire le chapitre"></a>
        </article>

        <aside class="chapter-info-description">
          <h2>Description</h2>
          <div>
            <?php foreach (explode("\n\n", $chapter['description']) as $paragraph) : ?>
              <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endforeach; ?>
          </div>
        </aside>
      </section>

      <div class="chapter-info-separator" aria-hidden="true"></div>

      <section class="chapter-characters" aria-label="Portraits et personnages">
        <div class="chapter-character-slider" data-character-slider>
          <?php foreach ($chapter['characters'] as $index => $character) : ?>
            <article class="chapter-character-slide <?= $index === 0 ? 'is-active' : '' ?>" data-character-slide>
              <img src="<?= htmlspecialchars($character['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($character['name'], ENT_QUOTES, 'UTF-8'); ?>">
              <div class="chapter-character-card">
                <img src="assets/img/scotch.png" alt="" aria-hidden="true">
                <h3><?= htmlspecialchars($character['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <?php foreach (explode("\n\n", $character['description']) as $paragraph) : ?>
                  <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
              </div>
            </article>
          <?php endforeach; ?>

          <div class="chapter-character-dots" aria-label="Navigation personnages">
            <?php foreach ($chapter['characters'] as $index => $character) : ?>
              <button class="<?= $index === 0 ? 'is-active' : '' ?>" type="button" data-character-dot aria-label="Voir <?= htmlspecialchars($character['name'], ENT_QUOTES, 'UTF-8'); ?>"></button>
            <?php endforeach; ?>
          </div>
        </div>

        <aside class="chapter-characters-heading">
          <h2>Portraits / Personnages</h2>
          <p>Trois voix pour prolonger le chapitre : le restaurant, la peche et les gestes quotidiens de Geoje.</p>
        </aside>
      </section>

      <section class="chapter-section-title">
        <h2>Informations supplementaires</h2>
      </section>

      <section class="chapter-extra-info" aria-label="Informations supplementaires">
        <article class="chapter-extra-card chapter-extra-card--map">
          <h3>L'ile de Geoje</h3>
          <p>Carte de l'ile avec en jaune les zones de protection des ressources halieutiques et en bleu, les modifications de ces zones de protections.</p>
          <img src="assets/img/geoje-map.png" alt="Carte de l'ile de Geoje">
        </article>

        <article class="chapter-extra-card chapter-extra-card--routine" style="margin-top: 20px;">
          <div class="chapter-extra-dashed">
            <img src="assets/img/fisher-routine.png" alt="Yeo Young-Dong">
            <ul>
              <li><span>6h-7h</span>Debut de la peche</li>
              <li><span>7h-8h</span>Petit dejeuner</li>
              <li><span>8h-9h</span>Achat au marche</li>
              <li><span>9h-10h</span>Preparation</li>
              <li><span>10h-11h</span>Repas</li>
              <li><span>11h-16h</span>Reprise de la peche</li>
              <li><span>16h</span>Fin de la journee</li>
            </ul>
          </div>
          <h3>La routine d'un pecheur</h3>
          <p>D'apres Yeo Young-Dong</p>
        </article>

        <article class="chapter-extra-card chapter-extra-card--routine">
          <h3>La routine d'un restaurateur</h3>
          <p>D'apres Choi Jeong-Sun</p>
          <div class="chapter-extra-dashed">
            <img src="assets/img/characters/geoje-grandpa.png" alt="Lee Gap-Soo">
            <ul>
              <li><span>6h-8h</span>Cueillette de legumes</li>
              <li><span>8h-8h30</span>Retour des champs</li>
              <li><span>8h30-11h</span>Preparation des legumes</li>
              <li><span>11h-12h</span>Douche et preparation</li>
              <li><span>12h-15h</span>Service</li>
              <li><span>15h-17h</span>Nettoyage du restaurant</li>
              <li><span>17h-20h</span>Second service</li>
              <li><span>20h</span>Fin de journee</li>
            </ul>
          </div>
        </article>
      </section>

      <section class="chapter-section-title">
        <h2>Galerie</h2>
      </section>

      <section class="chapter-gallery" aria-label="Galerie chapitre 1">
        <?php foreach ($chapter['gallery'] as $index => $photo) : ?>
          <figure class="chapter-polaroid chapter-polaroid--<?= ($index % 4) + 1 ?>">
            <img src="<?= htmlspecialchars($photo['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($photo['title'], ENT_QUOTES, 'UTF-8'); ?>">
            <figcaption><?= htmlspecialchars($photo['title'], ENT_QUOTES, 'UTF-8'); ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </section>

      <section class="chapter-info-footer-cta">
        <span>Continuer le journal de bord</span>
        <a href="chapitre-video.php?chapitre=2">Chapitre 2 &rarr;</a>
      </section>
    </main>
  </div>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/chapter-info.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
