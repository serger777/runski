<?php get_header(); ?>


<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page">
                <?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
                <? the_title(); ?>
            </div>


            <div class="article-text">
                <? the_content(); ?>
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div>

        <!-- sidebar-->
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>

