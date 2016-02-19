<!-- start partials/navigation-main.php -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container top-bar">
  	<h2 class="sr-only">Site Navigation</h2>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     	<a class="navbar-brand" href="<?php bloginfo('url')?>"><span class="sr-only"><?php bloginfo('name')?></span><img src="<?php bloginfo('stylesheet_directory'); ?>/img/base/nav-logo.png" alt=""></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <!-- Call in the WP Primary Menu -->
     	<?php // Primary navigation
          wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              //Process nav menu using our custom nav walker
              'walker'            => new wp_bootstrap_navwalker())
          );
          get_template_part( 'partials/social', 'icons' );
      ?>
    </div>
  </div><!-- /.navbar-header -->
</nav>
<!-- end partials/navigation-main.php -->