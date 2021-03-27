<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.1.0
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function sports_store_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');
	
	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', array(
		'clear' => 					__('Clear', 'sports-store'),
		'clearAriaLabel' => 		__('Clear color', 'sports-store'),
		'defaultLabel' => 			__('Color value', 'sports-store'),
		'defaultString' => 			__('Default', 'sports-store'),
		'defaultAriaLabel' => 		__('Select default color', 'sports-store'),
		'pick' => 					__('Select Color', 'sports-store'),
	) ); 
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '2.1.4', true);
	
	
	wp_enqueue_style('sports-store-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('sports-store-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('sports-store-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('sports-store-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'sports-store'), 
		'insert' => 				esc_attr__('Insert image', 'sports-store'), 
		'remove' => 				esc_attr__('Remove', 'sports-store'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'sports-store') 
	));
	
	
	wp_enqueue_script('sports-store-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('sports-store-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'sports-store'), 
		'insert' => 				esc_attr__('Insert', 'sports-store'), 
		'deselect' => 				esc_attr__('Deselect', 'sports-store'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'sports-store'), 
		'find_icons' => 			esc_attr__('Find icons', 'sports-store'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'sports-store'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'sports-store'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'sports-store') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('sports-store-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('sports-store-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('sports-store-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('sports-store-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('sports-store-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('sports-store-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('sports-store-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'sports_store_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

