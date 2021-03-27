<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Color and Label Variations Colors Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_color_label_variations_colors($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Color and Label Variations Colors Scheme Rules ******************/
	
	/* Start Primary Color */
	{$rule}.select_option.select_option_label .yith_wccl_value:hover,
	{$rule}.select_option.select_option_label.selected .yith_wccl_value {
		" . cmsmasters_color_css('color', $cmsmasters_option['sports-store' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Headings Color */
	{$rule}table.variations tr td.label {
		" . cmsmasters_color_css('color', $cmsmasters_option['sports-store' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}#page .select_option:hover, 
	{$rule}#page .select_option.selected {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['sports-store' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Color and Label Variations Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('sports_store_theme_colors_secondary_filter', 'sports_store_yith_woocommerce_color_label_variations_colors');

