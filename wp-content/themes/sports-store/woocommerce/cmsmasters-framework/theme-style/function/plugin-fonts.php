<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.0
 * 
 * WooCommerce Fonts Rules
 * Created by CMSMasters
 * 
 */


function sports_store_woocommerce_fonts($custom_css) {
	$cmsmasters_option = sports_store_get_global_options();
	
	
	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Navigation Title Font */
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_nav_title_font_google_font']) . $cmsmasters_option['sports-store' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_nav_title_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button span {
		font-size:12px;
	}
	/* Finish Navigation Title Font */
	
	
	/* Start Content Font */
	.cmsmasters_product .price del,
	dl.variation dt,
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_content_font_google_font']) . $cmsmasters_option['sports-store' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	
	
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a,
	.widget_product_categories *,
	.cmsmasters_product .price {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_content_font_font_size'] + 1) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product .product_title {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h2_font_google_font']) . $cmsmasters_option['sports-store' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_single_product .price,
	.cart_totals > h2,
	div.products > h2,
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td, 
	ul.order_details {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h3_font_google_font']) . $cmsmasters_option['sports-store' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.post_comments .post_comments_title,
	section.products.related > h2,
	.shop_table.order_details tfoot tr th {
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
	.woocommerce-MyAccount-navigation ul > li a,
	.cmsmasters_single_product .price del,
	.cmsmasters_product .button_to_cart_wrap .button,
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name, 
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount,
	.shop_table .product-name a, 
	.shop_table thead th, 
	.shop_table.order_details tfoot tr td, 
	ul.order_details strong, 
	.widget_shopping_cart .cart_list a, 
	.widget > .product_list_widget a {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h5_font_google_font']) . $cmsmasters_option['sports-store' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h5_font_text_decoration'] . ";
	}
	
	.woocommerce-MyAccount-navigation ul > li a,
	.cart_totals table .cart-subtotal th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total th, 
	.cart_totals td strong > .amount,
	.cart_totals table .order-total .amount {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_line_height'] - 6) . "px;
	}
	
	.cart_totals td strong > .amount, .cart_totals table .order-total .amount,
	.cart_totals table .cart-subtotal .amount {
		font-weight:normal;
	}
	
	.widget_shopping_cart .cart_list a, 
	.shop_table .product-name a,
	.widget > .product_list_widget a {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_product .cmsmasters_product_title,
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td .amount,
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th, 
	.shop_table.woocommerce-checkout-review-order-table th.product-name {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h5_font_font_size'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.cmsmasters_added_product_info_text,
	table.variations tr td.label,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	.widget > .product_list_widget .reviewer,
	.widget > .product_list_widget .amount, 
	.widget_price_filter .price_slider_amount .price_label, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.widget_shopping_cart .cart_list .quantity, 
	.form-row label,
	.form-row label a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.onsale, 
	.out-of-stock, 
	.stock,
	.cmsmasters_single_product .product_meta_title {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_h6_font_google_font']) . $cmsmasters_option['sports-store' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['sports-store' . '_h6_font_text_decoration'] . ";
	}
	
	.widget > .product_list_widget .amount, 
	.widget_shopping_cart .cart_list .quantity,
	.form-row label a,
	.form-row label {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_h6_font_font_size'] - 1) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_product .button_to_cart_wrap .added_to_cart,
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_button_font_google_font']) . $cmsmasters_option['sports-store' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['sports-store' . '_button_font_text_transform'] . ";
	}
	
	.widget_price_filter .price_slider_amount .button,
	.widget_shopping_cart .buttons .button,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		font-size:" . ((int) $cmsmasters_option['sports-store' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['sports-store' . '_button_font_line_height'] - 10) . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_product_right_column .quantity .text {
		height:" . $cmsmasters_option['sports-store' . '_button_font_line_height'] . "px !important;
	}
	
	.cmsmasters_product .button_to_cart_wrap .added_to_cart,
	.cmsmasters_product .button_to_cart_wrap .button {
		font-size:13px;
		line-height:20px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . sports_store_get_google_font($cmsmasters_option['sports-store' . '_input_font_google_font']) . $cmsmasters_option['sports-store' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['sports-store' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['sports-store' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['sports-store' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['sports-store' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	

/***************** Finish WooCommerce Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('sports_store_theme_fonts_filter', 'sports_store_woocommerce_fonts');

