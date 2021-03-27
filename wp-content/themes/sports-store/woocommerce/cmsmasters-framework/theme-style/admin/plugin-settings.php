<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.8
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function sports_store_woocommerce_options_general_fields($options, $tab) {
	$defaults = sports_store_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'sports-store' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Header WooCommerce Cart', 'sports-store'),
			'desc' => esc_html__('show', 'sports-store'),
			'type' => 'checkbox',
			'std' => $defaults[$tab]['sports-store' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'sports_store_woocommerce_options_general_fields', 10, 2);

