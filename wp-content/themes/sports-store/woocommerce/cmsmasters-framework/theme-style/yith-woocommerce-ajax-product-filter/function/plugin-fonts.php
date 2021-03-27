<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Product Filter Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_ajax_product_filter_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Ajax Product Filter Font Styles ******************/
	
	.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li:before,
	.yith-woocommerce-ajax-product-filter ul li,
	.yith-woocommerce-ajax-product-filter ul li a {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_content_font_google_font']) . $cmsmasters_option['sports-store' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_content_font_font_style'] . ";
	}
	
	.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li:before,
	.yith-woocommerce-ajax-product-filter ul li,
	.yith-woocommerce-ajax-product-filter ul li a {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_content_font_font_size'] + 1) . "px;
	}
	
/***************** Finish Yith WooCommerce Ajax Product Filter Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_yith_woocommerce_ajax_product_filter_fonts');

