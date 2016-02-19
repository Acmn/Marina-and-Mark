<!-- start partials/tickets-main.php -->
<section class="single-page single-ticket">  
  <?php while (have_posts()) : the_post(); ?>
  <?php
  $args = array( 
  'post_type' => 'city-ticket',  
  'posts_per_page' => 1000,
  'order' => 'DESC',
  'orderby' => 'menu_order'
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <article <?php post_class('tickets') ?> id="post-<?php the_ID(); ?>">
    <div class="row">
      <div class="col-xs-12">     
        <h3 class="text-center"><?php the_title(); ?></h3>
      </div><!-- /.col-xs-12 -->
    </div><!-- /.row -->
    <?php if( have_rows('ticket_details') ): ?>
    <?php while( have_rows('ticket_details') ): the_row(); 
      // vars
      $date = get_sub_field('date');
      $month = get_sub_field('month');
      $info = get_sub_field('tickets_info');
      $theatre = get_sub_field('theatre');
      $link = get_sub_field('booking_link');
      $map = get_sub_field('map');
      ?>
      <div class="row ticket-details">
        <div class="col-xs-4 col-md-2 calendar">
          <p><?php echo $date; ?><span class="hidden-sm"><br /></span> <?php echo $month; ?></p>
        </div><!-- /.col-xs-4 col-md-2 calendar -->
        <div class="col-xs-8 col-md-6 info">
          <p class="theatre"><?php echo $theatre; ?> &middot; <a href="<?php echo $map; ?>" target="_blank">View Map</a></p>
          <p><?php echo $info; ?></p>
        </div><!-- /.col-xs-8 col-md-6 info -->
        <div class="col-xs-12 col-md-4">
          <div class="book">
          <?php if( $link ){ ?>
            <a href="<?php echo $link; ?>" target="_blank" class="btn buttonTL buttonBR gtm-ticket-button" data-gtm-event="#">BOOK NOW</a>
            <?php } else { ?>
              <p>Not on sale yet</p>
            <?php } ?>
          </div><!-- /.book -->
        </div><!-- /.col-xs-12 col-md-4 -->
      </div><!-- /.row -->    
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </article>
  <?php 
  endwhile;
  endif;   
  wp_reset_postdata();
  ?>  
  <?php endwhile; // End the loop ?>
  <?php // end section ?>
</section>
<!-- end partials/tickets-main.php -->