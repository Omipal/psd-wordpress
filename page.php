<?php 
/**
 * The template for displaying all single pages
 */
get_header();
?>
<div class="page-custom-header">
<img src="<?php header_image(); ?>" alt="" class="img-fluid"/>
</div>
<div class="flex-row ml-0 mr-0 mt-3">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
       <h1><?php the_title(); ?></h1>
       <p><?php the_content(); ?></p>
   <?php    
    endwhile;
endif;
?>
</div>


<?php
get_footer();
?>