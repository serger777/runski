<?php

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
//add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);

//function custom_nav_menu_link_attributes($atts, $item, $args, $depth)
//{
//    if ($args->menu->slug == 'menus' && $item->ID == 1) {
//
//        $class = "button";
//
//        // Make sure not to overwrite any existing classes
//        $atts['class'] = (!empty($atts['class'])) ? $atts['class'] . ' ' . $class : $class;
//    }
//
//    return $atts;
//}
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

function wpbeginner_numeric_posts_nav()
{

    if (is_singular()) {
        return;
    }

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagenavi-post-wrap"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('%s' . "\n", get_previous_posts_link('<i class="icon icon-angle-double-left"></i>'));
    }

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' ' : '';

        printf('%s<a class="pagenavi-post__current" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(6, $links)) {
            echo '<a>…</a>';
        }
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' ' : '';
        printf('%s<a class="pagenavi-post__page" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($link)),
            $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<a>…</a>' . "\n";
        }

        $class = $paged == $max ? ' ' : '';
        printf('%s<a class="pagenavi-post__page" href="%s">%s</a>' . "\n", $class, esc_url(get_pagenum_link($max)),
            $max);
    }

    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('%s' . "\n", get_next_posts_link('<i class="icon icon-angle-double-right"></i>'));
    }

    echo '</ul></div>' . "\n";

}
// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');