<?php
function asset($path) {
    $fullPath = __DIR__ . '/../' . ltrim($path, '/');
    $version = file_exists($fullPath) ? filemtime($fullPath) : time();
    $separator = strpos($path, '?') !== false ? '&' : '?';

    return htmlspecialchars($path . $separator . 'v=' . $version, ENT_QUOTES, 'UTF-8');
}

function render_css_links($files = null) {
    $files = $files ?? [
        'assets/css/base.css',
        'assets/css/header.css',
        'assets/css/menu.css',
        'assets/css/home.css',
        'assets/css/chapitres.css',
        'assets/css/chapitre-video.css',
        'assets/css/chapter-info.css',
        'assets/css/immersion.css',
        'assets/css/video-modal.css',
        'assets/css/intro-page.css',
        'assets/css/startup-intro.css',
    ];

    foreach ($files as $file) {
        echo '  <link rel="stylesheet" href="' . asset($file) . '">' . PHP_EOL;
    }
}

function asset_version() {
    $paths = [
        'assets/css/base.css',
        'assets/css/header.css',
        'assets/css/menu.css',
        'assets/css/home.css',
        'assets/css/chapitres.css',
        'assets/css/chapitre-video.css',
        'assets/css/immersion.css',
        'assets/css/video-modal.css',
        'assets/css/intro-page.css',
        'assets/css/startup-intro.css',
        'assets/js/main.js',
        'assets/js/menu.js',
        'assets/js/page-transition.js',
        'assets/js/video-modal.js',
        'assets/js/language-switcher.js',
        'assets/js/startup-intro.js',
        'assets/js/intro-page.js',
        'assets/js/chapter-video.js',
        'assets/js/chapter-info.js',
        'assets/js/immersion.js',
        'assets/i18n/fr.json',
        'assets/i18n/ko.json',
        'assets/img/chapter1_thumbnail.png',
        'assets/img/chapter2_thumbnail.png',
    ];

    $version = 0;

    foreach ($paths as $path) {
        $fullPath = __DIR__ . '/../' . $path;

        if (file_exists($fullPath)) {
            $version = max($version, filemtime($fullPath));
        }
    }

    return (string) ($version ?: time());
}
