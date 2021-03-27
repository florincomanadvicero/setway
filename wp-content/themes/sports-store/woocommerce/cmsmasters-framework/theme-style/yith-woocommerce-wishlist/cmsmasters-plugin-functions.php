<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Wishlist Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/function/plugin-template-functions.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Wishlist Plugin */
function sports_store_yith_woocommerce_wishlist_register_styles_scripts() {

	wp_enqueue_style('sports-store-yith-woocommerce-wishlist-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-yith-woocommerce-wishlist-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-yith-woocommerce-wishlist-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('sports-store-yith-woocommerce-wishlist-script', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-wishlist/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'sports_store_yith_woocommerce_wishlist_register_styles_scripts');
