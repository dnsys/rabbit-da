<?php

if(isset($_GET['theme']))
{
    require_once 'Themes.php';
    $them = new Themes();
    $newTheme = $_GET['theme'];
    $them->changeTheme($newTheme);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();