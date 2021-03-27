<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Ajax Product Filter Colors Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_ajax_product_filter_colors($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Ajax Product Filter Colors Scheme Rules ******************/
	
	
	/* Start Main Content Font Color */
	{$rule}.yith-woocommerce-ajax-product-filter ul li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['sports-store' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li.chosen a,
	{$rule}.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li a:hover,
	{$rule}.yith-woocommerce-ajax-product-filter ul li a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['sports-store' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Headings Color */
	{$rule}.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li,
	{$rule}.yith-woocommerce-ajax-product-filter.widget_layered_nav ul.yith-wcan-label li a,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-stock-on-sale .yith-wcan-stock-on-sale li a:hover:after,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-stock-on-sale .yith-wcan-stock-on-sale li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['sports-store' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-list-price-filter .yith-wcan-list-price-filter .yith-wcan-price-link:after,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-sort-by li a:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['sports-store' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-stock-on-sale .yith-wcan-stock-on-sale li a:before,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-list-price-filter .yith-wcan-list-price-filter .yith-wcan-price-link:before,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-sort-by li a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['sports-store' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-stock-on-sale .yith-wcan-stock-on-sale li a:before,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-list-price-filter .yith-wcan-list-price-filter .yith-wcan-price-link:before,
	{$rule}.yith-woocommerce-ajax-product-filter.yith-wcan-sort-by li a:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['sports-store' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Ajax Product Filter Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('sports_store_theme_colors_secondary_filter', 'sports_store_yith_woocommerce_ajax_product_filter_colors');

