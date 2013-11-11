<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
		<div id="highlighted_news" >
			<?php 
				$idObj = get_category_by_slug('highlighted'); 
				$catid = $idObj->term_id;
				$args=array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5, 'category' =>	$catid );
				$postlists = get_posts($args);
				$i = 0;
				foreach ($postlists as $post) : 
					$attachments = get_children( array( 'post_parent' => get_the_ID(), 'post_type' => 'attachment', 'numberposts' => 1, 'post_status' => 'inherit', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ASC'));
					foreach ( $attachments as $attachment_id => $attachment ) : ?>
					    <img id="hghimg<?php echo $i;?>" class="highlight_image <?php if($i == 0){echo 'active';}?>" src="<?php echo reset(wp_get_attachment_image_src( $attachment_id, 'full'));?>" width="600" height="246" />
					    <div id="hghttl<?php echo $i;?>" class="highlight_title <?php if($i == 0){echo 'active';}?>"><?php echo get_the_title(); ?></div>
					<?php endforeach;
					$i++;
				endforeach;				
			?>
			<div class="highlight_anchors" >
				<?php for ($count=0; $count < $i; $count++) : ?>
					<a id="hghanc<?php echo $count; ?>" href="#higlighted_news" onclick="change_highlighted_news(<?php echo $count; ?>);" class="highlight_anchor <?php if($count == 0){echo "active";}?>"></a>
				<?php endfor; ?>
			</div>		
		</div>
		<div id="special_sections">
			<a href="#" class="special_section" style="margin-top:0px;">
				<img class="thumb" src="<?php echo get_template_directory_uri();?>/images/video_dana.jpg" />
				<div class="title font-ubuntu" style="margin-top:10px;">VIDEO<br />DANA</div>
			</a>
			<div class="clear"></div>
			<a href="#" class="special_section">
				<img class="thumb" src="<?php echo get_template_directory_uri();?>/images/vijesti_za_normalne.jpg" />
				<div class="title font-ubuntu" >VIJESTI ZA<br />NORMALNE<br />LJUDE</div>
			</a>
			<div class="clear"></div>
			<a href="#" class="special_section">
				<img class="thumb" src="<?php echo get_template_directory_uri();?>/images/spot_dana.jpg" />
				<div class="title font-ubuntu" style="margin-top:10px;">SPOT<br />DANA</div>
			</a>
			<div class="clear"></div>
			<a href="<?php get_page_link_by_slug('tv-stream');?>" class="special_section">
				<img class="thumb" src="<?php echo get_template_directory_uri();?>/images/live_stream.jpg" />
				<div class="title font-ubuntu" style="margin-top:10px;">LIVE<br />STREAM</div>
			</a>
		</div>
		<header id="branding" role="banner">			
			<nav id="access" role="navigation" class="font-ubuntu">
				<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
			</nav><!-- #access -->
		</header><!-- #branding -->
		<div id="primary">
			<div id="content" role="main">
				<!-- This lists newest 4 posts on homepage -->
				<div class="newest_posts">
					<?php
						$args = array( 'posts_per_page' => 4, 'order'=> 'DESC', 'orderby' => 'post_date' );
						$postslist = get_posts( $args );
						$i = 0;
						foreach ($postslist as $post) :
							$i++;
							setup_postdata($post);?>
							<div class="homepage_post <?php if ($i == 4){echo 'last';} ?>">
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
									<?php endforeach;
								?><br />
								<div class="newest_post_title font-ubuntu"><?php the_title(); ?></div>
								<div class="font-ubuntu excerpt"><?php echo get_the_custom_excerpt();?></div>
								<a href="<?php echo get_permalink($post->ID) ?>" class="read_more font-ubuntu">OPŠIRNIJE</a>
							</div>						
						<?php endforeach;wp_reset_postdata();
					?>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
		<div style="clear:both;"></div>
<?php get_footer(); ?>