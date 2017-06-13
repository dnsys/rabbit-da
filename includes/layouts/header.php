<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport" />
    <meta property="fb:app_id" content="" />
    <meta property="og:type" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="Fast. Clever. Obsessed." />
    <meta property="og:url" content="" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:image" content="http://<?=$_SERVER['SERVER_NAME'];?>/build/images/og-image.png" />
    <title>Rabbit Digital Agency</title>
    <link rel="shortcut icon" type="image/png" href="/build/images/favicon.png"/>
    <link rel="stylesheet" href="/build/css/vendor.css">

    <?php
        $curTheme = $them->getCurrentTheme();
        switch ($curTheme){
            case Themes::THEME_LEGACY:
                echo '<link rel="stylesheet" href="/build/css/app-theme-legacy.css">';
                break;
            case Themes::THEME_SPRING:
                echo '<link rel="stylesheet" href="/build/css/app-theme-spring.css">';
                break;
            case Themes::THEME_CARROT:
                echo '<link rel="stylesheet" href="/build/css/app-theme-carrot.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="/build/css/application.css">';
                break;
        }
    ?>
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper" id="wrapper">
        <div class="header">
            <div class="header__inner">
                <div class="logo-wrap">
                    <a href="/">
                        <img src="/build/images/logo.png" alt="Rabbit Digital Agency" title="Rabbit Digital Agency"/>
                    </a>
                </div>
                <div class="lang-switch-wrap">
                    <?php include_once 'includes/lang_switch.php'?>
                </div>
                <div class="menu-wrap">
                    <div class="burger">
                        <div class="burger__line"></div>
                        <div class="burger__line"></div>
                        <div class="burger__line"></div>
                    </div>
                    <?php include_once 'includes/menu.php'?>
                </div>
            </div>
        </div>
        <!-- wrapper__content -->
        <div class="wrapper__content">
        <!-- start content -->