<?php
/**
 * The footer for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Webmad
 * @since Webmad 1.0
 */
?>

</main>
<footer>
        <div class="content">
            <div class="row">
                <div class="col-4">
                    <?php dynamic_sidebar('footer-left'); ?>
                </div>
                <div class="col-4">
                    <?php dynamic_sidebar('footer-right'); ?>
                </div>
            </div>
            <hr>
            <div class="row footer-copyright-info">
                <div class="footer-left">
                    <span class="footer-copyright">© 2021. All Rights Reserved <a href="https://webmad.pl" alt="" title="">WebMad</a></span>
                </div>
                <div class="footer-right">
                    <ul class="social-icon">
                        <li class="social-item"><a href="https://www.facebook.com/WebMad-107075104268353/"><i class="facebook-square"></i></a></li>
                        <li class="social-item"><a href="https://www.linkedin.com/in/micha%C5%82-madera-001286171/"><i class="linkedin"></i></a></li>
                        <li class="social-item"><a href="https://github.com/michuwsh"><i class="github-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div id="goTop">
        <i class="arrow-up"></i> 
    </div>
    <?php wp_footer(); ?>
    </body>
    </html>