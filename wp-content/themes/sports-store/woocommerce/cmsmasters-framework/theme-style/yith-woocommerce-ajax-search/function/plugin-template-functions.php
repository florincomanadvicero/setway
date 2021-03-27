<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Search Template Functions
 * Created by CMSMasters
 * 
 */


/* Ajax Search for Header Search */
function sports_store_yith_woocommerce_ajax_search_header_search_form() {
	return do_shortcode('[yith_woocommerce_ajax_search]');
}

add_filter('sports_store_get_header_search_form_filter', 'sports_store_yith_woocommerce_ajax_search_header_search_form');