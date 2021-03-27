<?php
/**
 * @cmsmasters_package 	Sports Store
 * @cmsmasters_version 	1.0.8
 */


global $product;

$attachment_ids = $product->get_gallery_image_ids();

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<article class="cmsmasters_product">
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
		
		do_action( 'woocommerce_before_shop_loop_item' );
		?>
		<figure class="cmsmasters_product_img">
			<a href="<?php the_permalink(); ?>">
				<?php 
				if ($product->get_image_id()) {
					woocommerce_template_loop_product_thumbnail();
				}
				
				
				if ($attachment_ids) {
					$attachment_id = $attachment_ids[0];
					
					$image = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_catalog'));
					
					echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf($image));
				}
				
				
				if (!$product->get_image_id() && !$attachment_ids) {
					echo '<span class="img_placeholder cmsmasters_theme_icon_image"></span>';
				}
				?>
			</a>
			<?php 
				woocommerce_show_product_loop_sale_flash();
				
				$availability = $product->get_availability();

				if (esc_attr($availability['class']) == 'out-of-stock') {
					echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '"><span>' . esc_html( $availability['availability'] ) . '</span></span>', $availability['availability']);
				}
				
				
				sports_store_woocommerce_add_to_cart_button();
			?>
		</figure>
		<div class="cmsmasters_product_inner">
			<?php
			if (CMSMASTERS_WCQV || CMSMASTERS_WCWL || CMSMASTERS_WOOCOMPARE || CMSMASTERS_WCCL) {
				echo '<div class="cmsmasters_product_features">';
				
					/* WooCommerce Color Variations */
					if (CMSMASTERS_WCCL) {
						sports_store_color_label_variations();
					}
					
					/* WooCommerce Quick View add to button */
					if (CMSMASTERS_WCQV) {
						sports_store_quick_view_button();
					}
					
					/* WooCommerce Compare button */
					if(CMSMASTERS_WOOCOMPARE) {
						if (get_option('yith_woocompare_compare_button_in_products_list') == 'yes') {
							sports_store_compare_button('list');
						}
					}
					
					/* WooCommerce Wishlist add to button */
					if (CMSMASTERS_WCWL) {
						sports_store_add_wishlist_button();
					}
				
				echo '</div>';
			}
			
			
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			
			if(CMSMASTERS_WCQV) {
				remove_action( 'woocommerce_before_shop_loop_item_title', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
			}
			
			do_action( 'woocommerce_before_shop_loop_item_title' );
			
			
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
			
			do_action( 'woocommerce_shop_loop_item_title' );
			?>
			<header class="cmsmasters_product_header entry-header">
				<h5 class="cmsmasters_product_title entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
			</header>
			<?php
			if (get_the_terms($product->get_id(), 'product_cat')) {
				echo '<div class="cmsmasters_product_cat entry-meta">' . 
					sports_store_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
				'</div>';
			}
			?>
			<div class="cmsmasters_product_info">
			<?php
				woocommerce_template_loop_price();
				
				
				sports_store_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
				
				
				/**
				 * Hook: woocommerce_after_shop_loop_item_title.
				 *
				 * @hooked woocommerce_template_loop_rating - 5
				 * @hooked woocommerce_template_loop_price - 10
				 */
				remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
				remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
				
				do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			</div>
		</div>
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
		
		
		if(CMSMASTERS_WCQV) {
			remove_action( 'woocommerce_after_shop_loop_item', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
		}
		
		
		if(CMSMASTERS_WOOCOMPARE) {
			global $yith_woocompare;
			
			$compare = $yith_woocompare->obj;
			
			if (get_option('yith_woocompare_compare_button_in_products_list') == 'yes') {
				remove_action('woocommerce_after_shop_loop_item', array($compare, 'add_compare_link'), 20);
			}
		}
		
		
		do_action( 'woocommerce_after_shop_loop_item' );
		?>
	</article>
</li>