<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div style="background-color:#7cd3da;width:727px;font-size:28px;color:#fff;font-weight:bold;text-align:center;float:left;padding-top:20px;padding-bottom:20px;margin-right:14px;" class="font-ubuntu">VELIKI BANER</div>
		<div style="background-color:#7cd3da;width:219px;font-size:28px;color:#fff;font-weight:bold;text-align:center;float:left;padding-top:20px;padding-bottom:20px;" class="font-ubuntu">MALI BANER</div>
		<div style="clear:both;"></div>
		<div class="undefined_footer"></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	__current_highlight_index = 0;
	__timeout = null;
	__total_highlights = null;
	$(document).ready(function(){
		__current_highlight_index = 0;		
		change_highlighted_news(0);
		__total_highlights = $('.highlight_anchor').size();
	});

	function change_highlighted_news(index){
		clearTimeout(__timeout);		
		$("#hghimg" + __current_highlight_index).removeClass('active');
		$("#hghttl" + __current_highlight_index).removeClass('active');
		$("#hghanc" + __current_highlight_index).removeClass('active');
		if(index >= __total_highlights){
			__current_highlight_index = 0;
		}else{
			__current_highlight_index = index;
		}
		$("#hghimg" + __current_highlight_index).addClass('active');
		$("#hghttl" + __current_highlight_index).addClass('active');
		$("#hghanc" + __current_highlight_index).addClass('active');
		__timeout = setTimeout(function(){
			change_highlighted_news(__current_highlight_index+1);
		},7000);
	}
</script>
</body>
</html>