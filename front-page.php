<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Webmad
 * @since Webmad 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/front-page/top' ); ?>

<?php get_template_part( 'template-parts/front-page/offer' ); ?>

<?php get_template_part( 'template-parts/front-page/about-us' ); ?>

<?php get_template_part( 'template-parts/front-page/portfolio' ); ?>

<?php get_template_part( 'template-parts/front-page/contact' ); ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?> 

<?php get_footer(); ?>
