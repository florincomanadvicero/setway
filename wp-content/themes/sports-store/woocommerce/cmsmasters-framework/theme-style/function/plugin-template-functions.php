<?php 
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.1.1
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function sports_store_woocommerce_cart_dropdown($cmsmasters_option) {
	if (
		$cmsmasters_option['sports-store' . '_header_styles'] != 'c_nav' &&
		isset($cmsmasters_option['sports-store' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['sports-store' . '_woocommerce_cart_dropdown']
	) {
		global $woocommerce;
		
		
		$cart_link = wc_get_cart_url();
		
		
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		
		$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
		
		
		$cart_currency_symbol = get_woocommerce_currency_symbol();
		
		$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
		
		$cart_currency = $cart_currency_symbol;
		
		
		if ($cart_currency_symbol_pos == 'left_space') {
			$cart_currency = $cart_currency_symbol . ' ';
		} elseif ($cart_currency_symbol_pos == 'right_space') {
			$cart_currency = ' ' . $cart_currency_symbol;
		}
		
		
		$cart_price = str_replace($cart_currency, '', $cart_subtotal);
		
		
		$cart_subtotal_html = '';
		
		
		if ($cart_currency_symbol_pos == 'left') {
			$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>' . esc_html($cart_price);
		} elseif ($cart_currency_symbol_pos == 'right') {
			$cart_subtotal_html .= esc_html($cart_price) . '<span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
		} elseif ($cart_currency_symbol_pos == 'left_space') {
			$cart_subtotal_html .= '<span class="currency">' . esc_html($cart_currency_symbol) . '</span> ' . esc_html($cart_price);
		} elseif ($cart_currency_symbol_pos == 'right_space') {
			$cart_subtotal_html .= esc_html($cart_price) . ' <span class="currency">' . esc_html($cart_currency_symbol) . '</span>';
		}
		
		
		echo '<div class="cmsmasters_dynamic_cart">' .  
			'<a href="' . esc_url($cart_link) . '" class="cmsmasters_dynamic_cart_button"><span class="cmsmasters_theme_icon_basket">' . esc_html($cart_count) . '</span></a>' . 
			'<span class="cmsmasters_dynamic_cart_button_hide"></span>' . 
			'<div class="widget_shopping_cart_content"></div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_header_mid_search', 'sports_store_woocommerce_cart_dropdown');


/* Add to Cart Button */
function sports_store_woocommerce_add_to_cart_button($args = array()) {
	global $product;
	
	if ( $product ) {
		$defaults = array(
			'quantity' => 1,
			'class'    => implode( ' ', array_filter( array(
					'button',
					'product_type_' . $product->get_type(),
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button cmsmasters_add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) )
		);

		$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );
		
		extract($args);
		
		echo '<div class="button_to_cart_wrap">' . 
		sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_html( $product->add_to_cart_text() )
		) . 
		'</div>';
	}
}


/* Rating */
function sports_store_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"//schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'sports-store'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" data-width=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'sports-store') . "</span>
</div>
";
	
	
	if ($show) {
		echo sports_store_return_content($out);
	} else {
		return $out;
	}
}


/* Price Format */
function sports_store_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'sports_store_woocommerce_price_format', 1, 2);


/* WooCommerce Onsale Filter */
add_filter('woocommerce_sale_flash', 'sports_store_woocommerce_change_on_sale');

function sports_store_woocommerce_change_on_sale() {
	return '<span class="onsale"><span>' . esc_html__('Sale!', 'sports-store') . '</span></span>';
}


/* WooCommerce Dynamic cart count update after ajax */
function sports_store_woocommerce_header_add_to_cart_count($dynamic_count) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span class="cmsmasters_theme_icon_basket"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
	<?php
	
	$dynamic_count['.cmsmasters_dynamic_cart_button span'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('woocommerce_add_to_cart_fragments', 'sports_store_woocommerce_header_add_to_cart_count');

