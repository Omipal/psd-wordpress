<?php 
/**
 * Template Name: About Template
 */
get_header();
?>

<div class="page-custom-header">
    <div class="container">
    <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
<img src="<?php echo $img_url ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
    </div>

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