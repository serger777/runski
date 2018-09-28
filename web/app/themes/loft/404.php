<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <h1 class="page-title"><?php _e( 'Страницы не существует', 'twentythirteen' ); ?></h1>
                <h2><?php _e( 'возможно она была переименована', '' ); ?></h2>
                <p><?php _e( 'воспользуйтесь поиском', '' ); ?></p>

                <?php get_search_form(); ?>


            </div>
            <!-- sidebar-->
            <?php get_sidebar(); ?>
        </div>
    </div>









<?php get_footer(); ?>