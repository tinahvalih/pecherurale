<?php
include 'includes/lang.php';
include_once 'includes/assets.php';
$siteHeaderVariant = 'journal';

$chapters = [
  '1' => [
    'title_key' => 'chapter_info_1_title',
    'subtitle_key' => 'chapter_info_1_subtitle',
    'video' => 'assets/video/hero_video_loop.mp4',
    'videoUrl' => 'chapitre-video.php?chapitre=1',
    'poster' => 'assets/img/chapter1_thumbnail.png',
    'description_key' => 'chapter_info_1_description',
    'portraits_description_key' => 'chapter_info_portraits_description',
    'extra_layout' => 'geoje',
    'footer_url' => 'chapitre-video.php?chapitre=2',
    'footer_cta_key' => 'chapter_info_footer_cta',
    'gallery_aria_key' => 'chapter_info_gallery_aria',
    'characters' => [
      [
        'name_key' => 'chapter_info_char_1_name',
        'image' => 'assets/img/characters/geoje-grandma.png',
        'description_key' => 'chapter_info_char_1_description',
      ],
      [
        'name_key' => 'chapter_info_char_2_name',
        'image' => 'assets/img/characters/geoje-grandpa.png',
        'description_key' => 'chapter_info_char_2_description',
      ],
      [
        'name_key' => 'chapter_info_char_3_name',
        'image' => 'assets/img/characters/fisherman.png',
        'description_key' => 'chapter_info_char_3_description',
      ],
    ],
    'gallery' => [
      ['file' => 'assets/img/chapter1/1.jpg', 'title_key' => 'chapter_info_gallery_1'],
      ['file' => 'assets/img/chapter1/2.jpg', 'title_key' => 'chapter_info_gallery_2'],
      ['file' => 'assets/img/chapter1/3.jpg', 'title_key' => 'chapter_info_gallery_3'],
      ['file' => 'assets/img/chapter1/4.jpg', 'title_key' => 'chapter_info_gallery_4'],
      ['file' => 'assets/img/chapter1/5.jpg', 'title_key' => 'chapter_info_gallery_5'],
      ['file' => 'assets/img/chapter1/6.jpg', 'title_key' => 'chapter_info_gallery_6'],
      ['file' => 'assets/img/chapter1/7.jpg', 'title_key' => 'chapter_info_gallery_7'],
      ['file' => 'assets/img/chapter1/8.jpg', 'title_key' => 'chapter_info_gallery_8'],
      ['file' => 'assets/img/chapter1/9.jpg', 'title_key' => 'chapter_info_gallery_9'],
    ],
  ],
  '2' => [
    'title_key' => 'chapter_info_2_title',
    'subtitle_key' => 'chapter_info_2_subtitle',
    'video' => 'assets/video/hero_video_loop.mp4',
    'videoUrl' => 'chapitre-video.php?chapitre=2',
    'poster' => 'assets/img/chapter2_thumbnail.png',
    'description_key' => 'chapter_info_2_description',
    'portraits_description_key' => 'chapter_info_2_portraits_description',
    'extra_layout' => 'distribution',
    'footer_url' => 'intro.php',
    'footer_cta_key' => 'chapter_info_footer_doc_cta',
    'gallery_aria_key' => 'chapter_info_2_gallery_aria',
    'characters' => [
      [
        'name_key' => 'chapter_info_2_char_1_name',
        'image' => 'assets/img/characters/millak-man.png',
        'description_key' => 'chapter_info_2_char_1_description',
      ],
      [
        'name_key' => 'chapter_info_2_char_2_name',
        'image' => 'assets/img/characters/fishmarketers.png',
        'description_key' => 'chapter_info_2_char_2_description',
      ],
    ],
    'gallery' => [
      ['file' => 'assets/img/chapter2/1.jpg', 'title_key' => 'chapter_info_2_gallery_1'],
      ['file' => 'assets/img/chapter2/2.jpg', 'title_key' => 'chapter_info_2_gallery_2'],
      ['file' => 'assets/img/chapter2/3.jpg', 'title_key' => 'chapter_info_2_gallery_3'],
      ['file' => 'assets/img/chapter2/4.jpg', 'title_key' => 'chapter_info_2_gallery_4'],
      ['file' => 'assets/img/chapter2/5.jpg', 'title_key' => 'chapter_info_2_gallery_5'],
      ['file' => 'assets/img/chapter2/6.jpg', 'title_key' => 'chapter_info_2_gallery_6'],
    ],
  ],
];

