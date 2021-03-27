<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Zoom Magnifier Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Zoom Magnifier Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Zoom Magnifier Plugin */
function sports_store_yith_woocommerce_zoom_magnifier_register_styles_scripts() {

	wp_enqueue_style('sports-store-yith-woocommerce-zoom-magnifier-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-yith-woocommerce-zoom-magnifier-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-yith-woocommerce-zoom-magnifier-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-zoom-magnifier/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
}

add_action('wp_enqueue_scripts', 'sports_store_yith_woocommerce_zoom_magnifier_register_styles_scripts');
