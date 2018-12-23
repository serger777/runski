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
<footer class="main-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="content-footer">
        <div class="bottom-menu">


            <ul id="" class="menu2">
                <li itemscope itemtype="http://schema.org/SiteNavigationElement" class="">
                    <a itemprop="url" href="http://run-ski.ru/category/word-ski/">
                        <span itemprop="name">Лыжный спорт</span>
                        </a>
                </li>
                <li itemscope itemtype="http://schema.org/SiteNavigationElement" class="">
                    <a itemprop="url"  href="http://run-ski.ru/category/word-track/">
                       <span itemprop="name">Легкая атлетика</span>
                    </a>
                </li>
                <li itemscope itemtype="http://schema.org/SiteNavigationElement" class="">
                    <a itemprop="url"  href="http://run-ski.ru/category/cycling/">
                        <span itemprop="name">Велоспорт</span>
                    </a>
                </li>
                <li itemscope itemtype="http://schema.org/SiteNavigationElement" class="">
                    <a itemprop="url"  href="http://run-ski.ru/category/video/">
                       <span itemprop="name">Видео</span>
                    </a>
                </li>
                <li itemscope itemtype="http://schema.org/SiteNavigationElement" class="">
                    <a itemprop="url"  href="http://run-ski.ru/category/doping/">
                       <span itemprop="name">Допинг</span>
                    </a>
                </li>
            </ul>


        </div>
        <div class="copyright-wrap">
            <a target="_blank" href="https://www.facebook.com/runskiru" class="social_link"><i
                        class="icon ion-logo-facebook"></i></a>
            <a target="_blank" href="https://vk.com/id195631390" class="social_link"><i
                        class="icon ion-logo-vk"></i></a>
            <a target="_blank" href="https://www.instagram.com/run_ski.ru/" class="social_link"><i
                        class="icon ion-logo-instagram"></i></a>

            <div class="copyright-text">&copy;&nbsp;2012-2018 <a href="http://run-ski.ru/" class="copyright-text__link"><span>RS</span></a>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.js"></script>
<script src="<?php bloginfo("template_directory"); ?>/_js/main.js"></script>


<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter18343771 = new Ya.Metrika({
                    id: 18343771,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/18343771" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>