<!-- for single posts -->

<?php
get_header();
while(have_posts()){
      the_post();?>
      <!-- still in while loop but now html -->
     <h2><?php the_title(); ?></h2>

      <?php
      the_content(); ?>

  <?php }

get_footer();
