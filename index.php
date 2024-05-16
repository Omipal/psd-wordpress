<?php 
/**
 * The main template file
 * 
 */
get_header();
?>
<div class="home-main">

    <div class="container">
    <div class="custom-header">
        <img src="<?php header_image(); ?>" alt="" class="img-fluid"/>
        
    </div>
   <div class="row">
    <div class="home-posts col-lg-8 col-md-8 col-sm-8 col">
    
        <?php get_template_part( 'template-parts/homeFeatured'); ?>
          
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
            <article class="home-post">
                <div class="post-header">
                    <div class="post-thumbnail row ml-0 mr-0">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-featured'); ?></a>
                    </div>
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                </div>
                <div class="post-description">
                    <?php the_excerpt(); ?>
                </div>
                <div class="post-footer flex items-center gap-2 py-4">
                    <div class="post-meta">
                        <strong>Author:</strong><?php the_author(); ?>
                    </div>
                    <div class="post-meta">
                        <strong>Posted on:</strong><?php the_time(); ?>
                    </div>
                </div>
            </article>
        <?php    
            endwhile;
        endif; ?>
        <div class="pagination flex items-center gap-3">
        <?php echo paginate_links(); ?>
        </div>

    </div>
        <div class="home-sidebar col-lg-4 col-md-4 col-sm-4 col">
            <?php get_sidebar(); ?>
        </div>
    </div>
    </div>
</div>

<?php

get_footer();
?>