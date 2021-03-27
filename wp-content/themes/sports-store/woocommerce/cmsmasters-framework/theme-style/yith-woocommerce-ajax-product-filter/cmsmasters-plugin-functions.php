<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Product Filter Functions
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-product-filter/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-product-filter/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Ajax Product Filter Plugin */
function sports_store_yith_woocommerce_ajax_product_filter_register_styles_scripts() {

	wp_enqueue_style('sports-store-yith-woocommerce-ajax-product-filter-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-product-filter/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-yith-woocommerce-ajax-product-filter-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-product-filter/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-yith-woocommerce-ajax-product-filter-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-product-filter/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
}

add_action('wp_enqueue_scripts', 'sports_store_yith_woocommerce_ajax_product_filter_register_styles_scripts');
