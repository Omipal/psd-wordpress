<?php 
/**
 * The template for displaying all single posts
 */
get_header();
?>
<div class="post-content">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
    <div class="post-image">
        <?php the_post_thumbnail('home-featured'); ?>
    </div>
    <div class="post-title">
    <h1><?php the_title(); ?></h1>
    </div>
    <div class="post-meta">
    <strong>Author:</strong><?php the_author(); ?>
    </div>
    <div class="post-meta">
    <strong>Posted on:</strong><?php the_time(); ?>
    </div>
    <div class="post-discriotion">
    <p><?php the_content(); ?></p>
    </div>
       
     
   <?php    
    endwhile;
endif;
?>
    
   
  
    
</div>


<?php
get_footer();
?>