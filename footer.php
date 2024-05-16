<?php 
/**
 * The template for displaying the footer
 * 
 */
?>
<footer class="site-footer">

    <div class="footer-widgets container">
        <div class="row">
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col">
        <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div class="widget-col col-lg-4 col-md-4 col-sm-4 col">
        <?php dynamic_sidebar('footer-3'); ?>
        </div>
        </div>
    </div>
</footer>
</div><!--#closing of main container-->
</body>
<?php wp_footer(); ?>
</html>