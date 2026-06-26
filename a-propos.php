<?php
include_once 'includes/assets.php';
include 'includes/lang.php';

$pageTitle = t('about_page_title');
$siteHeaderVariant = "journal";

$team = [
  ['role_key' => 'about_team_project_direction', 'members' => ['Yona Cadin', 'Vincent Kuntz']],
  ['role_key' => 'about_team_research', 'members' => ['Alix Sinel', 'Prescillia Lutumba']],
  ['role_key' => 'about_team_location_scouting', 'members' => ['Lee Yunju 이윤주', 'Lee Hyunji 이현지', 'Lim Jajung 임자정', 'Jeong Gyumin 정규민']],
  ['role_key' => 'about_team_interviews', 'members' => ['Lee Yunju 이윤주', 'Lee Hyunji 이현지']],
  ['role_key' => 'about_team_directing', 'members' => ['Rudina Didi', 'Chaïma Jallali', 'Lee Hyunji 이현지']],
  ['role_key' => 'about_team_camera', 'members' => ['Eliott Leclerc', 'Lim Jajung 임자정']],
  ['role_key' => 'about_team_photo', 'members' => ['Virgil Cantin']],
  ['role_key' => 'about_team_sound', 'members' => ['Vincent Kuntz', 'Jeong Gyumin 정규민']],
  ['role_key' => 'about_team_editing', 'members' => ['Nolan Robic', 'Eliott Leclerc', 'Vincent Kuntz', 'Lee Yunju 이윤주', 'Lee Hyunji 이현지']],
  ['role_key' => 'about_team_design', 'members' => ['Virgil Cantin', 'Tinah Valiha']],
  ['role_key' => 'about_team_web', 'members' => ['Tinah Valiha']],
  ['role_key' => 'about_team_translation', 'members' => ['Chaïma Jallali', 'Rudina Didi']],
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

<body class="about-page">

  <div class="page-transition" aria-hidden="true"></div>

  <div class="about-shell">
    <?php include 'includes/header.php'; ?>

    <main class="about-main">
      <section class="about-hero" aria-labelledby="about-title">
        <h1 id="about-title" data-i18n="about_hero_title"><?= t('about_hero_title') ?></h1>
      </section>

      <section class="about-intent" aria-labelledby="about-intent-title">
        <div class="about-intent__label">
          <span data-i18n="about_intent_label"><?= t('about_intent_label') ?></span>
          <h2 id="about-intent-title" data-i18n="about_intent_title"><?= t('about_intent_title') ?></h2>
        </div>

        <article class="about-intent__paper">
          <img class="about-intent__tape about-intent__tape--top" src="assets/img/scotch.png" alt="" aria-hidden="true">
          <img class="about-intent__tape about-intent__tape--side" src="assets/img/scotch.png" alt="" aria-hidden="true">
          <div data-i18n-paragraphs="about_intent_body">
            <?php foreach (explode("\n\n", t('about_intent_body')) as $paragraph) : ?>
              <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endforeach; ?>
          </div>
        </article>
      </section>

      <div class="about-rule" aria-hidden="true"></div>

      <section class="about-team" aria-labelledby="about-team-title">
        <div class="about-team__heading">
          <h2 id="about-team-title" data-i18n="about_team_title"><?= t('about_team_title') ?></h2>
        </div>

        <div class="about-team__grid">
          <?php foreach ($team as $group) : ?>
            <article class="about-team-card">
              <h3 data-i18n="<?= htmlspecialchars($group['role_key'], ENT_QUOTES, 'UTF-8') ?>"><?= t($group['role_key']) ?></h3>
              <ul>
                <?php foreach ($group['members'] as $member) : ?>
                  <li><?= htmlspecialchars($member, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
              </ul>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="about-footer-cta">
        <span data-i18n="about_footer_label"><?= t('about_footer_label') ?></span>
        <a href="chapitres.php"><span data-i18n="about_footer_cta"><?= t('about_footer_cta') ?></span> &rarr;</a>
      </section>
    </main>
  </div>

  <script src="<?= asset('assets/js/menu.js') ?>"></script>
  <script src="<?= asset('assets/js/page-transition.js') ?>"></script>
  <script src="<?= asset('assets/js/language-switcher.js') ?>"></script>
  <script src="<?= asset('assets/js/main.js') ?>"></script>

</body>
</html>
