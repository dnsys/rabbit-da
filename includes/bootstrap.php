<?php

session_start();

if(isset($_GET['change-lang'])){
    $_SESSION['lang'] = $_GET['change-lang'];
    $previousUrl = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousUrl);
}

require_once 'Helpers.php';
require_once 'DetectLang.php';
require_once 'Navigation.php';
require_once 'Themes.php';
require_once 'db.php';

/** для локализации */
$lang = new DetectLang();
$lang_prefix = $lang->lang_prefix;

/** для навигации **/
$nav = new Navigation();

/** для разных тем **/
$them = new Themes();