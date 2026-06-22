<?php
include_once 'includes/assets.php';
include 'includes/lang.php';

$pageTitle = t('archive_page_title');
$siteHeaderVariant = "journal";
$fishingBookImage = file_exists(__DIR__ . '/assets/img/carnet_pêche.png')
  ? 'assets/img/carnet_pêche.png'
  : 'assets/img/carnet_pÃªche.png';

$articles = [
  [
    'image' => 'assets/img/carnet_circuit.png',
    'title_key' => 'archive_article_1_title',
    'description_key' => 'archive_article_1_description',
    'alt_key' => 'archive_article_1_alt',
    'url' => 'archive-detail.php?article=1',
  ],
  [
    'image' => 'assets/img/carnet_geoje.png',
    'title_key' => 'archive_article_2_title',
    'description_key' => 'archive_article_2_description',
    'alt_key' => 'archive_article_2_alt',
    'url' => '#',
  ],
  [
    'image' => 'assets/img/carnet_trad.png',
    'title_key' => 'archive_article_3_title',
    'description_key' => 'archive_article_3_description',
    'alt_key' => 'archive_article_3_alt',
    'url' => '#',
  ],
  [
    'image' => $fishingBookImage,
    'title_key' => 'archive_article_4_title',
    'description_key' => 'archive_article_4_description',
    'alt_key' => 'archive_article_4_alt',
    'url' => '#',
  ],
];
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

<body class="archive-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="archive-shell">
    <?php include 'includes/header.php'; ?>

    <main class="archive-main">
      <section class="archive-hero" aria-labelledby="archive-title">
        <h1 id="archive-title" data-i18n="archive_hero_title"><?= t('archive_hero_title') ?></h1>
      </section>

      <section class="archive-grid" aria-label="<?= t('archive_articles_aria') ?>" data-i18n-aria-label="archive_articles_aria">
        <?php foreach ($articles as $index => $article) : ?>
          <article class="archive-card archive-card--<?= $index + 1 ?>">
            <div class="archive-card__book">
              <img
                src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>"
                alt="<?= t($article['alt_key']) ?>"
                data-i18n-alt="<?= htmlspecialchars($article['alt_key'], ENT_QUOTES, 'UTF-8') ?>"
              >
              <h2 data-i18n="<?= htmlspecialchars($article['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($article['title_key']) ?></h2>

              <a href="<?= htmlspecialchars($article['url'], ENT_QUOTES, 'UTF-8') ?>" class="archive-card__button" data-i18n="archive_article_cta">
                <?= t('archive_article_cta') ?>
              </a>
            </div>

            <p data-i18n="<?= htmlspecialchars($article['description_key'], ENT_QUOTES, 'UTF-8') ?>">
              <?= t($article['description_key']) ?>
            </p>
          </article>
        <?php endforeach; ?>
      </section>
    </main>
  </div>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
