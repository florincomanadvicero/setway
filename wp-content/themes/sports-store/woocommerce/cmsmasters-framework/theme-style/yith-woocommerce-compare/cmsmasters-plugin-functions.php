<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Compare Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Compare Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/function/plugin-template-functions.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Compare Plugin */
function sports_store_yith_woocommerce_compare_register_styles_scripts() {

	wp_enqueue_style('sports-store-yith-woocommerce-compare-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-yith-woocommerce-compare-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-yith-woocommerce-compare-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
}

add_action('wp_enqueue_scripts', 'sports_store_yith_woocommerce_compare_register_styles_scripts');



/* Yith WooCommerce Compare Default */
function sports_store_compare_options_default() {
	if (!get_option('cmsmasters_sports_store_compare_first_active')) {
		update_option('yith_woocompare_compare_button_in_products_list', 'yes');
		update_option('yith_woocompare_auto_open', 'no');
		
		add_option('cmsmasters_sports_store_compare_first_active', 'true');
	}
}

add_action('init', 'sports_store_compare_options_default');



/* Yith WooCommerce Compare Premium Default */
if (defined('YITH_WOOCOMPARE_PREMIUM')) {
	function sports_store_compare_premium_options_default() {
		if (!get_option('cmsmasters_sports_store_compare_premium_first_active')) {
			update_option('yith_woocompare_use_page_popup', 'page');
			
			add_option('cmsmasters_sports_store_compare_premium_first_active', 'true');
		}
	}

	add_action('init', 'sports_store_compare_premium_options_default');
}



/* Yith WooCommerce Compare Premium Popup Styles */
if (defined('YITH_WOOCOMPARE_PREMIUM')) {
	function sports_store_compare_premium_popup() {
		sports_store_theme_google_fonts_generate();
		
		wp_enqueue_style('sports-store-compare-theme-style-dublicate', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('sports-store-compare-style-dublicate', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/style.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('sports-store-compare-adaptive-dublicate', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/adaptive.css', array(), '1.0.0', 'screen, print');
		
		wp_enqueue_style('sports-store-icons-dublicate', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-icons-custom-dublicate', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-woocommerce-style-dublicate', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-woocommerce-adaptive-dublicate', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
		
		$cmsmasters_styles_dir = get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/styles/';
		
		wp_enqueue_style('sports-store-fonts-schemes-dublicate', $cmsmasters_styles_dir . 'sports-store' . '.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-yith-woocommerce-compare-style-dublicate', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-style.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-yith-woocommerce-compare-adaptive-dublicate', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
		
		if (is_rtl()) {
			wp_enqueue_style('sports-store-yith-woocommerce-compare-rtl-dublicate', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-compare/css/plugin-rtl.css', array(), '1.0.0', 'screen');
		}
	}

	add_action('yith_woocompare_popup_head', 'sports_store_compare_premium_popup');
}
