
<!-- for single pages -->

<?php
get_header();
while(have_posts()){
      the_post();?>
      <!-- still in while loop but now html -->
     <!-- <h2><?php the_title(); ?></h2> -->
     <!-- <?php   the_post_thumbnail();?> -->

      <!-- <?php
      the_content(); ?> -->



<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
<!-- use id to find info about post or page -->
<!-- comes from address url get_the_ID() -->
  <?php

      if(wp_get_post_parent_id(get_the_ID())){?>
        <!-- // echo get_the_ID();
        // we give it a id and then it finds the parent for that id(post or page)

        // echo wp_get_post_parent_id(get_the_ID());

        // echo "I am a child page"; -->


        <!-- get_the_title() will allow you to put paremeters for another page vs the page you are on which is different from the_title -->


        <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to
        <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

      <?php }?>
   
    <!-- if currently on child page or on parent page
    wp_list_pages() outputs to screen and get_pages() just returns pages in memory so pass array of args

    if current page has children will return an array of children ids if doesnt have wont return anything but null or false or 0 which equals false -->
  <?php

      $testArray=get_pages(array(
        'child_of'=>get_the_ID()
      ));
    if(wp_get_post_parent_id(get_the_ID()) || $testArray) { ?>
    
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())); ?>"><?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?></a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="#">
          <?php 
        
        if(wp_get_post_parent_id(get_the_ID())){
          $findChildrenOf=wp_get_the_post_parent_id(get_the_ID());
        }
        else{
          $findChildrenOf=get_the_ID();
        }
        wp_list_pages(array(
          'title_li'=>NULL,
          'child_of' => $findChildrenOf
        ));?></a></li>
        <!-- if want in a certain order do like following -->
<!-- 
        wp_list_pages(array(
          'title_li'=>NULL,
          'child_of' => $findChildrenOf,
          'sort_column'=>'menu_order'
        ));?></a></li> -->
      </ul>
    </div>
      <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
  <?php }

get_footer();
