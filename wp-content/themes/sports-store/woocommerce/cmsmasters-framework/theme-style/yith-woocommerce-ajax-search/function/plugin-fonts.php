<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_ajax_search_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Ajax Search Font Styles ******************/
	
	/* Start Content Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_content_font_google_font']) . $cmsmasters_option['sports-store' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_content_font_font_style'] . ";
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_excerpt {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_content_font_font_size'] - 1) . "px;
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_categories,
	.autocomplete-suggestions .autocomplete-suggestion del {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H5 Font */
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content ins,
	.woocommerce .autocomplete-suggestion .title,
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content > span.amount {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h5_font_google_font']) . $cmsmasters_option['sports-store' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h5_font_text_decoration'] . ";
	}
	
	.woocommerce .autocomplete-suggestion .title {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_line_height'] - 6) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content > span.amount {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h6_font_google_font']) . $cmsmasters_option['sports-store' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Text Fields Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_input_font_google_font']) . $cmsmasters_option['sports-store' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
/***************** Finish Yith WooCommerce Ajax Search Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_yith_woocommerce_ajax_search_fonts');

