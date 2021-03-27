<?php
/**
 * @cmsmasters_package 	Sports Store
 * @cmsmasters_version 	1.0.6
 */


global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><span class="product_meta_title"><?php esc_html_e( 'SKU:', 'sports-store' ); ?> </span><span class="sku"><?php 
			if ($sku = $product->get_sku()) {
				echo sports_store_return_content($sku);
			} else {
				echo esc_html__( 'N/A', 'sports-store' );
			}
		?></span></span>
		
	<?php endif; ?>

	<?php
	if (get_the_terms($product->get_id(), 'product_cat')) {
		echo '<span class="posted_in">' . 
			'<span class="product_meta_title">' . esc_html(_n('Category:', 'Categories:', $cat_count, 'sports-store')) . '</span>' . 
			'<span class="product_meta_info">' . sports_store_get_the_category_list($product->get_id(), 'product_cat', ', ') . '</span>' . 
		'</span>';
	}
	?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as"><span class="product_meta_title">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'sports-store' ) . '</span><span class="product_meta_info">', '</span></span>' ); ?>
	
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
