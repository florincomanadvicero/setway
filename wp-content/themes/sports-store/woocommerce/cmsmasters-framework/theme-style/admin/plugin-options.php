<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * WooCommerce Admin Options
 * Created by CMSMasters
 * 
 */


/* Filter for Product Options */
function sports_store_product_meta_fields($custom_all_meta_fields) {
	$custom_all_meta_fields_new = array();
	
	$cmsmasters_option_name = 'cmsmasters_product_';
	
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'product') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'product') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'product') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_sidebar_id') {
				$custom_all_meta_field['std'] = 'sidebar_shop';
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif ($custom_all_meta_field['id'] == 'cmsmasters_other_tabs') {
				$custom_all_meta_field['std'] = 'cmsmasters_product';
				
				
				$tabs_array = array();
				
				$tabs_array['cmsmasters_product'] = array( 
					'label' => esc_html__('Product', 'sports-store'), 
					'value'	=> 'cmsmasters_product' 
				);
				
				
				foreach ($custom_all_meta_field['options'] as $key => $val) {
					$tabs_array[$key] = $val;
				}
				
				
				$custom_all_meta_field['options'] = $tabs_array;
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif (
				$custom_all_meta_field['id'] == 'cmsmasters_layout' && 
				$custom_all_meta_field['type'] == 'tab_start'
			) {
				$custom_all_meta_field['std'] = '';
				
				
				$custom_all_meta_fields_new[] = array( 
					'id'	=> 'cmsmasters_product', 
					'type'	=> 'tab_start', 
					'std'	=> 'true' 
				);
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Sharing Box', 'sports-store'), 
					'desc'	=> esc_html__('Show', 'sports-store'), 
					'id'	=> $cmsmasters_option_name . 'sharing_box', 
					'type'	=> 'checkbox', 
					'hide'	=> '', 
					'std'	=> 'true' 
				); 
				
				$custom_all_meta_fields_new[] = array( 
					'id'	=> 'cmsmasters_product', 
					'type'	=> 'tab_finish' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}  else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'sports_store_product_meta_fields');