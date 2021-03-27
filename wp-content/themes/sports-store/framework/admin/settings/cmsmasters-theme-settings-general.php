<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.8
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function sports_store_options_general_tabs() {
	$cmsmasters_option = sports_store_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'sports-store');
	
	if ($cmsmasters_option['sports-store' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'sports-store');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'sports-store');
	}
	
	$tabs['header'] = esc_attr__('Header', 'sports-store');
	$tabs['content'] = esc_attr__('Content', 'sports-store');
	$tabs['footer'] = esc_attr__('Footer', 'sports-store');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function sports_store_options_general_sections() {
	$tab = sports_store_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'sports-store');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'sports-store');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'sports-store');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'sports-store');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'sports-store');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'sports-store');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function sports_store_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = sports_store_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = sports_store_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'sports-store') . '|liquid', 
				esc_html__('Boxed', 'sports-store') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'sports-store') . '|image', 
				esc_html__('Text', 'sports-store') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'sports-store'), 
			'desc' => esc_html__('Choose your website logo image.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'sports-store'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'sports-store'), 
			'desc' => esc_html__('enable', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'sports-store'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['sports-store' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'sports-store' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'sports-store'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['sports-store' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_col', 
			'title' => esc_html__('Background Color', 'sports-store'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['sports-store' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_img', 
			'title' => esc_html__('Background Image', 'sports-store'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'sports-store') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'sports-store') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'sports-store') . '|repeat-y', 
				esc_html__('Repeat', 'sports-store') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'sports-store'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['sports-store' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'sports-store') . '|scroll', 
				esc_html__('Fixed', 'sports-store') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'sports-store' . '_bg_size', 
			'title' => esc_html__('Background Size', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'sports-store') . '|auto', 
				esc_html__('Cover', 'sports-store') . '|cover', 
				esc_html__('Contain', 'sports-store') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'sports-store' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => sports_store_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'sports-store'), 
			'desc' => esc_html__('enable', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'sports-store'), 
			'desc' => esc_html__('enable', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'sports-store'), 
			'desc' => esc_html__('pixels', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'sports-store'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-store') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['sports-store' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'sports-store') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'sports-store') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'sports-store') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'sports-store') . '|default', 
				esc_html__('Compact Style Left Navigation', 'sports-store') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'sports-store') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'sports-store') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'sports-store'), 
			'desc' => esc_html__('pixels', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'sports-store'), 
			'desc' => esc_html__('pixels', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_search', 
			'title' => esc_html__('Header Search', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'sports-store') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'sports-store') . '|social', 
				esc_html__('Header Custom HTML', 'sports-store') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'sports-store' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'sports-store'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-store') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['sports-store' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'sports-store'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'sports-store'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['sports-store' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'sports-store'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'sports-store'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['sports-store' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'sports-store'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'sports-store'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['sports-store' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'sports-store'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'sports-store'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['sports-store' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'sports-store') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'sports-store') . '|left', 
				esc_html__('Right', 'sports-store') . '|right', 
				esc_html__('Center', 'sports-store') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['sports-store' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'sports-store'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'sports-store') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'sports-store') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'sports-store') . '|repeat-y', 
				esc_html__('Repeat', 'sports-store') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'sports-store') . '|scroll', 
				esc_html__('Fixed', 'sports-store') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'sports-store') . '|auto', 
				esc_html__('Cover', 'sports-store') . '|cover', 
				esc_html__('Contain', 'sports-store') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'sports-store'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['sports-store' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'sports-store'), 
			'desc' => esc_html__('pixels', 'sports-store'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['sports-store' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['sports-store' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'sports-store'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['sports-store' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['sports-store' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'sports-store') . '|default', 
				esc_html__('Small', 'sports-store') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'sports-store'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['sports-store' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'sports-store') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'sports-store') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'sports-store') . '|social', 
				esc_html__('Custom HTML', 'sports-store') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'sports-store'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'sports-store'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'sports-store'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['sports-store' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'sports-store'), 
			'desc' => esc_html__('show', 'sports-store'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['sports-store' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'sports-store'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'sports-store') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['sports-store' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'sports-store' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'sports-store'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['sports-store' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

