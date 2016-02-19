<?php
	//Enqueue Parent Theme Styles

	// Register custom navigation walker so Bootstrap Nav works with WP
	// Additional information can be found at https://github.com/twittem/wp-bootstrap-navwalker
  require_once('wp_bootstrap_navwalker.php');
  // Register the WP nav menu
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'Marina and Mark 2016' ), 
	    //^^Update 'bootstrap-start-base' with the appropriate theme name^^
	) );



	/**********************
	Add theme supports
	**********************/
	function starter_theme_support() {

	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'small-feature', 400, 247, true ); // Ratio 10:6.18
	add_image_size( 'medium-feature', 600, 371, true ); // Ratio 10:6.18
	add_image_size( 'square-feature', 600, 600, true ); // Ratio 1:1
	
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('gallery', 'link', 'image', 'video', 'audio'));
}
	//LOGIN PAGE
	function my_loginlogo() {
	  echo '<style type="text/css">
	    h1 a {
	      background-image: url(' . get_template_directory_uri() . '/login/logo.png) !important;
	    }
	  </style>';
	}
	add_action('login_head', 'my_loginlogo');

	function my_loginURL() {
	    return '/';
	}
	add_filter('login_headerurl', 'my_loginURL');

	function my_loginURLtext() {
	    return 'Blonde Poison 2016';
	}
	add_filter('login_headertitle', 'my_loginURLtext');

	function my_logincustomCSSfile() {
	    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login/login_styles.css');
	}
	add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

	//ACF OPTIONS
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page();
	}

?>
