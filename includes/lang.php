<?php
// langues disponibles
$available_langs = ['fr', 'ko'];

// récupération langue (URL > cookie > défaut)
$lang = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'fr';

// sécurité
if (!in_array($lang, $available_langs)) {
    $lang = 'fr';
}

// sauvegarde cookie
setcookie('lang', $lang, time() + (86400 * 30), "/");


// chargement des traductions
$translations = include __DIR__ . "/../lang/$lang.php";

// fonction helper
function t($key) {
    global $translations;
    return $translations[$key] ?? $key;
}

