<?php
include_once 'includes/assets.php';
include 'includes/lang.php';

$pageTitle = t('immersion_page_title');
$siteHeaderVariant = "journal";

$tracks = [
  [
    'category_key' => 'immersion_category_geoje',
    'title_key' => 'immersion_track_1_title',
    'description_key' => 'immersion_track_1_description',
    'tags_key' => 'immersion_track_1_tags',
    'audio' => 'assets/audio/jagalchi.wav',
    'image' => 'assets/img/tape.png',
  ],
  [
    'category_key' => 'immersion_category_geoje',
    'title_key' => 'immersion_track_2_title',
    'description_key' => 'immersion_track_2_description',
    'tags_key' => 'immersion_track_2_tags',
    'audio' => 'assets/audio/restaurant-working.mp3',
    'image' => 'assets/img/tape-yellow.png',
  ],
  [
    'category_key' => 'immersion_category_jagalchi',
    'title_key' => 'immersion_track_3_title',
    'description_key' => 'immersion_track_3_description',
    'tags_key' => 'immersion_track_3_tags',
    'audio' => 'assets/audio/raining-calm.mp3',
    'image' => 'assets/img/tape-green.png',
  ],
  [
    'category_key' => 'immersion_category_jagalchi',
    'title_key' => 'immersion_track_4_title',
    'description_key' => 'immersion_track_4_description',
    'tags_key' => 'immersion_track_4_tags',
    'audio' => 'assets/audio/asian-market.mp3',
    'image' => 'assets/img/tape-blue.png',
  ],
];

function track_value($track, $field) {
    return t($track[$field]);
}

function track_tags($track) {
    $tags = array_map('trim', explode(',', t($track['tags_key'])));
    return array_values(array_filter($tags));
}

