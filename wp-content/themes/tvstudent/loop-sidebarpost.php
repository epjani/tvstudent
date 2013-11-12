<div class="sidebar_post">
	<?php
        if (has_post_thumbnail()){
            echo '<a href="'; echo get_permalink($post->ID); echo'" class="sidebar-thumb">';the_post_thumbnail('thumbnail');echo '</a>';
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
            if ($attachments){
		        foreach ( $attachments as $attachment_id => $attachment ) : ?>
                    <a href="<?php echo get_permalink($post->ID) ?>" class="sidebar-thumb">
		                <img class="post_thumb" src="<?php echo reset(wp_get_attachment_image_src( $attachment_id, 'medium'));?>" width="202" height="164" />
                    </a>
		        <?php endforeach;
            }else{
                echo '<a href="<?php echo get_permalink($post->ID) ?>" class="sidebar-thumb">'; get_video_thumbnail($post->ID); echo '</a>';
            }
       }
	?>
	<div class="newest_post_title font-ubuntu">
		<a href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
		<div class="newest_post_date font-ubuntu"><?php the_date(); ?></div>
	</div>
	
</div>
<div class="clear"></div>