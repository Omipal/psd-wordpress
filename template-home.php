<?php 
/**
 * Template Name: Home Template
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

<div class="home-posts row flex-row ml-0 mr-0 mt-3">
    <div class="col-md-6">
        <div class="section-head"><h3>Latest from tecnology</h3></div>
        <div class="section-content">
        <?php 
        $args = array(
            'cat' => 5
        ); 
       $tech_posts = new WP_Query($args);
        if ( $tech_posts->have_posts() ) :
        while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>
    <?php    
        endwhile;
    endif; ?>
    <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="col-md-6">
    <div class="section-head"><h3>Latest from Social media</h3></div>
        <div class="section-content">
        <?php 
        $args = array(
            'cat' => 4
        ); 
       $tech_posts = new WP_Query($args);
        if ( $tech_posts->have_posts() ) :
        while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>
    <?php    
        endwhile;
    endif; ?>
    <?php wp_reset_postdata(); ?>
        </div>
    </div>


</div>
<div class="home-carousel">
    <div class="container">
        <div class="owl-carousel">
        <?php 
        $args = array(
            'post_type' => 'project',
            'post_per_page' => 10,
            'order' => 'ASC'
        ); 
       $tech_posts = new WP_Query($args);
        if ( $tech_posts->have_posts() ) :
        while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
        <div>
           <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?></a>
        </div>
    <?php    
        endwhile;
    endif; ?>
    <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>   
<div class="home-service">
    <div class="container">
<?php 
        $args = array(
            'post_type' => 'service',
            'post_per_page' => 3,
            'order' => 'ASC'
        ); 
       $tech_posts = new WP_Query($args);
        if ( $tech_posts->have_posts() ) :
        while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>
    <?php    
        endwhile;
    endif; ?>
    <?php wp_reset_postdata(); ?>
    </div>
</div>

<?php
get_footer();
?>