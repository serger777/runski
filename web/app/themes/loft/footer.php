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
            <a target="_blank"  href="https://www.facebook.com/runiski" class="social_link"><span class="icon-facebook"></span></a>
            <a  target="_blank" href="https://vk.com/id195631390" class="social_link"><span class="icon-vk"></span></a>
            <a target="_blank"  href="https://www.instagram.com/run_ski.ru/" class="social_link"><span class="icon-insta"></span></a>

            <div class="copyright-text">&copy;&nbsp;2012-2018 <a href="http://run-ski.ru/" class="copyright-text__link"><span>RS</span></a> </div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/_js/main.js"></script>


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