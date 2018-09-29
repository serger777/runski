<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turistick
 */

?>
<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <ul class="b-menu__list">
                    <?

                    wp_nav_menu(array(
                        'menu' => 'header_menu',
                        'menu_class' => 'menu2',
                    ));
                    ?>


            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">run-ski<a href="#" class="copyright-text__link"> 2012-2018</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>