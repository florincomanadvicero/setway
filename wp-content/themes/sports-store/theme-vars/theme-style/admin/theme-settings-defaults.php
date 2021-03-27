<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.8
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('sports_store_settings_general_defaults')) {

function sports_store_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'sports-store' . '_theme_layout' => 		'liquid', 
			'sports-store' . '_logo_type' => 			'image', 
			'sports-store' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'sports-store' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'sports-store' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Sports Store', 
			'sports-store' . '_logo_subtitle' => 		'', 
			'sports-store' . '_logo_custom_color' => 	0, 
			'sports-store' . '_logo_title_color' => 	'', 
			'sports-store' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'sports-store' . '_bg_col' => 			'#ffffff', 
			'sports-store' . '_bg_img_enable' => 	0, 
			'sports-store' . '_bg_img' => 			'', 
			'sports-store' . '_bg_rep' => 			'no-repeat', 
			'sports-store' . '_bg_pos' => 			'top center', 
			'sports-store' . '_bg_att' => 			'scroll', 
			'sports-store' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'sports-store' . '_fixed_header' => 				1, 
			'sports-store' . '_header_overlaps' => 				1, 
			'sports-store' . '_header_top_line' => 				0, 
			'sports-store' . '_header_top_height' => 			'32', 
			'sports-store' . '_header_top_line_short_info' => 	'', 
			'sports-store' . '_header_top_line_add_cont' => 	'social', 
			'sports-store' . '_header_styles' => 				'fullwidth', 
			'sports-store' . '_header_mid_height' => 			'90', 
			'sports-store' . '_header_bot_height' => 			'60', 
			'sports-store' . '_header_search' => 				1, 
			'sports-store' . '_header_add_cont' => 				'none', 
			'sports-store' . '_header_add_cont_cust_html' => 	'',
			'sports-store' . '_woocommerce_cart_dropdown' => 	0, 
		), 
		'content' => array( 
			'sports-store' . '_layout' => 					'r_sidebar', 
			'sports-store' . '_archives_layout' => 			'r_sidebar', 
			'sports-store' . '_search_layout' => 			'r_sidebar', 
			'sports-store' . '_other_layout' => 			'r_sidebar', 
			'sports-store' . '_heading_alignment' => 		'left', 
			'sports-store' . '_heading_scheme' => 			'default', 
			'sports-store' . '_heading_bg_image_enable' => 	0, 
			'sports-store' . '_heading_bg_image' => 		'', 
			'sports-store' . '_heading_bg_repeat' => 		'no-repeat', 
			'sports-store' . '_heading_bg_attachment' => 	'scroll', 
			'sports-store' . '_heading_bg_size' => 			'cover', 
			'sports-store' . '_heading_bg_color' => 		'#ffffff', 
			'sports-store' . '_heading_height' => 			'60', 
			'sports-store' . '_breadcrumbs' => 				1, 
			'sports-store' . '_bottom_scheme' => 			'footer', 
			'sports-store' . '_bottom_sidebar' => 			0, 
			'sports-store' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'sports-store' . '_footer_scheme' => 				'footer', 
			'sports-store' . '_footer_type' => 					'small', 
			'sports-store' . '_footer_additional_content' => 	'none', 
			'sports-store' . '_footer_logo' => 					1, 
			'sports-store' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'sports-store' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'sports-store' . '_footer_nav' => 					0, 
			'sports-store' . '_footer_social' => 				1, 
			'sports-store' . '_footer_html' => 					'', 
			'sports-store' . '_footer_copyright' => 			'&copy; ' . date('Y') . ' ' . 'Sports Store' 
		) 
	);
	
	
	$settings = apply_filters('sports_store_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('sports_store_settings_font_defaults')) {

function sports_store_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'sports-store' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'sports-store' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'sports-store' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'sports-store' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'18', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'sports-store' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'42', 
				'line_height' => 		'52', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'28', 
				'line_height' => 		'36', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'18', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'sports-store' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'sports-store' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'48', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'sports-store' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto+Condensed:400,400italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'sports-store' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'sports-store' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'28', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'google' => array( 
			'sports-store' . '_google_web_fonts' => array( 
				'Crimson+Text:400,400italic,700,700italic|Crimson Text', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie', 
			) 
		)  
	);
	
	
	$settings = apply_filters('sports_store_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#000000', 
		'#ffffff', 
		'#d43c18', 
		'#5173a6', 
		'#959595', 
		'#c0c0c0', 
		'#f4f4f4', 
		'#e1e1e1' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('sports_store_color_schemes_defaults')) {

function sports_store_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#545454', 
			'link' => 		'#fa5400', 
			'hover' => 		'#a0a0a0', 
			'heading' => 	'#101010', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f8f8f8', 
			'border' => 	'#dbdbdb' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#191919', 
			'mid_link' => 		'#191919', 
			'mid_hover' => 		'rgba(107,107,107,0.8)', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'#dbdbdb', 
			'bot_color' => 		'#ffffff', 
			'bot_link' => 		'#6b6b6b', 
			'bot_hover' => 		'#6b6b6b', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#dbdbdb' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#191919', 
			'title_link_hover' => 		'#ff4301', 
			'title_link_current' => 	'#ff4301', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.3)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#ffffff', 
			'dropdown_bg' => 			'#191919', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'rgba(255,255,255,0.65)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_subtitle' => '#ff4301', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#191919', 
			'link' => 					'#191919', 
			'hover' => 					'#fa5400', 
			'bg' => 					'#ffffff', 
			'border' => 				'#dbdbdb', 
			'title_link' => 			'#191919', 
			'title_link_hover' => 		'#fa5400', 
			'title_link_bg' => 			'#ffffff', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#101010', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'rgba(255,255,255,0.5)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#828282', 
			'link' => 		'#ffffff', 
			'hover' => 		'rgba(255,255,255,0.7)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#101010', 
			'alternate' => 	'rgba(255,255,255,0.05)', 
			'border' => 	'#232323' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#575757', 
			'link' => 		'#575757', 
			'hover' => 		'rgba(255,255,255,0.7)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#101010', 
			'alternate' => 	'rgba(255,255,255,0.05)', 
			'border' => 	'#232323' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#828282', 
			'link' => 		'#fa5400', 
			'hover' => 		'#a0a0a0', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f8f8f8', 
			'border' => 	'#dbdbdb' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#a5a5a5', 
			'link' => 		'#fa5400', 
			'hover' => 		'#828282', 
			'heading' => 	'#3a3a3a', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f8f8f8', 
			'border' => 	'#3a3a3a' 
		) 
	);
	
	
	$settings = apply_filters('sports_store_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('sports_store_settings_element_defaults')) {

function sports_store_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'sports-store' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'sports-store' . '_social_icons' => array( 
				'cmsmasters-icon-linkedin|#|' . esc_html__('Linkedin', 'sports-store') . '|true||', 
				'cmsmasters-icon-facebook|#|' . esc_html__('Facebook', 'sports-store') . '|true||', 
				'cmsmasters-icon-gplus|#|' . esc_html__('Google', 'sports-store') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'sports-store') . '|true||', 
				'cmsmasters-icon-skype|#|' . esc_html__('Skype', 'sports-store') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'sports-store' . '_ilightbox_skin' => 					'dark', 
			'sports-store' . '_ilightbox_path' => 					'vertical', 
			'sports-store' . '_ilightbox_infinite' => 				0, 
			'sports-store' . '_ilightbox_aspect_ratio' => 			1, 
			'sports-store' . '_ilightbox_mobile_optimizer' => 		1, 
			'sports-store' . '_ilightbox_max_scale' => 				1, 
			'sports-store' . '_ilightbox_min_scale' => 				0.2, 
			'sports-store' . '_ilightbox_inner_toolbar' => 			0, 
			'sports-store' . '_ilightbox_smart_recognition' => 		0, 
			'sports-store' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'sports-store' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'sports-store' . '_ilightbox_controls_toolbar' => 		1, 
			'sports-store' . '_ilightbox_controls_arrows' => 		0, 
			'sports-store' . '_ilightbox_controls_fullscreen' => 	1, 
			'sports-store' . '_ilightbox_controls_thumbnail' => 	1, 
			'sports-store' . '_ilightbox_controls_keyboard' => 		1, 
			'sports-store' . '_ilightbox_controls_mousewheel' => 	1, 
			'sports-store' . '_ilightbox_controls_swipe' => 		1, 
			'sports-store' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'sports-store' . '_sitemap_nav' => 			1, 
			'sports-store' . '_sitemap_categs' => 		1, 
			'sports-store' . '_sitemap_tags' => 		1, 
			'sports-store' . '_sitemap_month' => 		1, 
			'sports-store' . '_sitemap_pj_categs' => 	1, 
			'sports-store' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'sports-store' . '_error_color' => 				'#292929', 
			'sports-store' . '_error_bg_color' => 			'#fcfcfc', 
			'sports-store' . '_error_bg_img_enable' => 		0, 
			'sports-store' . '_error_bg_image' => 			'', 
			'sports-store' . '_error_bg_rep' => 			'no-repeat', 
			'sports-store' . '_error_bg_pos' => 			'top center', 
			'sports-store' . '_error_bg_att' => 			'scroll', 
			'sports-store' . '_error_bg_size' => 			'cover', 
			'sports-store' . '_error_search' => 			1, 
			'sports-store' . '_error_sitemap_button' => 	1, 
			'sports-store' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'sports-store' . '_custom_css' => 			'', 
			'sports-store' . '_custom_js' => 			'', 
			'sports-store' . '_gmap_api_key' => 		'', 
			'sports-store' . '_api_key' => 				'', 
			'sports-store' . '_api_secret' => 			'', 
			'sports-store' . '_access_token' => 		'', 
			'sports-store' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'sports-store' . '_recaptcha_public_key' => 	'', 
			'sports-store' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('sports_store_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('sports_store_settings_single_defaults')) {

function sports_store_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'sports-store' . '_blog_post_layout' => 		'r_sidebar', 
			'sports-store' . '_blog_post_title' => 			1, 
			'sports-store' . '_blog_post_date' => 			1, 
			'sports-store' . '_blog_post_cat' => 			1, 
			'sports-store' . '_blog_post_author' => 		1, 
			'sports-store' . '_blog_post_comment' => 		1, 
			'sports-store' . '_blog_post_tag' => 			1, 
			'sports-store' . '_blog_post_like' => 			1, 
			'sports-store' . '_blog_post_nav_box' => 		1, 
			'sports-store' . '_blog_post_nav_order_cat' => 	0,
			'sports-store' . '_blog_post_share_box' => 		1, 
			'sports-store' . '_blog_post_author_box' => 	1, 
			'sports-store' . '_blog_more_posts_box' => 		'popular', 
			'sports-store' . '_blog_more_posts_count' => 	'3', 
			'sports-store' . '_blog_more_posts_pause' => 	'0' 
		), 
		'project' => array( 
			'sports-store' . '_portfolio_project_title' => 			1, 
			'sports-store' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'sports-store'), 
			'sports-store' . '_portfolio_project_date' => 			1, 
			'sports-store' . '_portfolio_project_cat' => 			1, 
			'sports-store' . '_portfolio_project_author' => 		1, 
			'sports-store' . '_portfolio_project_comment' => 		1, 
			'sports-store' . '_portfolio_project_tag' => 			0, 
			'sports-store' . '_portfolio_project_like' => 			1, 
			'sports-store' . '_portfolio_project_link' => 			0, 
			'sports-store' . '_portfolio_project_share_box' => 		1, 
			'sports-store' . '_portfolio_project_nav_box' => 		1, 
			'sports-store' . '_portfolio_project_nav_order_cat' => 	0, 
			'sports-store' . '_portfolio_project_author_box' => 	0, 
			'sports-store' . '_portfolio_more_projects_box' => 		'popular', 
			'sports-store' . '_portfolio_more_projects_count' => 	'4', 
			'sports-store' . '_portfolio_more_projects_pause' => 	'0', 
			'sports-store' . '_portfolio_project_slug' => 			'project', 
			'sports-store' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'sports-store' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'sports-store' . '_profile_post_title' => 			1, 
			'sports-store' . '_profile_post_details_title' => 	esc_html__('Profile details', 'sports-store'), 
			'sports-store' . '_profile_post_cat' => 			1, 
			'sports-store' . '_profile_post_comment' => 		1, 
			'sports-store' . '_profile_post_like' => 			1, 
			'sports-store' . '_profile_post_nav_box' => 		1, 
			'sports-store' . '_profile_post_nav_order_cat' => 	0, 
			'sports-store' . '_profile_post_share_box' => 		0, 
			'sports-store' . '_profile_post_slug' => 			'profile', 
			'sports-store' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('sports_store_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('sports_store_project_puzzle_proportion')) {

function sports_store_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('sports_store_project_puzzle_large_gar_parameters')) {

function sports_store_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('sports_store_get_image_thumbnail_list')) {

function sports_store_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		70, 
			'height' => 	70, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'sports-store') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	420, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'sports-store') 
		), 
		'cmsmasters-project-grid-thumb' => array( 
			'width' => 		360, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Grid', 'sports-store') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'sports-store') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'sports-store') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	500, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'sports-store') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'sports-store') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	650, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'sports-store') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	700, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'sports-store') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'sports-store') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('sports_store_project_labels')) {

function sports_store_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'sports-store'), 
		'singular_name' => 			esc_html__('Project', 'sports-store'), 
		'menu_name' => 				esc_html__('Projects', 'sports-store'), 
		'all_items' => 				esc_html__('All Projects', 'sports-store'), 
		'add_new' => 				esc_html__('Add New', 'sports-store'), 
		'add_new_item' => 			esc_html__('Add New Project', 'sports-store'), 
		'edit_item' => 				esc_html__('Edit Project', 'sports-store'), 
		'new_item' => 				esc_html__('New Project', 'sports-store'), 
		'view_item' => 				esc_html__('View Project', 'sports-store'), 
		'search_items' => 			esc_html__('Search Projects', 'sports-store'), 
		'not_found' => 				esc_html__('No projects found', 'sports-store'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'sports-store') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'sports_store_project_labels');


