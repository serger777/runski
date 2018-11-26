<?php get_header(); ?>
<?
$prev = get_previous_post();
$next = get_next_post();
?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="article-title title-page">
                <?php if (have_posts()) : while (have_posts()) :
                the_post(); ?>
                <? the_title(); ?>
            </div>
            <div class="article-image"><img src="<?php the_post_thumbnail_url() ?>" title="<?php wp_title(); ?>" alt="<?php wp_title(); ?>"></div>
            <div class="article-info">
                <div class="post-date"><? the_date(); ?></div>
            </div>
            <div class="article-text">
                <? the_content(false); ?>
            </div>

            <? $meta_values = get_post_meta($post->ID, 'видео', true);


            if ($meta_values != null) {
                ?>
                <div class="k2_video">
                    <iframe width="100%" height="300px"
                            src="https://www.youtube.com/embed/<?= $meta_values ?>"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            <? } ?>


            <?php
            $file = (get_post_meta($post->ID, 'файл', false));
            $file = get_field('файл');
            ?>

            <? if ($file['url'] != null) { ?>
                <a class="link" download href="<?= $file['url'] ?>">Протоколы соровнований </a> <br>
            <? } ?>
            <?php
            $file2 = (get_post_meta($post->ID, 'файл2', false));
            $file2 = get_field('файл2');
            ?>
            <? if ($file2['url'] != null) { ?>
                <a class="link" download href="<?= $file2['url'] ?>">Протоклы соровнований </a>
            <? } ?>
            <p class="autor_title">
                Автор: <span><?= get_the_author_meta('first_name'); ?></span>
            </p>

            <?php endwhile; else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


            <div class="article-pagination">
                <? $get_prew = get_adjacent_post();
                $prev = get_previous_post();
                $next = get_next_post();
                if ($get_prew) { ?>
                    <div class="article-pagination__block pagination-prev-left">
                        <a href="<?= get_permalink($prev->ID) ?>" class="article-pagination__link">
                            <i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div   class="wrap-pagination-preview pagination-prev-left">
                            <a href="<?= get_permalink($prev->ID) ?>" class="preview-article__img">
                                <img  style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($prev->ID)); ?>')" class="preview-article__image">
                            </a>
                            <div class="preview-article__content">
                                <div class="preview-article__info">
                                    <a href="#" class="post-date"><?= $prev->post_date ?></a>
                                </div>
                                <div class="preview-article__text"><?= $prev->post_title ?></div>
                            </div>
                        </div>
                    </div>
                <? } ?>
                <? $get_next = get_adjacent_post(0, '', 0); ?>
                <? if ($get_next) { ?>

                    <div class="article-pagination__block pagination-prev-right">
                        <a href="<?= get_permalink($get_next->ID) ?>" class="article-pagination__link">Сдедующая статья
                            <i class="icon icon-angle-double-right"></i>
                        </a>
                        <div class="wrap-pagination-preview pagination-prev-right">

                                <a href="<?= get_permalink($get_next->ID) ?>"  class="preview-article__img">
                                    <img  style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($next->ID)); ?>')" class="preview-article__image">
                                </a>

                           <div class="preview-article__content">
                                <div class="preview-article__info">
                                    <a href="#"  class="post-date"><?= $get_next->post_date ?></a>
                                </div>
                                <div class="preview-article__text"><?= $get_next->post_title ?></div>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>

        <!-- sidebar-->
        <!-- sidebar-->
        <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>

