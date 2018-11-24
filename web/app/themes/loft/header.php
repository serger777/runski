<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= wp_title() ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/vendor/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/main.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/media.css">
    <link href="https://unpkg.com/ionicons@4.4.7/dist/css/ionicons.min.css" rel="stylesheet">

    <?= wp_head() ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header" id="header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a title="бег, лыжи, триатлон" href="/" class="link"><logo>RS</logo></a></div>
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
        <div class="mobile-header ">
                <div class="mobile-header__wrap">

                    <div class="mobile-header__wrap-logo">
                        <a  title="бег, лыжи, триатлон" href="/" class="mobile-header__wrap-logo--link"><logo>RS</logo></a>
                    </div>
                    <div class="mobile-header__wrap-burger">
                        <a @click.prevent="show = !show, hide = !hide" href="" class="mobile-header__wrap-burger--link ">
                            <i v-show="hide" class="icon ion-md-menu"></i>
                            <i v-show="show" class="icon ion-ios-close"></i>
                        </a>
                    </div>

                </div>

                <transition name="slide">
                    <nav v-show="show" class="mobile_nav">
                        <ul class="mobile_nav__list">
                            <?

                            wp_nav_menu(array(
                                'menu' => 'header_menu',
                                'menu_class' => 'menu',
                            ));
                            ?>
                        </ul>

                    </nav>
                </transition>


        </div>

    </header>
    <!-- header_end-->