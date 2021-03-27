<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function sports_store_theme_options_general_fields($options, $tab) {
	if ($tab == 'header') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'sports-store_header_styles') {
				$option['choices'][] = esc_html__('Fullwidth Header Style', 'sports-store') . '|fullwidth';
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'sports_store_theme_options_general_fields', 10, 2);



/* Elements Settings */
function sports_store_options_element_fields_filter($options, $tab) {
	if ($tab == 'code') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'sports-store_custom_css') {
				// remove this option
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_element_fields_filter', 'sports_store_options_element_fields_filter', 10, 2);
