<?php
include 'includes/lang.php';
include_once 'includes/assets.php';
$siteHeaderVariant = 'chapter-video';

$chapters = [
  '1' => [
    'title' => 'Chapitre I : Geoje Island',
    'videoId' => '1189989735',
    'next' => '2',
    'infoUrl' => '#',
  ],
  '2' => [
    'title' => 'Chapitre II : Jagalchi Market',
    'videoId' => '1189989735',
    'next' => '1',
    'infoUrl' => '#',
  ],
];

$chapterId = $_GET['chapitre'] ?? '1';
$chapter = $chapters[$chapterId] ?? $chapters['1'];
$nextChapter = $chapters[$chapter['next']];
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

<body class="chapter-video-page">

  <div class="page-transition" aria-hidden="true"></div>

  <?php include 'includes/header.php'; ?>

  <main class="chapter-video" aria-labelledby="chapter-video-title">
    <div class="paper-frame chapter-video__paper-frame" aria-hidden="true">
      <img class="paper-frame__piece paper-frame__piece--top" src="assets/img/border-top.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--right" src="assets/img/border-right.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--bottom" src="assets/img/border-bottom.png" alt="">
      <img class="paper-frame__piece paper-frame__piece--left" src="assets/img/border-left.png" alt="">
    </div>

    <section class="chapter-video__scene">
      <h1 id="chapter-video-title"><?= htmlspecialchars($chapter['title'], ENT_QUOTES, 'UTF-8'); ?></h1>

      <div class="chapter-video__frame">
        <img class="chapter-video__scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">

        <iframe
          class="chapter-video__player"
          src="https://player.vimeo.com/video/<?= htmlspecialchars($chapter['videoId'], ENT_QUOTES, 'UTF-8'); ?>?autoplay=1&controls=1&title=0&byline=0&portrait=0"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
        ></iframe>

        <a class="chapter-video__button chapter-video__button--info" href="<?= htmlspecialchars($chapter['infoUrl'], ENT_QUOTES, 'UTF-8'); ?>">
          En savoir plus sur ce chapitre &rarr;
        </a>

        <a class="chapter-video__button chapter-video__button--next" href="chapitre-video.php?chapitre=<?= htmlspecialchars($chapter['next'], ENT_QUOTES, 'UTF-8'); ?>">
          Chapitre suivant &rarr;
        </a>
      </div>
    </section>
  </main>

  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
