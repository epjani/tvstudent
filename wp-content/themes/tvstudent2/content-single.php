<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="post_title_breaker"></div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<div class="clear"></div>
	<div class="tags_block"><?php echo the_tags('<span class="font-ubuntu tags_lbl">Tagovi:</span> <ul class="tags"><li>', '</li><li>', '</li></ul>'); ?></div>
</article><!-- #post-<?php the_ID(); ?> -->
<div class="clear"></div>
<div class="similar_posts">

	<?php
		// TODO Similar posts
		//for use in the loop, list 5 post titles related to first tag on current post
		// $tags = wp_get_post_tags($post->ID);
		// if ($tags) {
		// 	echo 'Related Posts';
		// 	$first_tag = $tags[0]->term_id;			
		// 	$args=array(
		// 	'tag__in' => array($first_tag),
		// 	'post__not_in' => array($post->ID),
		// 	'posts_per_page'=>4,
		// 	'caller_get_posts'=>1
		// 	);
			
		// 	$my_query = new WP_Query($args);
			
		// 	if( $my_query->have_posts() ) {
		// 		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<!--			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> -->
		 		<?php
		// 		endwhile;
		// 	}
		// 	wp_reset_query();
		// }
	?>

</div>
