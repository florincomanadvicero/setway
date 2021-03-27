<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.3
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && sports_store_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!--  Start Posts Slider Post Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		sports_store_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);
		
		
		if ($date || $likes || $comments) {
			echo '<div class="cmsmasters_slider_post_info entry-meta">';
			
				$date ? sports_store_get_slider_post_date('post') : '';
			
				if ($likes || $comments) {
					echo '<div class="cmsmasters_slider_post_cont_info">';
						
						$likes ? sports_store_slider_post_like('post') : '';
						
						$comments ? sports_store_get_slider_post_comments('post') : '';
						
					echo '</div>';
				}
				
			echo '</div>';
		}
		
		
		$title ? sports_store_slider_post_heading(get_the_ID(), 'post', 'h5') : '';
		
		$excerpt ? sports_store_slider_post_exc_cont('post') : '';
		
		
		if ($more || $author || $categories) {
			echo '<footer class="cmsmasters_slider_post_footer">';
				
				$more ? sports_store_slider_post_more(get_the_ID()) : '';
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_slider_post_inner entry-meta">';
						
						$author ? sports_store_get_slider_post_author('post') : '';
						
						$categories ? sports_store_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
						
					echo '</div>';
				}
				
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--  Finish Posts Slider Post Article  -->

