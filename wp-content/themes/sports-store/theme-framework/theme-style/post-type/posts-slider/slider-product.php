<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.3
 * 
 * Posts Slider Product Template
 * Created by CMSMasters
 * 
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


$cmsmasters_metadata = explode(',', $cmsmasters_product_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$rating = in_array('rating', $cmsmasters_metadata) ? true : false;
$price = in_array('price', $cmsmasters_metadata) ? true : false;
$categories = (get_terms(get_the_ID(), 'pr-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;

$attachment_ids = $product->get_gallery_image_ids();


// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;
	

if ( ! isset( $classes ) ) 
	$classes = '';


if (defined('YITH_WCQV_PREMIUM')) {
	$position = get_option('yith-wcqv-button-position');
}

?>
<!--  Start Posts Slider Product Article  -->
<article <?php post_class( $classes ); ?>>
	<div class="cmsmasters_product">
	<?php
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
	
	do_action( 'woocommerce_before_shop_loop_item' );
	?>
	<figure class="cmsmasters_product_img">
		<a href="<?php the_permalink(); ?>">
			<?php 
			if (has_post_thumbnail()) {
				woocommerce_template_loop_product_thumbnail();
			}
			
			
			if ($attachment_ids) {
				$attachment_id = $attachment_ids[0];
				
				$image = wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_catalog'));
				
				echo apply_filters('woocommerce_single_product_image_thumbnail_html', sprintf($image));
			}
			
			
			if (!has_post_thumbnail() && !$attachment_ids) {
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
		
		remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
		remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
		
		if(CMSMASTERS_WCQV) {
			remove_action( 'woocommerce_before_shop_loop_item_title', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
		}
		
		do_action( 'woocommerce_before_shop_loop_item_title' );
		
		
		remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
		
		do_action( 'woocommerce_shop_loop_item_title' );
		
		if ($title) {
		?>
			<header class="cmsmasters_product_header entry-header">
				<h5 class="cmsmasters_product_title entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
			</header>
		<?php
		}
		
		
		if ($categories && get_the_terms($product->get_id(), 'product_cat')) {
			echo '<div class="cmsmasters_product_cat entry-meta">' . 
				sports_store_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
			'</div>';
		}
		?>
		<div class="cmsmasters_product_info">
		<?php
			if ($price) {
				woocommerce_template_loop_price();
			}
			
			
			if ($rating) {
				sports_store_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
			}
			
			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
			remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
			
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		</div>
	</div>
	<?php
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
	</div>
</article>
<!--  Finish Posts Slider Product Article  -->

