<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.6
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function sports_store_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$cmsmasters_woo_exists = 'true';
	} else {
		$cmsmasters_woo_exists = 'false';
	}
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('sports-store-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('sports-store-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'cmsmasters_woo_exists' => 					$cmsmasters_woo_exists, 
			'product_cat' => 							sports_store_woocommerce_product_cat(), 
			'blog_field_layout_mode_puzzle' => 			esc_attr__('Puzzle', 'sports-store'), 
			'quotes_field_slider_type_title' => 		esc_attr__('Slider Type', 'sports-store'), 
			'quotes_field_slider_type_descr' => 		esc_attr__('Choose your quotes slider style type', 'sports-store'), 
			'quotes_field_type_choice_box' => 			esc_attr__('Boxed', 'sports-store'), 
			'quotes_field_type_choice_center' => 		esc_attr__('Centered', 'sports-store'), 
			'quotes_field_item_color_title' => 			esc_attr__('Color', 'sports-store'), 
			'quotes_field_item_color_descr' => 			esc_attr__('Enter this quote custom color', 'sports-store'), 
			'posts_slider_field_poststype_choice_product' => esc_attr__('Shop products', 'sports-store'), 
			'posts_slider_field_prcateg_title' => 		esc_attr__('Product Categories', 'sports-store'), 
			'posts_slider_field_prcateg_descr' => 		esc_attr__('Show product associated with certain categories', 'sports-store'), 
			'posts_slider_field_prcateg_descr_note' => 	esc_attr__('If you dont choose any product categories, all your product will be shown', 'sports-store'), 
			'posts_slider_field_prmeta_title' => 		esc_attr__('Product Metadata', 'sports-store'), 
			'posts_slider_field_prmeta_descr' => 		esc_attr__('Choose product metadata you want to be shown', 'sports-store'), 
			'choice_rating' => 							esc_attr__('Rating', 'sports-store'), 
			'choice_price' => 							esc_attr__('Price', 'sports-store'),
			'featured_block_link' =>	 				esc_attr__('Featured Block Link', 'sports-store'), 
			'featured_block_link_descr' =>	 			esc_attr__('Enter featured block link here', 'sports-store'), 
			'featured_block_target' =>	 				esc_attr__('Featured Block Target', 'sports-store'), 
			'featured_block_target_descr' =>	 		esc_attr__('Enter featured block target here', 'sports-store'), 
			'featured_block_hover' =>	 				esc_attr__('Featured Block Hover', 'sports-store'), 
			'featured_block_hover_descr' =>	 			esc_attr__('Add hover for this featured block', 'sports-store') 
		));
	}
}

add_action('admin_enqueue_scripts', 'sports_store_theme_register_c_c_scripts');



// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'3', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}



// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	if (CMSMASTERS_WOOCOMMERCE) {
		return array( 
			'shortcode_id' => 			'', 
			'orderby' => 				'', 
			'order' => 					'', 
			'post_type' => 				'', 
			'blog_categories' => 		'', 
			'portfolio_categories' => 	'', 
			'columns' => 				'', 
			'amount' => 				'', 
			'count' => 					'', 
			'pause' => 					'', 
			'speed' => 					'', 
			'blog_metadata' => 			'', 
			'portfolio_metadata' => 	'', 
			'animation' => 				'', 
			'animation_delay' => 		'', 
			'classes' => 				'', 
			'product_metadata' => 		'rating,title,categories,price', 
			'product_categories' => 	'' 
		);
	} else {
		return array( 
			'shortcode_id' => 			'', 
			'orderby' => 				'', 
			'order' => 					'', 
			'post_type' => 				'', 
			'blog_categories' => 		'', 
			'portfolio_categories' => 	'', 
			'columns' => 				'', 
			'amount' => 				'', 
			'count' => 					'', 
			'pause' => 					'', 
			'speed' => 					'', 
			'blog_metadata' => 			'', 
			'portfolio_metadata' => 	'', 
			'animation' => 				'', 
			'animation_delay' => 		'', 
			'classes' => 				'' 
		);
	}
}



// Featured Block Shortcode Attributes Filter
add_filter('cmsmasters_featured_block_atts_filter', 'cmsmasters_featured_block_atts');

function cmsmasters_featured_block_atts() {
	return array( 
		'shortcode_id' => 					'', 
		'text_width' => 					'100', 
		'text_position' => 					'center', 
		'text_padding' => 					'', 
		'text_align' => 					'left', 
		'color_overlay' => 					'', 
		'fb_bg_color' => 					'', 
		'bg_img' => 						'', 
		'bg_position' => 					'', 
		'bg_repeat' => 						'', 
		'bg_attachment' => 					'', 
		'bg_size' => 						'', 
		'link' => 							'', 
		'target' => 						'', 
		'hover' => 							'', 
		'top_padding' => 					'', 
		'bottom_padding' => 				'', 
		'resp_vert_pad' => 					'', 
		'padding_top_laptop' => 			'', 
		'padding_bottom_laptop' => 			'', 
		'padding_top_tablet' => 			'', 
		'padding_bottom_tablet' => 			'', 
		'padding_top_mobile_h' => 			'', 
		'padding_bottom_mobile_h' =>		'', 
		'padding_top_mobile_v' => 			'', 
		'padding_bottom_mobile_v' => 		'', 
		'border_radius' => 					'', 
		'animation' => 						'', 
		'animation_delay' => 				'', 
		'classes' => 						'' 
	);
}


/* Product Categories */
function sports_store_woocommerce_product_cat() {
	$out = array();
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$categories = get_terms('product_cat', array( 
			'hide_empty' => 0 
		));
		
		
		if (!empty($categories)) {
			foreach ($categories as $category) {
				$out[$category->slug] = esc_html($category->name);
			}
		}
		
		
	}
	
	return $out;
}