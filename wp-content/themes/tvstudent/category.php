<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="clear"></div>
<span class="singular">
    <article class="page type-page status-publish hentry">
        <header class="entry-header">
	        <h1 class="entry-title"><?php echo single_cat_title( '', false ); ?></h1>
		    <div class="post_title_breaker"></div>
        </header><!-- .entry-header -->
    </article>
</span>
<div style="margin-top:24px;">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
                <?php $i = 1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php setup_postdata($post);?>
			        <div class="list homepage_post <?php if ($i == 4){echo 'last';} ?>">
				        <?php
                            if (has_post_thumbnail()){
                                echo '<a href="'; echo get_permalink($post->ID); echo'">';the_post_thumbnail('thumbnail');echo '</a>';
                            }else{
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
					                <?php endforeach; 
                                }else{
                                    echo '<a href="<?php echo get_permalink($post->ID) ?>">'; get_video_thumbnail($post->ID); echo '</a>';
                                }
                           }
                            if($i>=4){$i = 1;}else{$i++;}
				        ?><br />
				        <div class="newest_post_title font-ubuntu"><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a></div>
				        <div class="font-ubuntu excerpt"><?php echo get_the_custom_excerpt();?></div>
				        <a href="<?php echo get_permalink($post->ID) ?>" class="read_more font-ubuntu">OPŠIRNIJE</a>
			        </div>
				<?php endwhile; ?>
			<?php endif; ?>
</div>
<?php get_footer(); ?>
