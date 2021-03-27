<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.3
 * 
 * Quote Slider Center Template
 * Created by CMSMasters
 * 
 */


?>
<!--  Start Quote Slider Article  -->
<?php
echo '<article class="cmsmasters_quote_inner">';
 
	if ($quote_image != '') {
		echo '<figure class="cmsmasters_quote_image">' . 
			wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-small-thumb') . 
		'</figure>';
	} else {
		echo '<div class="cmsmasters_quote_placeholder"></div>';
	}
	
	
	echo cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
		do_shortcode(wpautop(wp_kses(stripslashes($quote_content), 'post'))) . 
	'</div>');
	
	
	if ($quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
		echo '<header class="cmsmasters_quote_header">' . 
			'<h5 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h5>';
			
			if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
				echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
					
					($quote_subtitle != '' ? '<span class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</span>' : '');
					
					
					if ($quote_website != '' || $quote_link != '') {
						echo '<span class="cmsmasters_quote_site">' . 
							($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
							
							($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
							
							($quote_link != '' ? '</a>' : '') . 
						'</span>';
					}
					
				echo '</div>';
			}
			
		echo '</header>';
	}
?>
</article>
<!--  Finish Quote Slider Article  -->