function render_audio_button($track, $scotchClass = '') {
    $title = track_value($track, 'title_key');
    $category = track_value($track, 'category_key');
    $description = track_value($track, 'description_key');
    $tags = track_tags($track);
    ?>
    <button
      class="immersion-cassette__button"
      type="button"
      data-audio-card
      data-audio-src="<?= htmlspecialchars($track['audio'], ENT_QUOTES, 'UTF-8') ?>"
      data-audio-title="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>"
      data-audio-image="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>"
      data-audio-category="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>"
      data-audio-description="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>"
      data-audio-tags="<?= htmlspecialchars(implode(',', $tags), ENT_QUOTES, 'UTF-8') ?>"
      data-i18n-audio-title="<?= htmlspecialchars($track['title_key'], ENT_QUOTES, 'UTF-8') ?>"
      data-i18n-audio-category="<?= htmlspecialchars($track['category_key'], ENT_QUOTES, 'UTF-8') ?>"
      data-i18n-audio-description="<?= htmlspecialchars($track['description_key'], ENT_QUOTES, 'UTF-8') ?>"
      data-i18n-audio-tags="<?= htmlspecialchars($track['tags_key'], ENT_QUOTES, 'UTF-8') ?>"
      aria-label="<?= htmlspecialchars(t('immersion_play_aria') . ' ' . $title, ENT_QUOTES, 'UTF-8') ?>"
      data-i18n-aria-label-prefix="immersion_play_aria"
    >
      <img class="immersion-cassette__image" src="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
      <img class="immersion-cassette__scotch <?= htmlspecialchars($scotchClass, ENT_QUOTES, 'UTF-8') ?>" src="assets/img/scotch.png" alt="" aria-hidden="true">
    </button>
    <?php
}

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
        <h1 id="immersion-title" data-i18n="immersion_hero_title"><?= t('immersion_hero_title') ?></h1>
        <p data-i18n="immersion_hero_description"><?= t('immersion_hero_description') ?></p>
      </section>

      <section class="immersion-category-strip" aria-label="<?= htmlspecialchars(track_value($track, 'category_key'), ENT_QUOTES, 'UTF-8') ?>" data-i18n-aria-label="immersion_category_geoje">
        <h2 data-i18n="immersion_category_geoje"><?= t('immersion_category_geoje') ?></h2>
        <img src="assets/img/anchor-icon2.svg" alt="" aria-hidden="true">
      </section>

      <section class="immersion-listening" aria-label="<?= t('immersion_audio_section_aria') ?>" data-i18n-aria-label="immersion_audio_section_aria">
        <article class="immersion-cassette">
          <p data-i18n="immersion_press_cassette"><?= t('immersion_press_cassette') ?></p>

          <?php render_audio_button($track, ''); ?>

          <h2 data-i18n="<?= htmlspecialchars($track['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(track_value($track, 'title_key'), ENT_QUOTES, 'UTF-8') ?></h2>
        </article>

        <aside class="immersion-description">
          <div class="immersion-description__inner">
            <p data-i18n="<?= htmlspecialchars($track['description_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(track_value($track, 'description_key'), ENT_QUOTES, 'UTF-8') ?></p>

            <div class="immersion-tags" aria-label="<?= t('immersion_tags_aria') ?>" data-i18n-aria-label="immersion_tags_aria" data-i18n-tags="<?= htmlspecialchars($track['tags_key'], ENT_QUOTES, 'UTF-8') ?>">
              <?php foreach (track_tags($track) as $tag) : ?>
                <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </aside>
      </section>

      <div class="immersion-separator" aria-hidden="true"></div>

      <section class="immersion-listening immersion-listening--reverse" aria-label="<?= t('immersion_secondary_audio_section_aria') ?>" data-i18n-aria-label="immersion_secondary_audio_section_aria">
        <aside class="immersion-description">
          <div class="immersion-description__inner">
            <p data-i18n="<?= htmlspecialchars($tracks[1]['description_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(track_value($tracks[1], 'description_key'), ENT_QUOTES, 'UTF-8') ?></p>

            <div class="immersion-tags" aria-label="<?= t('immersion_tags_aria') ?>" data-i18n-aria-label="immersion_tags_aria" data-i18n-tags="<?= htmlspecialchars($tracks[1]['tags_key'], ENT_QUOTES, 'UTF-8') ?>">
              <?php foreach (track_tags($tracks[1]) as $tag) : ?>
                <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </aside>

        <article class="immersion-cassette immersion-cassette--right">
          <?php render_audio_button($tracks[1], 'immersion-cassette__scotch--right'); ?>

          <h2 data-i18n="<?= htmlspecialchars($tracks[1]['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(track_value($tracks[1], 'title_key'), ENT_QUOTES, 'UTF-8') ?></h2>
        </article>
      </section>

      <section class="immersion-category-strip immersion-category-strip--split" aria-label="<?= t('immersion_category_jagalchi') ?>" data-i18n-aria-label="immersion_category_jagalchi">
        <div>
          <h2 data-i18n="immersion_category_jagalchi"><?= t('immersion_category_jagalchi') ?></h2>
          <img src="assets/img/anchor-icon2.svg" alt="" aria-hidden="true">
        </div>
        <p data-i18n="immersion_press_cassette"><?= t('immersion_press_cassette') ?></p>
      </section>

      <section class="immersion-cassette-grid" aria-label="<?= t('immersion_jagalchi_grid_aria') ?>" data-i18n-aria-label="immersion_jagalchi_grid_aria">
        <?php foreach (array_slice($tracks, 2) as $index => $item) : ?>
          <article class="immersion-cassette immersion-cassette--grid">
            <?php render_audio_button($item, $index === 0 ? 'immersion-cassette__scotch--top' : 'immersion-cassette__scotch--left'); ?>

            <h2 data-i18n="<?= htmlspecialchars($item['title_key'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars(track_value($item, 'title_key'), ENT_QUOTES, 'UTF-8') ?></h2>
          </article>
        <?php endforeach; ?>
      </section>

      <div class="immersion-separator" aria-hidden="true"></div>

      <section class="immersion-footer-cta">
        <span data-i18n="immersion_back_to_chapters"><?= t('immersion_back_to_chapters') ?></span>
        <a href="chapitres.php"><span data-i18n="immersion_chapters_cta"><?= t('immersion_chapters_cta') ?></span> &rarr;</a>
      </section>

    </main>
  </div>

  <section class="audio-drawer" data-audio-drawer aria-hidden="true">
    <button class="audio-drawer__backdrop" type="button" data-audio-drawer-close aria-label="<?= t('immersion_close_drawer_aria') ?>" data-i18n-aria-label="immersion_close_drawer_aria"></button>

    <aside class="audio-drawer__panel" aria-label="<?= t('immersion_audio_player_aria') ?>" data-i18n-aria-label="immersion_audio_player_aria">
      <div class="audio-drawer__cassette" aria-hidden="true">
        <img class="audio-drawer__cassette-image" data-audio-drawer-image src="<?= htmlspecialchars($track['image'], ENT_QUOTES, 'UTF-8') ?>" alt="">
        <img class="audio-drawer__cassette-scotch" src="assets/img/scotch.png" alt="">
      </div>

      <h2 data-audio-drawer-title><?= htmlspecialchars(track_value($track, 'title_key'), ENT_QUOTES, 'UTF-8') ?></h2>

      <p class="audio-drawer__notice" data-i18n="immersion_drawer_notice">
        <?= t('immersion_drawer_notice') ?>
      </p>

      <button
        class="audio-drawer__play"
        type="button"
        data-audio-drawer-toggle
        aria-label="<?= t('immersion_toggle_audio_aria') ?>"
        data-i18n-aria-label="immersion_toggle_audio_aria"
      >
        <span data-audio-drawer-action data-i18n="immersion_pause_label"><?= t('immersion_pause_label') ?></span>
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
