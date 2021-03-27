<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.6
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function sports_store_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'sports-store');
	$tabs['link'] = esc_attr__('Links', 'sports-store');
	$tabs['nav'] = esc_attr__('Navigation', 'sports-store');
	$tabs['heading'] = esc_attr__('Heading', 'sports-store');
	$tabs['other'] = esc_attr__('Other', 'sports-store');
	$tabs['google'] = esc_attr__('Google Fonts', 'sports-store');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function sports_store_options_font_sections() {
	$tab = sports_store_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'sports-store');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'sports-store');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'sports-store');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'sports-store');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'sports-store');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'sports-store');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function sports_store_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = sports_store_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = sports_store_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'sports-store' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'sports-store' . '_link_font', 
			'title' => esc_html__('Links Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'sports-store' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['sports-store' . '_link_hover_decoration'], 
			'choices' => sports_store_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'sports-store' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'sports-store' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'sports-store' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'sports-store' . '_button_font', 
			'title' => esc_html__('Button Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'sports-store' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'sports-store' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'sports-store' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'sports-store'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['sports-store' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'sports-store' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'sports-store'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['sports-store' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'sports-store' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'sports-store'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'sports-store') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'sports-store') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'sports-store') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'sports-store') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'sports-store') . '|' . 'greek', 
				esc_html__('Greek Extended', 'sports-store') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'sports-store') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'sports-store') . '|' . 'japanese', 
				esc_html__('Korean', 'sports-store') . '|' . 'korean', 
				esc_html__('Thai', 'sports-store') . '|' . 'thai', 
				esc_html__('Bengali', 'sports-store') . '|' . 'bengali', 
				esc_html__('Devanagari', 'sports-store') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'sports-store') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'sports-store') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'sports-store') . '|' . 'hebrew', 
				esc_html__('Kannada', 'sports-store') . '|' . 'kannada', 
				esc_html__('Khmer', 'sports-store') . '|' . 'khmer', 
				esc_html__('Malayalam', 'sports-store') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'sports-store') . '|' . 'myanmar', 
				esc_html__('Oriya', 'sports-store') . '|' . 'oriya', 
				esc_html__('Sinhala', 'sports-store') . '|' . 'sinhala', 
				esc_html__('Tamil', 'sports-store') . '|' . 'tamil', 
				esc_html__('Telugu', 'sports-store') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

