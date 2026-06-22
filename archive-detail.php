<?php
include_once 'includes/assets.php';
include 'includes/lang.php';

$articleId = $_GET['article'] ?? '1';
$siteHeaderVariant = "journal";

$articles = [
  '1' => [
    'title_key' => 'archive_detail_1_title',
    'intro_key' => 'archive_detail_1_intro',
    'sections' => [
      [
        'layout' => 'text-image',
        'title_key' => 'archive_detail_1_section_1_title',
        'body_key' => 'archive_detail_1_section_1_body',
        'image' => 'assets/img/archive1_image1.png',
        'alt_key' => 'archive_detail_1_image_1_alt',
      ],
      [
        'layout' => 'image-text',
        'body_key' => 'archive_detail_1_section_2_body',
        'image' => 'assets/img/archive1_image2.png',
        'alt_key' => 'archive_detail_1_image_2_alt',
      ],
      [
        'layout' => 'text-image',
        'title_key' => 'archive_detail_1_section_3_title',
        'body_key' => 'archive_detail_1_section_3_body',
        'image' => 'assets/img/archive1_image3.png',
        'alt_key' => 'archive_detail_1_image_3_alt',
      ],
      [
        'layout' => 'image-text',
        'body_key' => 'archive_detail_1_section_4_body',
        'image' => 'assets/img/archive1_image4.png',
        'alt_key' => 'archive_detail_1_image_4_alt',
      ],
    ],
  ],
];

$article = $articles[$articleId] ?? $articles['1'];
$pageTitle = t('archive_page_title') . ' - ' . t($article['title_key']);
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

<body class="archive-detail-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="archive-detail-shell">
    <?php include 'includes/header.php'; ?>

    <main class="archive-detail-main">
      <section class="archive-detail-hero" aria-labelledby="archive-detail-title">
        <a href="archive.php" class="archive-detail-back" data-i18n="archive_detail_back"><?= t('archive_detail_back') ?></a>
        <h1 id="archive-detail-title" data-i18n="<?= htmlspecialchars($article['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($article['title_key']) ?></h1>
        <p data-i18n="<?= htmlspecialchars($article['intro_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($article['intro_key']) ?></p>
      </section>

      <section class="archive-detail-sections" aria-label="<?= t('archive_detail_sections_aria') ?>" data-i18n-aria-label="archive_detail_sections_aria">
        <?php foreach ($article['sections'] as $section) : ?>
          <article class="archive-detail-section archive-detail-section--<?= htmlspecialchars($section['layout'], ENT_QUOTES, 'UTF-8') ?>">
            <div class="archive-detail-section__text">
              <?php if (!empty($section['title_key'])) : ?>
                <h2 data-i18n="<?= htmlspecialchars($section['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($section['title_key']) ?></h2>
              <?php endif; ?>

              <div data-i18n-paragraphs="<?= htmlspecialchars($section['body_key'], ENT_QUOTES, 'UTF-8') ?>">
                <?php foreach (explode("\n\n", t($section['body_key'])) as $paragraph) : ?>
                  <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
              </div>
            </div>

            <figure class="archive-detail-section__image">
              <img
                src="<?= htmlspecialchars($section['image'], ENT_QUOTES, 'UTF-8') ?>"
                alt="<?= t($section['alt_key']) ?>"
                data-i18n-alt="<?= htmlspecialchars($section['alt_key'], ENT_QUOTES, 'UTF-8') ?>"
              >
            </figure>
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
