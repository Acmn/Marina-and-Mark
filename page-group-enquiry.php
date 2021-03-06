<?php get_header(); ?>
<!-- start page-group-enquiry.php -->
	<main id="primary" class="container">
	<?php while (have_posts()) : the_post(); ?>
    <div class="row groups">
      <article id="post-<?php the_ID(); ?>" class="col-xs-12">  
        <div class="entry-content">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->
    </div><!-- /.row -->
	<?php endwhile; // End the loop ?>
	</main><!-- /.container .content-area -->
<!-- end page-group-enquiry.php -->
<?php get_footer(); ?>