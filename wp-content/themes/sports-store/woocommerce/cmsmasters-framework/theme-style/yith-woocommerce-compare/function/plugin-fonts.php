<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * Yith WooCommerce Compare Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_yith_woocommerce_compare_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Compare Font Styles ******************/
	
	/* Start Content Font */
	body.yith-woocompare-popup,
	.yith-woocompare-widget a.clear-all,
	.yith-woocompare-widget ul.products-list li .title {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_content_font_google_font']) . $cmsmasters_option['sports-store' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_content_font_font_style'] . ";
	}
	
	.yith-woocompare-widget ul.products-list li .title {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_content_font_font_size'] + 1) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	.cmsmasters_compare_btn {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_link_font_google_font']) . $cmsmasters_option['sports-store' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */
	
	
	/* Start H2 Font */
	body.yith-woocompare-popup h1 {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h2_font_google_font']) . $cmsmasters_option['sports-store' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H4 Font */
	#yith-woocompare-share .yith-woocompare-share-title,
	.yith-woocompare-share-title,
	.cmsmasters_woocompare_related > h3,
	h3.yith-woocompare-related-title {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h4_font_google_font']) . $cmsmasters_option['sports-store' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	#yith-woocompare table.compare-list tbody th,
	#yith-woocompare-cat-nav .yith-woocompare-nav-list li > * {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h5_font_google_font']) . $cmsmasters_option['sports-store' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h5_font_text_decoration'] . ";
	}
	
	#yith-woocompare-cat-nav .yith-woocompare-nav-list li > * {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_font_size'] -3) . "px;}
	/* Finish H5 Font */
	
	
	/* Start Button Font */
	.yith-woocompare-popup table.compare-list .product_info .button, 
	#page table.compare-list .product_info .button, 
	.yith-woocompare-popup table.compare-list .add-to-cart .button, 
	#page table.compare-list .add-to-cart .button, 
	.yith-woocompare-popup table.compare-list .added_to_cart, 
	#page table.compare-list .added_to_cart, 
	.yith-woocompare-popup .cmsmasters_woocompare_related .related-products .button, 
	#page .cmsmasters_woocompare_related .related-products .button,
	.yith-woocompare-widget a.compare {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_button_font_google_font']) . $cmsmasters_option['sports-store' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_button_font_text_transform'] . ";
	}
	
	.yith-woocompare-popup table.compare-list .product_info .button, 
	#page table.compare-list .product_info .button, 
	.yith-woocompare-popup table.compare-list .add-to-cart .button, 
	#page table.compare-list .add-to-cart .button, 
	.yith-woocompare-popup table.compare-list .added_to_cart, 
	#page table.compare-list .added_to_cart, 
	.yith-woocompare-popup .cmsmasters_woocompare_related .related-products .button, 
	#page .cmsmasters_woocompare_related .related-products .button,
	.yith-woocompare-widget a.compare {
		line-height:" . ((int) $cmsmasters_option['sports-store' . '_button_font_line_height'] -10) . "px;
	}
	/* Finish Button Font */
	
/***************** Finish Yith WooCommerce Compare Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_yith_woocommerce_compare_fonts');

