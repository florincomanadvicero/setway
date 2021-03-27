<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function sports_store_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'sports-store');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'sports-store');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'sports-store');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'sports-store');
	$tabs['error'] = esc_attr__('404', 'sports-store');
	$tabs['code'] = esc_attr__('Custom Codes', 'sports-store');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'sports-store');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function sports_store_options_element_sections() {
	$tab = sports_store_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'sports-store');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'sports-store');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'sports-store');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'sports-store');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'sports-store');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'sports-store');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'sports-store');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function sports_store_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = sports_store_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = sports_store_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'sports-store' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'sports-store'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['sports-store' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'sports-store' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'sports-store'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['sports-store' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'sports-store'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'sports-store') . '|dark', 
				esc_html__('Light', 'sports-store') . '|light', 
				esc_html__('Mac', 'sports-store') . '|mac', 
				esc_html__('Metro Black', 'sports-store') . '|metro-black', 
				esc_html__('Metro White', 'sports-store') . '|metro-white', 
				esc_html__('Parade', 'sports-store') . '|parade', 
				esc_html__('Smooth', 'sports-store') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'sports-store'), 
			'desc' => esc_html__('Sets path for switching windows', 'sports-store'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'sports-store') . '|vertical', 
				esc_html__('Horizontal', 'sports-store') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'sports-store'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'sports-store'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'sports-store'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'sports-store'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'sports-store'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'sports-store'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'sports-store'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'sports-store'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'sports-store'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'sports-store'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'sports-store') . '|center', 
				esc_html__('Fit', 'sports-store') . '|fit', 
				esc_html__('Fill', 'sports-store') . '|fill', 
				esc_html__('Stretch', 'sports-store') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'sports-store'), 
			'desc' => esc_html__('Sets buttons be available or not', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'sports-store'), 
			'desc' => esc_html__('Enable the arrow buttons', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'sports-store'), 
			'desc' => esc_html__('Sets the fullscreen button', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'sports-store'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'sports-store'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'sports-store'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'sports-store'), 
			'desc' => esc_html__('Sets the swipe navigation', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'sports-store' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'sports-store'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'sports-store' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_color', 
			'title' => esc_html__('Text Color', 'sports-store'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['sports-store' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'sports-store'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'sports-store'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'sports-store') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'sports-store') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'sports-store') . '|repeat-y', 
				esc_html__('Repeat', 'sports-store') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'sports-store'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'sports-store') . '|top left', 
				esc_html__('Top Center', 'sports-store') . '|top center', 
				esc_html__('Top Right', 'sports-store') . '|top right', 
				esc_html__('Center Left', 'sports-store') . '|center left', 
				esc_html__('Center Center', 'sports-store') . '|center center', 
				esc_html__('Center Right', 'sports-store') . '|center right', 
				esc_html__('Bottom Left', 'sports-store') . '|bottom left', 
				esc_html__('Bottom Center', 'sports-store') . '|bottom center', 
				esc_html__('Bottom Right', 'sports-store') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'sports-store') . '|scroll', 
				esc_html__('Fixed', 'sports-store') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'sports-store') . '|auto', 
				esc_html__('Cover', 'sports-store') . '|cover', 
				esc_html__('Contain', 'sports-store') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_search', 
			'title' => esc_html__('Search Line', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'sports-store' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'sports-store'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['sports-store' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'sports-store'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['sports-store' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'sports-store' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'sports-store' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'sports-store' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

