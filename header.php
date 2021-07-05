<?php
/**
 * The header for our theme
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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo get_bloginfo('name'); ?> </title>
	<?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <!-- Header site-->
    <header id="top">
        <div class="header content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <nav class="main">
                <?php webmad_custom_menu('primary'); ?>
            </nav>
            <button class="hamburger">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <ul class="social-icon">
                <li class="social-item"><a href="https://www.facebook.com/WebMad-107075104268353/"><i class="facebook-square"></i></a></li>
                <li class="social-item"><a href="https://www.linkedin.com/in/micha%C5%82-madera-001286171/"><i class="linkedin"></i></a></li>
                <li class="social-item"><a href="https://github.com/michuwsh"><i class="github-square"></i></a></li>
            </ul>
        </div>
    </header>
    <!-- Header site-->
    <main>