$chapterId = $_GET['chapitre'] ?? '1';
$chapter = $chapters[$chapterId] ?? $chapters['1'];
$pageTitle = t('chapter_info_page_title') . ' - ' . t($chapter['title_key']);
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
        <h1 id="chapter-info-title" data-i18n="<?= htmlspecialchars($chapter['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t($chapter['title_key']), ENT_QUOTES, 'UTF-8'); ?></h1>
        <p data-i18n="<?= htmlspecialchars($chapter['subtitle_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t($chapter['subtitle_key']), ENT_QUOTES, 'UTF-8'); ?></p>
      </section>

      <section class="chapter-info-overview" aria-label="<?= t('chapter_info_overview_aria') ?>" data-i18n-aria-label="chapter_info_overview_aria">
        <article class="chapter-info-video-card">
          <img class="chapter-info-scotch" src="assets/img/scotch.png" alt="" aria-hidden="true">
          <video muted playsinline preload="metadata" poster="<?= htmlspecialchars($chapter['poster'], ENT_QUOTES, 'UTF-8'); ?>">
            <source src="<?= htmlspecialchars($chapter['video'], ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
          </video>
          <a class="chapter-info-play" href="<?= htmlspecialchars($chapter['videoUrl'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?= t('chapter_info_play_aria') ?>" data-i18n-aria-label="chapter_info_play_aria"></a>
        </article>

        <aside class="chapter-info-description">
          <h2 data-i18n="chapter_info_description_title"><?= t('chapter_info_description_title') ?></h2>
          <div data-i18n-paragraphs="<?= htmlspecialchars($chapter['description_key'], ENT_QUOTES, 'UTF-8') ?>">
            <?php foreach (explode("\n\n", t($chapter['description_key'])) as $paragraph) : ?>
              <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endforeach; ?>
          </div>
        </aside>
      </section>

      <div class="chapter-info-separator" aria-hidden="true"></div>

      <section class="chapter-characters" aria-label="<?= t('chapter_info_characters_aria') ?>" data-i18n-aria-label="chapter_info_characters_aria">
        <div class="chapter-character-slider" data-character-slider>
          <?php foreach ($chapter['characters'] as $index => $character) : ?>
            <article class="chapter-character-slide <?= $index === 0 ? 'is-active' : '' ?>" data-character-slide>
              <img src="<?= htmlspecialchars($character['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars(t($character['name_key']), ENT_QUOTES, 'UTF-8'); ?>" data-i18n-alt="<?= htmlspecialchars($character['name_key'], ENT_QUOTES, 'UTF-8') ?>">
              <div class="chapter-character-card">
                <img src="assets/img/scotch.png" alt="" aria-hidden="true">
                <h3 data-i18n="<?= htmlspecialchars($character['name_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t($character['name_key']), ENT_QUOTES, 'UTF-8'); ?></h3>
                <div data-i18n-paragraphs="<?= htmlspecialchars($character['description_key'], ENT_QUOTES, 'UTF-8') ?>">
                  <?php foreach (explode("\n\n", t($character['description_key'])) as $paragraph) : ?>
                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
                  <?php endforeach; ?>
                </div>
              </div>
            </article>
          <?php endforeach; ?>

          <div class="chapter-character-dots" aria-label="<?= t('chapter_info_character_nav_aria') ?>" data-i18n-aria-label="chapter_info_character_nav_aria">
            <?php foreach ($chapter['characters'] as $index => $character) : ?>
              <button
                class="<?= $index === 0 ? 'is-active' : '' ?>"
                type="button"
                data-character-dot
                aria-label="<?= htmlspecialchars(t('chapter_info_character_dot_aria') . ' ' . t($character['name_key']), ENT_QUOTES, 'UTF-8'); ?>"
                data-i18n-aria-label-prefix="chapter_info_character_dot_aria"
                data-i18n-aria-label-subject="<?= htmlspecialchars($character['name_key'], ENT_QUOTES, 'UTF-8') ?>"
              ></button>
            <?php endforeach; ?>
          </div>
        </div>

        <aside class="chapter-characters-heading">
          <h2 data-i18n="chapter_info_portraits_title"><?= t('chapter_info_portraits_title') ?></h2>
          <p data-i18n="<?= htmlspecialchars($chapter['portraits_description_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($chapter['portraits_description_key']) ?></p>
        </aside>
      </section>

      <section class="chapter-section-title">
        <h2 data-i18n="chapter_info_extra_title"><?= t('chapter_info_extra_title') ?></h2>
      </section>

      <section class="chapter-extra-info chapter-extra-info--<?= htmlspecialchars($chapter['extra_layout'], ENT_QUOTES, 'UTF-8') ?>" aria-label="<?= t('chapter_info_extra_aria') ?>" data-i18n-aria-label="chapter_info_extra_aria">
        <?php if ($chapter['extra_layout'] === 'distribution') : ?>
          <article class="chapter-extra-card chapter-extra-card--difficulties">
            <div class="chapter-extra-dashed">
              <h3 data-i18n="chapter_info_2_difficulties_title"><?= t('chapter_info_2_difficulties_title') ?></h3>
              <ul class="chapter-extra-bullets">
                <li data-i18n="chapter_info_2_difficulty_1"><?= t('chapter_info_2_difficulty_1') ?></li>
                <li data-i18n="chapter_info_2_difficulty_2"><?= t('chapter_info_2_difficulty_2') ?></li>
                <li data-i18n="chapter_info_2_difficulty_3"><?= t('chapter_info_2_difficulty_3') ?></li>
                <li data-i18n="chapter_info_2_difficulty_4"><?= t('chapter_info_2_difficulty_4') ?></li>
                <li data-i18n="chapter_info_2_difficulty_5"><?= t('chapter_info_2_difficulty_5') ?></li>
                <li data-i18n="chapter_info_2_difficulty_6"><?= t('chapter_info_2_difficulty_6') ?></li>
              </ul>
            </div>
          </article>

          <article class="chapter-extra-card chapter-extra-card--distribution">
            <div class="chapter-extra-dashed">
              <h3 data-i18n="chapter_info_2_distribution_title"><?= t('chapter_info_2_distribution_title') ?></h3>
              <img src="assets/img/distribution.png" alt="<?= t('chapter_info_2_distribution_alt') ?>" data-i18n-alt="chapter_info_2_distribution_alt">
            </div>
          </article>
        <?php else : ?>
          <article class="chapter-extra-card chapter-extra-card--map">
            <h3 data-i18n="chapter_info_geoje_title"><?= t('chapter_info_geoje_title') ?></h3>
            <p data-i18n="chapter_info_geoje_description"><?= t('chapter_info_geoje_description') ?></p>
            <img src="assets/img/geoje-map.png" alt="<?= t('chapter_info_geoje_map_alt') ?>" data-i18n-alt="chapter_info_geoje_map_alt">
          </article>

          <article class="chapter-extra-card chapter-extra-card--routine" style="margin-top: 20px;">
            <div class="chapter-extra-dashed">
              <img src="assets/img/fisher-routine.png" alt="<?= t('chapter_info_fisher_alt') ?>" data-i18n-alt="chapter_info_fisher_alt">
              <ul>
                <li><span>6h-7h</span><span data-i18n="chapter_info_fisher_routine_1"><?= t('chapter_info_fisher_routine_1') ?></span></li>
                <li><span>7h-8h</span><span data-i18n="chapter_info_fisher_routine_2"><?= t('chapter_info_fisher_routine_2') ?></span></li>
                <li><span>8h-9h</span><span data-i18n="chapter_info_fisher_routine_3"><?= t('chapter_info_fisher_routine_3') ?></span></li>
                <li><span>9h-10h</span><span data-i18n="chapter_info_fisher_routine_4"><?= t('chapter_info_fisher_routine_4') ?></span></li>
                <li><span>10h-11h</span><span data-i18n="chapter_info_fisher_routine_5"><?= t('chapter_info_fisher_routine_5') ?></span></li>
                <li><span>11h-16h</span><span data-i18n="chapter_info_fisher_routine_6"><?= t('chapter_info_fisher_routine_6') ?></span></li>
                <li><span>16h</span><span data-i18n="chapter_info_fisher_routine_7"><?= t('chapter_info_fisher_routine_7') ?></span></li>
              </ul>
            </div>
            <h3 data-i18n="chapter_info_fisher_routine_title"><?= t('chapter_info_fisher_routine_title') ?></h3>
            <p data-i18n="chapter_info_fisher_routine_source"><?= t('chapter_info_fisher_routine_source') ?></p>
          </article>

          <article class="chapter-extra-card chapter-extra-card--routine">
            <h3 data-i18n="chapter_info_restaurant_routine_title"><?= t('chapter_info_restaurant_routine_title') ?></h3>
            <p data-i18n="chapter_info_restaurant_routine_source"><?= t('chapter_info_restaurant_routine_source') ?></p>
            <div class="chapter-extra-dashed">
              <img src="assets/img/characters/geoje-grandpa.png" alt="<?= t('chapter_info_restaurant_alt') ?>" data-i18n-alt="chapter_info_restaurant_alt">
              <ul>
                <li><span>6h-8h</span><span data-i18n="chapter_info_restaurant_routine_1"><?= t('chapter_info_restaurant_routine_1') ?></span></li>
                <li><span>8h-8h30</span><span data-i18n="chapter_info_restaurant_routine_2"><?= t('chapter_info_restaurant_routine_2') ?></span></li>
                <li><span>8h30-11h</span><span data-i18n="chapter_info_restaurant_routine_3"><?= t('chapter_info_restaurant_routine_3') ?></span></li>
                <li><span>11h-12h</span><span data-i18n="chapter_info_restaurant_routine_4"><?= t('chapter_info_restaurant_routine_4') ?></span></li>
                <li><span>12h-15h</span><span data-i18n="chapter_info_restaurant_routine_5"><?= t('chapter_info_restaurant_routine_5') ?></span></li>
                <li><span>15h-17h</span><span data-i18n="chapter_info_restaurant_routine_6"><?= t('chapter_info_restaurant_routine_6') ?></span></li>
                <li><span>17h-20h</span><span data-i18n="chapter_info_restaurant_routine_7"><?= t('chapter_info_restaurant_routine_7') ?></span></li>
                <li><span>20h</span><span data-i18n="chapter_info_restaurant_routine_8"><?= t('chapter_info_restaurant_routine_8') ?></span></li>
              </ul>
            </div>
          </article>
        <?php endif; ?>
      </section>

      <section class="chapter-section-title">
        <h2 data-i18n="chapter_info_gallery_title"><?= t('chapter_info_gallery_title') ?></h2>
      </section>

      <section class="chapter-gallery" aria-label="<?= t($chapter['gallery_aria_key']) ?>" data-i18n-aria-label="<?= htmlspecialchars($chapter['gallery_aria_key'], ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach ($chapter['gallery'] as $index => $photo) : ?>
          <figure class="chapter-polaroid chapter-polaroid--<?= ($index % 4) + 1 ?>">
            <button
              type="button"
              class="chapter-polaroid__button"
              data-gallery-item
              data-gallery-index="<?= $index ?>"
              aria-label="<?= htmlspecialchars(t('chapter_info_open_image_aria') . ' ' . t($photo['title_key']), ENT_QUOTES, 'UTF-8'); ?>"
              data-i18n-aria-label-prefix="chapter_info_open_image_aria"
              data-i18n-aria-label-subject="<?= htmlspecialchars($photo['title_key'], ENT_QUOTES, 'UTF-8') ?>"
            >
              <img src="<?= htmlspecialchars($photo['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars(t($photo['title_key']), ENT_QUOTES, 'UTF-8'); ?>" data-i18n-alt="<?= htmlspecialchars($photo['title_key'], ENT_QUOTES, 'UTF-8') ?>">
            </button>
            <figcaption data-i18n="<?= htmlspecialchars($photo['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(t($photo['title_key']), ENT_QUOTES, 'UTF-8'); ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </section>

      <section class="chapter-info-footer-cta">
        <span data-i18n="chapter_info_footer_label"><?= t('chapter_info_footer_label') ?></span>
        <a href="<?= htmlspecialchars($chapter['footer_url'], ENT_QUOTES, 'UTF-8') ?>"><span data-i18n="<?= htmlspecialchars($chapter['footer_cta_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($chapter['footer_cta_key']) ?></span> &rarr;</a>
      </section>
    </main>
  </div>

  <div class="chapter-lightbox" data-chapter-lightbox aria-hidden="true">
    <button class="chapter-lightbox__backdrop" type="button" data-gallery-close aria-label="<?= t('chapter_info_close_gallery_aria') ?>" data-i18n-aria-label="chapter_info_close_gallery_aria"></button>
    <div class="chapter-lightbox__content" role="dialog" aria-modal="true" aria-label="<?= t('chapter_info_lightbox_aria') ?>" data-i18n-aria-label="chapter_info_lightbox_aria">
      <img class="chapter-lightbox__tape" src="assets/img/scotch.png" alt="" aria-hidden="true">
      <button class="chapter-lightbox__close" type="button" data-gallery-close aria-label="<?= t('chapter_info_close_gallery_aria') ?>" data-i18n-aria-label="chapter_info_close_gallery_aria">&times;</button>
      <button class="chapter-lightbox__nav chapter-lightbox__nav--prev" type="button" data-gallery-prev aria-label="<?= t('chapter_info_prev_image_aria') ?>" data-i18n-aria-label="chapter_info_prev_image_aria"></button>
      <img class="chapter-lightbox__image" data-gallery-image src="" alt="">
      <button class="chapter-lightbox__nav chapter-lightbox__nav--next" type="button" data-gallery-next aria-label="<?= t('chapter_info_next_image_aria') ?>" data-i18n-aria-label="chapter_info_next_image_aria"></button>
    </div>
  </div>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/chapter-info.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
