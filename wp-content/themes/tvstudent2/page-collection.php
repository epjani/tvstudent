<?php
/*
Template Name: Collection of category posts
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
<div style="float:left;margin-bottom:25px;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: endif; ?>

		<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
		<?php $i = 1; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php setup_postdata($post);?>
			<div class="list homepage_post <?php if ($i == 4){echo 'last';$i=1;} ?>">
				<?php
					$attachments = get_children( array(
					                'post_parent'    => get_the_ID(),
					                'post_type'      => 'attachment',
					                'numberposts'    => 1, // show all -1
					                'post_status'    => 'inherit',
					                'post_mime_type' => 'image',
					                'order'          => 'ASC',
					                'orderby'        => 'menu_order ASC'
					                ) );
					foreach ( $attachments as $attachment_id => $attachment ) : ?>
					    <img class="post_thumb" src="<?php echo reset(wp_get_attachment_image_src( $attachment_id, 'medium'));?>" width="202" height="164" />
					<?php endforeach; $i++;
				?><br />
				<div class="newest_post_title font-ubuntu"><?php the_title(); ?></div>
				<div class="font-ubuntu excerpt"><?php echo get_the_custom_excerpt();?></div>
				<a href="<?php echo get_permalink($post->ID) ?>" class="read_more font-ubuntu">OPŠIRNIJE</a>
			</div>
	<?php endwhile; else: endif; ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
