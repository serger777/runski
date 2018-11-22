<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= wp_title() ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/libs.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/main.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/_css/media.css">
    <?= wp_head() ?>
</head>
<body>
<div class="wrapper">
    <header class="main-header" id="header">
        <div class="top-header">
            <div class="top-header__wrap">
                <div class="logotype-block">
                    <div class="logo-wrap"><a href="/" class="link">RS</a></div>
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
        <div class="mobile-header " v-bind:class="active" >
            <div class="container">
                <div class="mobile-header__wrap">

                    <div class="mobile-header__wrap-logo">
                        <a href="/" class="mobile-header__wrap-logo--link"><span>RS</span></a>
                    </div>
                    <div class="mobile-header__wrap-burger" >
                        <a v-on:click="makeActive('active')" href="" v-on:click.prevent class="mobile-header__wrap-burger--link js-menu">
                        </a>
                    </div>
                    <a v-on:click="makeActive('hide')" href="" v-on:click.prevent class="mobile-header__wrap-burger--link js-menu">
                    </a>
                </div>
                <nav class="mobile_nav"  >
                    <ul class="mobile_nav__list">
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