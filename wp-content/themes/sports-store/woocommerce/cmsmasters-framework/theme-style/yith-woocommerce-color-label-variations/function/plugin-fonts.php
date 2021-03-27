<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Color and Label Variations Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_color_label_variations_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Color and Label Variations Font Styles ******************/
	
	table.variations tr td.label {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h6_font_google_font']) . $cmsmasters_option['sports-store' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h6_font_text_decoration'] . ";
	}
	
/***************** Finish Yith WooCommerce Color and Label Variations Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_yith_woocommerce_color_label_variations_fonts');

