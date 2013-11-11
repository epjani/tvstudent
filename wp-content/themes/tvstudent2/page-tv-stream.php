<?php
/*
Template Name: TV Stream
*/
get_header(); ?>
<?php 
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
	    	get_template_part( 'content', get_post_format() ); 
	        wp_reset_postdata();
	    endwhile;
	endif;
?>

<?php get_footer(); ?>