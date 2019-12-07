
    <div class="container">
    <?php
   
get_header();
  while(have_posts()){
      the_post();?>
      <!-- still in while loop but now html -->
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php the_content(); ?>
      <hr>
  <?php }

// if word begins with the like the_content() or the_ID() dont echo usually but if begins with get like get_the_ID() you have to echo it because wp wont echo this info
// codex.wordpress.org 
// developer.wordpress.org


get_footer();
    ?>

  </div>