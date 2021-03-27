<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version 	1.0.6
 * 
 * Yith WooCommerce Color and Label Variations Plugin Functions
 * Created by CMSMasters
 * 
 */


/* Yith WooCommerce Color and Label Variations Shop page Buttons */
function sports_store_color_label_variations($html = '') {
	global $product;
	

	if( ( isset( $product ) && get_post_type( $product ) && !$product->is_type('variable') )
		|| get_option( 'yith-wccl-enable-in-loop' ) != 'yes'
		|| ( isset( $_REQUEST[ 'action' ] ) && $_REQUEST['action'] == 'yith-woocompare-view-table' ) ) {
		return $html;
	}

	$attributes = $product->get_variation_attributes();

	$inputbox = '';

	if( class_exists( 'WooCommerce_Thumbnail_Input_Quantity' ) ) {
		$incremental = new WooCommerce_Thumbnail_Input_Quantity();
		$inputbox = $incremental->print_input_box(null);
	}
	
	// get default attributes
	$selected_attributes = is_callable( array( $product, 'get_default_attributes' ) ) ? $product->get_default_attributes() : $product->get_variation_default_attributes();
	
	$template_args = apply_filters( 'yith_wccl_variable_loop_template_attr', array(
		'product'               => $product,
		'available_variations'  => $product->get_available_variations(),
		'attributes'   			=> $attributes,
		'selected_attributes' 	=> $selected_attributes,
		'attributes_types'      => YITH_WCCL_Frontend()->get_variation_attributes_types( $attributes )
	) );
	

	ob_start();
	
	extract($template_args);
	
	if ( ! empty( $available_variations ) ) : 
	
		?>

		<div class="variations_form cart in_loop" data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">
			<?php foreach ( $attributes as $name => $options ) :
				
				if (isset($attributes_types[$name])) {
					
					// check for default attribute
					if ( isset( $selected_attributes[ sanitize_title( $name ) ] ) ) {
						$selected_value = $selected_attributes[ sanitize_title( $name ) ];
					} else {
						$selected_value = '';
					}
					
					// colorpicker, label, image
					
					?>
					<div class="<?php echo 'variations ' . sanitize_title( $name ); ?>">
						<select id="<?php echo esc_attr( sanitize_title( $name ) ); ?>" name="attribute_<?php echo sanitize_title( $name ); ?>" data-attribute_name="attribute_<?php echo sanitize_title( $name ); ?>"
							<?php if( isset( $attributes_types[$name] ) ) echo 'data-type="' . $attributes_types[$name] . '"'; ?> data-default_value="<?php echo esc_attr( $selected_value ); ?>">
							<option value=""><?php echo __( 'Choose an option', 'sports-store' ) ?>&hellip;</option>
							<?php

							if ( is_array( $options ) ) {

								// Get terms if this is a taxonomy - ordered
								if ( taxonomy_exists( $name ) ) {

									$terms = wc_get_product_terms( $product->get_id(), $name, array( 'fields' => 'all' ) );

									foreach ( $terms as $term ) {
										if ( ! in_array( $term->slug, $options ) ) {
											continue;
										}
										$value    = ywccl_get_term_meta( $term->term_id, $name . '_yith_wccl_value');
										$tooltip  = ywccl_get_term_meta( $term->term_id, $name . '_yith_wccl_tooltip');
										echo '<option value="' . esc_attr( $term->slug ) . '"' . selected( sanitize_title( $selected_value ), sanitize_title( $term->slug ), false ) . ' data-value="'. $value . '" data-tooltip="' . $tooltip . '">' . apply_filters( 'woocommerce_variation_option_name', $term->name ) . '</option>';
									}
								} else {

									foreach ( $options as $option ) {
										echo '<option value="' . esc_attr( $option ) . '"' . selected( sanitize_title( $selected_value ), sanitize_title( $option ), false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>';
									}
								}
							}
							?>
						</select>
					</div>
				<?php
				}
				
				
			endforeach;?>
		</div>

	<?php endif;
	
	$form = ob_get_clean();


	$html = $inputbox . $form;
	
	echo sports_store_return_content($html);
}
