<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, calls the navigation, and everything up till <main>
 *
 * @package Marina and Mark
 */
?>
<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?>>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- ^^Required meta tags always come first^^ -->
	<!-- Site Title -->
	<title><?php bloginfo('name')?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Custom styles for this template enqueued via functions.php -->
  <!-- Font Codes
  ================================================== -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <link href='<?php bloginfo('stylesheet_directory'); ?>/build/mini-theme.css' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
  </head>
  <!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5ND4JN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5ND4JN');</script>
	<!-- End Google Tag Manager -->
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');
	fbq('init', '625791667501074');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=625791667501074&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
  <body>
  	<!-- Static navbar -->
    <?php get_template_part( 'partials/navigation', 'main' ); ?>
	  <?php if (is_front_page()) { ?>
			<header id="masthead" class="site-header container">
				<section>
					<h2 class="subheader"><?php echo get_bloginfo ( 'description' );  ?></h2>
					<div class="row site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/base/key-artwork.jpg" alt="Mark &amp; Marina" class="img-responsive center-block">
						</a>
					</div><!-- /.row .site-branding -->

					</section>
				</div><!-- /.row -->
			</header><!-- #masthead -->
		<?php 
	  	} else {
	  ?>
	  	<header id="masthead" class="site-header container">
				<section>
					<h2 class="subheader"><?php echo get_bloginfo ( 'description' );  ?></h2>
					<div class="row site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/base/key-artwork.jpg" alt="Mark &amp; Marina" class="img-responsive center-block">
						</a>
					</div><!-- /.row .site-branding -->
					</section>
				</div><!-- /.row -->
			</header><!-- #masthead -->
	  <?php 		
	  	}// end is front page    
	  ?> 