<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.4
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function sports_store_vars_register_css_styles() {
	wp_enqueue_style('sports-store-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('sports-store-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'sports_store_vars_register_css_styles');

