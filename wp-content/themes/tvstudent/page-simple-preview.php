<?php
/*
Template Name: Simple page preview
 */
get_header(); ?>
<?php 
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'content', get_post_format() ); 
        wp_reset_postdata();
    endwhile;
endif;
?>
<div class="clear"></div>
<?php get_footer(); ?>
