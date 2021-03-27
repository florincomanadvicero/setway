<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.1.2
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('sports_store_register_theme_plugins')) {

function sports_store_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'sports-store'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.4.3.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'sports-store'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'sports-store'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'sports-store'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.6', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'sports-store'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.11.2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'sports-store'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.3.3', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'sports-store'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'sports-store'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Instagram Feed', 'sports-store'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'sports-store'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'sports-store'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		),
		array( 
			'name'					=> esc_html__('MailPoet 3', 'sports-store'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'sports-store'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Ajax Search', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-ajax-search', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Quick View', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-quick-view', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Wishlist', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-wishlist', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Zoom Magnifier', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-zoom-magnifier', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('YITH WooCommerce Ajax Product Filter', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-ajax-navigation', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Compare', 'sports-store'), 
			'slug'					=> 'yith-woocommerce-compare', 
			'required'				=> false 
 		)
	);
	
	
	$config = array( 
		'id' => 			'sports-store', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'sports-store'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'sports-store'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'sports-store') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'sports_store_register_theme_plugins');

