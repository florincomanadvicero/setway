<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts for Yith WooCommerce Ajax Search Plugin */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-template-functions.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-colors.php');

require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/function/plugin-fonts.php');



/* Register CSS Styles and Scripts for Yith WooCommerce Ajax Search Plugin */
function sports_store_yith_woocommerce_ajax_search_register_styles_scripts() {

	wp_enqueue_style('sports-store-yith-woocommerce-ajax-search-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-yith-woocommerce-ajax-search-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-yith-woocommerce-ajax-search-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/yith-woocommerce-ajax-search/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
}

add_action('wp_enqueue_scripts', 'sports_store_yith_woocommerce_ajax_search_register_styles_scripts');



/* Yith WooCommerce Ajax Search Default */
function sports_store_ajax_search_options_default() {
	if (!get_option('cmsmasters_sports_store_ajax_search_first_active')) {
		update_option('yith_wcas_search_submit_label', '');
		
		add_option('cmsmasters_sports_store_ajax_search_first_active', 'true');
	}
}

add_action('init', 'sports_store_ajax_search_options_default');



/* Yith WooCommerce Ajax Search Premium Default */
if (defined('YITH_WCAS_PREMIUM')) {
	function sports_store_ajax_search_premium_options_default() {
		if (!get_option('cmsmasters_sports_store_ajax_search_premium_first_active')) {
			update_option('yith_wcas_sale_badge_bgcolor', '');
			update_option('yith_wcas_sale_badge_color', '');
			update_option('yith_wcas_featured_badge_bgcolor', '');
			update_option('yith_wcas_featured_badge_color', '');
			update_option('yith_wcas_outofstock_badge_bgcolor', '');
			update_option('yith_wcas_outofstock_badge_color', '');
			update_option('yith_wcas_search_title_color', '');
			
			add_option('cmsmasters_sports_store_ajax_search_premium_first_active', 'true');
		}
	}

	add_action('init', 'sports_store_ajax_search_premium_options_default');
}