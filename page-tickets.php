<?php get_header(); ?>
<!-- start page-tickets.php -->
	<main id="primary" class="container">
		<?php	get_template_part( 'partials/tickets', 'main' ); ?>
		<?php get_template_part( 'partials/groups', 'home' ); ?>
		<?php get_template_part( 'partials/subscribe', 'home' ); ?>
	</main><!-- /.container .content-area -->
<!-- end page-tickets.php -->
<?php get_footer(); ?>