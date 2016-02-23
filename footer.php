<?php
/**
 * The template for displaying the footer.
 *
 * @package MAM
 */
?>

	<footer class="container site-footer">
		<div class="site-info row">
			<div class="col-xs-12">
				<h2 class="subheader"><?php echo get_bloginfo ( 'description' );  ?></h2>	
			</div>
			<div class="col-xs-12 col-sm-8">
				<p>All rights reserved &copy; <?php echo date('Y'); ?> Marina Prior and Mark Vincent</p>
			</div><!-- /.col-xs-12 .col-sm-8 -->
			<div class="col-xs-12 col-sm-4">
				<p class="footer-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>media">Media</a> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a></p>
				<p class="footer-right">Website by <a href="http://acmn.com.au" target="_blank">ACMN</a></p>
			</div>			<!-- /.col-xs-12 .col-sm-4 -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>
<!--[if lt IE 9 ]>
	<script src="<?php bloginfo('template_url'); ?>/build/REM-unit-polyfill/js/rem.min.js" type="text/javascript"></script>
<![endif]-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/build/production.min.js"></script>
</body>
</html>
