<?php
$available_langs = ['fr', 'ko'];

// La langue initiale vient du cookie uniquement.
// Le changement instantané est géré côté JS avec les mêmes fichiers JSON.
$lang = $_COOKIE['lang'] ?? 'fr';

if (!in_array($lang, $available_langs, true)) {
    $lang = 'fr';
}

$translationPath = __DIR__ . "/../assets/i18n/$lang.json";

if (!file_exists($translationPath)) {
    $translationPath = __DIR__ . "/../assets/i18n/fr.json";
    $lang = 'fr';
}

$translations = json_decode(file_get_contents($translationPath), true);

if (!is_array($translations)) {
    $translations = [];
}

function t($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
