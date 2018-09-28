<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= wp_title() ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/main.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/media.css">
    <?= wp_head() ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/" class="link">run-ski.ru</a></div>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-list">
                        <?

                        wp_nav_menu(array(
                            'menu' => 'header_menu',
                            'menu_class' => 'menu',
                        ));
                        ?>
                    </ul>

                </nav>
            </div>
        </div>

    </header>
    <!-- header_end-->