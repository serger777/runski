<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <?php if (!is_home()): ?>
            <a itemprop="name" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>

        <?php else : ?>
            <h1 itemprop="name"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

        <?php endif; ?>
        </br>
        <span class="sidebar__sidebar-item--desk" itemprop="description"><?php bloginfo('description'); ?></span>
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                ));

                foreach ($categories as $category) {
                    echo '<li class="category-list__item"> <a class="category-list__item__link" href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"),
                            $category->name) . '" ' . '>' . $category->name . '</a> <span> '. $category->count . '</span>  ';
                    echo '<ul class="category-list__inner">';

                    $parent_id = $category->term_id;
                    $sub_cats = get_categories(array(
                        'child_of' => $parent_id,
                        'hide_empty' => 0
                    ));
//                    if ($sub_cats) {
//                        foreach ($sub_cats as $cat) {
//                            echo '<li class="category-list__item"> <a class="category-list__item__link" href="' . get_category_link($cat->term_id) . '" title="' . sprintf(__("View all posts in %s"),
//                                    $cat->name) . '" ' . '>' . $cat->name . '</a> </li> ';
//                        }
//                    }
                    echo '</li></ul>';
                }
                ?>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>

        <div class="sidebar-item__content">
            <?
            $tags = get_tags();
            $i = 0;
            echo '<ul class="tags-list">';
            foreach ($tags as $tag) {
                $i++;
                echo '<li class="tags-list__item">
                    <a class="tags-list__item__link" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ' </a>
                    </li>';
                if ($i > 10) {
                    break;
                }

            }
            echo '</ul>';

            ?>
        </div>

    </div>
<!--    <div class="sidebar__sidebar-item">-->
<!--        <div class="sidebar-item__title">Новости месяца</div>-->
<!--        <ul class="category-list wp_calendar">-->
<!--            --><?php //get_calendar(); ?>
<!--        </ul>-->
<!--    </div>-->
    <div class="field">
        <? the_field('описание'); ?>
    </div>
<!--    <div class="search-form-wrap">-->
<!--        <form role="search" method="get" class="search-form" action="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--            <label>-->
<!--                <span class="screen-reader-text">--><?php //echo _x( '', 'label', 'loft' ); ?><!--</span>-->
<!--                <input type="search" class="search-form__input" placeholder="--><?php //echo esc_attr_x( 'Search &hellip;', 'placeholder', 'loft' ); ?><!--" value="--><?php //echo get_search_query(); ?><!--" name="s" />-->
<!--            </label>-->
<!--            <button type="submit" class="search-form__btn-search"><span class="screen-reader-text">--><?php //echo _x( '', 'submit button', 'loft' ); ?><!--</span><i class="icon icon-search"></i></button>-->
<!--        </form>-->
<!---->
<!--    </div>-->
</div>