<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Zoom Magnifier Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_zoom_magnifier_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Zoom Magnifier Font Styles ******************/
	
	
	
/***************** Finish Yith WooCommerce Zoom Magnifier Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_yith_woocommerce_zoom_magnifier_fonts');

