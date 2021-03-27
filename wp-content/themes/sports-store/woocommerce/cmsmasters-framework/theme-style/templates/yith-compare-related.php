<?php
/**
 * @cmsmasters_package 	Sports Store
 * @cmsmasters_version 	1.0.3
 */

 
global $product;

$unique_id = uniqid();
?>
<div class="cmsmasters_woocompare_related" <?php if( $iframe ) echo 'data-iframe="1"' ?>>
	<h4 class="yith-woocompare-related-title"><?php echo esc_html($related_title); ?></h4>
	<div class="cmsmasters_woocompare_related_wrapper">
		<ul id="<?php echo esc_attr($unique_id); ?>" class="cmsmasters_related_products cmsmasters_owl_slider owl-carousel" data-items="3" data-single-item="false" data-auto-play="false" data-slide-speed="1000" data-pagination-speed="1000" data-pagination="false" data-navigation="false" data-auto-height="false">
			<?php foreach( $products as $product_id ) : $product = wc_get_product( $product_id ); ?>
				<li class="ralated-product cmsmasters_owl_slider_item">
					<article class="cmsmasters_product">
						<?php
						do_action( 'yith_woocompare_before_single_related_product' );
						?>
						<figure class="cmsmasters_product_img preloader">
							<a href="<?php the_permalink($product->get_id()); ?>">
								<?php
									wc_get_template( 'loop/sale-flash.php' );
									echo wp_kses_post($product->get_image('shop_catalog'));
								?>
							</a>
							<?php
								sports_store_woocommerce_add_to_cart_button();
							?>
						</figure>
						<div class="cmsmasters_product_inner">
							<header class="cmsmasters_product_header entry-header">
								<h5 class="cmsmasters_product_title entry-title">
									<a href="<?php the_permalink($product->get_id()); ?>"><?php echo wp_kses_post($product->get_title()); ?></a>
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
							?>
							</div>
						</div>
						<?php
						do_action( 'yith_woocompare_after_single_related_product' );
						?>
					</article>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>