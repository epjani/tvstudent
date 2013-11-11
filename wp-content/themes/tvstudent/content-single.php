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
    <div class="related_links">
        <span style="width:100%;text-align:center;display:block;">Povezano:</span>
    <?php related_links(); ?></div>
	<div class="clear"></div>
	<div class="tags_block"><?php echo the_tags('<span class="font-ubuntu tags_lbl">Tagovi:</span> <ul class="tags"><li>', '</li><li>', '</li></ul>'); ?></div>
</article><!-- #post-<?php the_ID(); ?> -->

<div class="clear"></div>

<div class="more_from_category">
    <?php global $post;
          $categories = get_the_category();
          $category = $categories[0];
    ?>
    <h1 class="entry-title">Više vijesti iz <?php echo('<a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>');?></h1>
	<div class="post_title_breaker"></div>
    <ul>
        <?php
              $posts = get_posts('numberposts=4&category='. $category->term_id);
              $i = 1;
              foreach($posts as $post) :
        ?>
                 <?php setup_postdata($post);?>
			<div class="list homepage_post <?php if ($i == 4){echo 'last';} ?>">
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
                  if($attachments){
                      foreach ( $attachments as $attachment_id => $attachment ) : ?>
                            <a href="<?php echo get_permalink($post->ID) ?>">
					            <img class="post_thumb" src="<?php echo reset(wp_get_attachment_image_src( $attachment_id, 'medium'));?>" width="202" height="164" />
                            </a>
					    <?php endforeach; if($i>=4){$i = 1;}else{$i++;}
                  }else{
                      echo '<a href="<?php echo get_permalink($post->ID) ?>">'; get_video_thumbnail($post->ID); echo '</a>';
                  }
				?><br />
				<div class="newest_post_title font-ubuntu"><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a></div>
				<div class="font-ubuntu excerpt"><?php echo get_the_custom_excerpt();?></div>
				<a href="<?php echo get_permalink($post->ID) ?>" class="read_more font-ubuntu">OPŠIRNIJE</a>
			</div>
             <?php endforeach; ?>                
</ul>
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
<div class="clear"></div>
</div>
