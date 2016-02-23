<?php get_header(); ?>
<!-- start page-mark-vincent.php -->
	<main id="primary" class="container">
	<?php while (have_posts()) : the_post(); ?>
    <div class="row">
      <article id="post-<?php the_ID(); ?>" class="col-xs-12 col-md-8 col-md-offset-2 cast">
      	<h1 class="entry-title"><?php the_title(); ?></h1>    
        <div class="entry-content">
        	<figure>
					  <?php the_post_thumbnail(); ?>
					</figure>
          <?php the_content(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->
    </div><!-- /.row -->
	<?php endwhile; // End the loop ?>
	</main><!-- /.container .content-area -->
	<?php get_template_part( 'partials/subscribe', 'home' ); ?>
<!-- end page-mark-vincent.php -->
<?php get_footer(); ?>