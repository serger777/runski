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
                         <?

                    wp_nav_menu(array(
                        'menu' => 'header_menu',
                        'menu_class' => 'menu2',
                    ));
                    ?>

        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">&copy;&nbsp;2012-2018<a href="#" class="copyright-text__link"> run-ski.ru</a></div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>


<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter18343771 = new Ya.Metrika({
                    id:18343771,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/18343771" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>