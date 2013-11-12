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
		<a href="http://day.televizijastudent.com" title="Different approach to youth" target="_blank"><div class="banner font-ubuntu day"></div></a>
		<a href="http://www.fpzg.unizg.hr" title="Fakultet političkih znanosti" target="_blank" ><div class="banner font-ubuntu fpzg"></div></a>
        <a href="http://www.radiostudent.hr" title="Radio Student" target="_blank"><div class="banner last font-ubuntu radiostudent"></div></a>
		<div style="clear:both;"></div>
		<div class="undefined_footer">
            <div class="social_icons">
                <a href="https://twitter.com/tvStudenthr" title="Twitter" target="_blank" class="twitter"></a>
                <a href="https://www.facebook.com/TelevizijaStudent" title="Facebook" target="_blank" class="fb"></a>
                <a href="#" title="Instagram" target="_blank" class="instagram"></a>
                <a href="http://vimeo.com/tvstudent" title="Vimeo" target="_blank" class="vimeo"></a>
                <a href="#" title="Youtube" target="_blank" class="yt"></a>
            </div>
        </div>
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
        
        if($('.related-links-list').length <= 0){
            $('.singular .entry-content, .singular footer.entry-meta, .singular #comments-title').css('width', '100%');
            $('.related_links').hide();
        }
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