if (!function_exists('sports_store_pj_categs_labels')) {

function sports_store_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'sports-store'), 
		'singular_name' => 			esc_html__('Project Category', 'sports-store') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'sports_store_pj_categs_labels');


if (!function_exists('sports_store_pj_tags_labels')) {

function sports_store_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'sports-store'), 
		'singular_name' => 			esc_html__('Project Tag', 'sports-store') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'sports_store_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('sports_store_profile_labels')) {

function sports_store_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'sports-store'), 
		'singular_name' => 			esc_html__('Profiles', 'sports-store'), 
		'menu_name' => 				esc_html__('Profiles', 'sports-store'), 
		'all_items' => 				esc_html__('All Profiles', 'sports-store'), 
		'add_new' => 				esc_html__('Add New', 'sports-store'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'sports-store'), 
		'edit_item' => 				esc_html__('Edit Profile', 'sports-store'), 
		'new_item' => 				esc_html__('New Profile', 'sports-store'), 
		'view_item' => 				esc_html__('View Profile', 'sports-store'), 
		'search_items' => 			esc_html__('Search Profiles', 'sports-store'), 
		'not_found' => 				esc_html__('No Profiles found', 'sports-store'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'sports-store') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'sports_store_profile_labels');


if (!function_exists('sports_store_pl_categs_labels')) {

function sports_store_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'sports-store'), 
		'singular_name' => 			esc_html__('Profile Category', 'sports-store') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'sports_store_pl_categs_labels');

