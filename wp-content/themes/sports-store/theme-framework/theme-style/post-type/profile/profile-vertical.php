<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.3
 * 
 * Profile Vertical Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!--  Start Profile Vertical Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	if (has_post_thumbnail()) {
		echo '<div class="cmsmasters_profile_img_wrap">';
			
			sports_store_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', false, false, false, false, false, false, false, false, true);
		
		echo '</div>';
	}
	
	
	echo '<div class="profile_inner">';
		
		sports_store_profile_heading(get_the_ID(), 'h2', $cmsmasters_profile_subtitle, 'h5');
		
		sports_store_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
		echo '<div class="cl"></div>';
		
		sports_store_profile_exc_cont();
		
	echo '</div>';
	?>
	</div>
</article>
<!--  Finish Profile Vertical Article  -->

