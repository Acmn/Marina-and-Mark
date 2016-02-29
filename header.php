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
  <meta name="keywords" content="marina prior & mark vincent,songs from the heart,marina prior,marina prior divorce,marina prior age,marina prior peter lowrey,marina prior plastic surgery,marina prior tour dates,marina prior facelift,marina prior children,marina prior husband,marina prior both sides now,marina prior family,marina prior phantom of the opera,marina prior grant piro,marina prior carols by candlelight,marina prior i dreamed a dream,how old is marina prior,prior lake marina,marina prior songs,marina prior biography,Leading Lady,aspects of Andrew Lloyd Webber,Somewhere – The Songs of Sondheim and Bernstein,Both Sides Now,Candlelight Christmas,best of marina prior,mark vincent,mark vincent cd,vincent mark,mark vincent singer,mark vincent album,mark vincent concert,mark vincent albums,mark vincent songs,mark vincent halo,mark vincent opera,mark vincent opera singer,mark vincent tour dates,mark vincent tenor,mark vincent best so far,paul and mark vincent,mark vincent girlfriend,mark vincent nessun dorma,mark vincent songs from the heart,mark vincent construction,mark vincent morocco,mark vincent ballincollig,mark vincent time to say goodbye,mark vincent hallelujah,paul vincent and mark vincent,mark vincent flanagan,laurie marks vincent,mark vincent audition,mark vincent this is the moment,mark vincent basketball,mark vincent and paul vincent,how old is mark vincent,mark vincent gay,professor vincent marks,mark vincent actor,mark vincent wiki,australias got talent mark vincent,My Dream – Mio Visione,Compass,The Great Tenor Songbook,The Quartet Sessions,best of mark vincent,hate you then I love you,amigos para seimpre,all I ask of you">
	<meta name="description" content="For one night only, the iconic Marina Prior will join Australia's No.1 tenor Mark Vincent in a magical performance of soaring opera arias, musical theatre showstoppers and well-loved popular songs.">
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
  <!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5ND4JN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5ND4JN');</script>
	<!-- End Google Tag Manager -->
  	<!-- Static navbar -->
    <?php get_template_part( 'partials/navigation', 'main' ); ?>
	  <?php if (is_front_page()) { ?>
			<header id="masthead" class="site-header container">
				<section>
					<div class="row site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/base/key-artwork.jpg" alt="Mark &amp; Marina" class="img-responsive center-block">
						</a>
					</div><!-- /.row .site-branding -->
				</section>
			</header><!-- #masthead -->
		<?php 
	  	} else {
	  ?>
	  	<header id="masthead" class="site-header container">
				<section>
					<div class="row site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/base/key-artwork.jpg" alt="Mark &amp; Marina" class="img-responsive center-block">
						</a>
					</div><!-- /.row .site-branding -->
				</section>
			</header><!-- #masthead -->
	  <?php 		
	  	}// end is front page    
	  ?> 