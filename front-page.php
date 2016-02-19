<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<!-- start front-page.php -->
	<main id="primary" class="container-fluid">
		<?php	get_template_part( 'partials/tickets', 'main' ); ?>
		<?php get_template_part( 'partials/groups', 'home' ); ?>
		<?php get_template_part( 'partials/subscribe', 'home' ); ?>
		<?php get_template_part( 'partials/about', 'home' ); ?>
	</main><!-- /.container .content-area -->


<!-- end front-page.php -->
<?php get_footer(); ?>
