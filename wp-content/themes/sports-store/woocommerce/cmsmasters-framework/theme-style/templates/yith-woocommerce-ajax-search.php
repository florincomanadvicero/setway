<?php
/**
 * @cmsmasters_package 	Sports Store
 * @cmsmasters_version 	1.0.6
 */
 

wp_enqueue_script('yith_wcas_frontend' );


if ( defined( 'YITH_WCAS_PREMIUM' ) ) {

	$research_post_type = ( get_option('yith_wcas_default_research') ) ? get_option('yith_wcas_default_research') : 'product';
	
	?>
	<div class="yith-ajaxsearchform-container cmsmasters_ajax_search_premium">
		<form method="get" id="yith-ajaxsearchform" action="<?php echo esc_url( home_url( '/' ) ) ?>">
			<div class="yith-ajaxsearchform-container">
				<div class="yith-ajaxsearchform-select">
				<?php
				if ( get_option( 'yith_wcas_show_search_list' ) == 'yes' ):

					$selected_search = ( isset( $_REQUEST['post_type'] ) ) ? $_REQUEST['post_type'] : $research_post_type; ?>

					<select class="yit_wcas_post_type selectbox" id="yit_wcas_post_type" name="post_type">
						<option value="product" <?php selected( 'product', $selected_search ) ?>><?php _e( 'Products', 'sports-store' ) ?></option>
						<option value="any" <?php selected( 'any', $selected_search ) ?>><?php _e( 'All', 'sports-store' ) ?></option>
					</select>

				<?php else: ?>
					<input type="hidden" name="post_type" class="yit_wcas_post_type" id="yit_wcas_post_type" value="<?php echo esc_attr($research_post_type) ?>" />
				<?php endif; ?>

				<?php
				if ( get_option( 'yith_wcas_show_category_list' ) == 'yes' ):

					$product_categories = yith_wcas_get_shop_categories( get_option( 'yith_wcas_show_category_list_all' ) == 'all' );

					$selected_category = ( isset( $_REQUEST['product_cat'] ) ) ? $_REQUEST['product_cat'] : '';

					if ( !empty( $product_categories ) ) : ?>
						<select class="search_categories selectbox" id="search_categories" name="product_cat">
							<option value="" <?php selected( '', $selected_category ) ?>><?php _e( 'All', 'sports-store' ) ?></option>
							<?php foreach ( $product_categories as $cat ): ?>
								<option value="<?php echo esc_attr($cat->slug) ?>" <?php selected( $cat->slug, $selected_category ) ?>><?php echo esc_html($cat->name); ?></option>
							<?php endforeach; ?>
						</select>
					<?php endif ?>

				<?php endif ?>
				</div>
				<div class="search-navigation_wrap">
					<div class="search-navigation">
						<label class="screen-reader-text" for="yith-s"><?php _e( 'Search for:', 'sports-store' ) ?></label>
						<input type="search"
							   value="<?php echo get_search_query() ?>"
							   name="s"
							   id="yith-s"
							   class="yith-s <?php if (get_option( 'yith_wcas_search_submit_label' ) == '') { echo 'empty'; } ?>"
							   placeholder="<?php echo get_option( 'yith_wcas_search_input_label' ) ?>"
							   data-append-to=".search-navigation"
							   data-loader-icon="<?php echo str_replace( '"', '', apply_filters( 'yith_wcas_ajax_search_icon', '' ) ) ?>"
							   data-min-chars="<?php echo get_option( 'yith_wcas_min_chars' ); ?>" />

					</div>
					<button type="submit" id="yith-searchsubmit"><?php echo get_option( 'yith_wcas_search_submit_label' ) ?></button>
				</div>

				<?php do_action( 'wpml_add_language_form_field' ); ?>
			</div>
		</form>
	</div>
	<?php
} else {
	?>
	<div class="yith-ajaxsearchform-container cmsmasters_ajax_search_free">
		<form method="get" id="yith-ajaxsearchform" action="<?php echo esc_url( home_url( '/'  ) ) ?>">
			<div>
				<label class="screen-reader-text" for="yith-s"><?php _e( 'Search for:', 'sports-store' ) ?></label>

				<input type="search"
					   value="<?php echo get_search_query() ?>"
					   name="s"
					   id="yith-s"
					   class="yith-s <?php if (get_option( 'yith_wcas_search_submit_label' ) == '') { echo 'empty'; } ?>"
					   placeholder="<?php echo get_option( 'yith_wcas_search_input_label' ) ?>"
					   data-loader-icon="<?php echo str_replace( '"', '', apply_filters( 'yith_wcas_ajax_search_icon', '' ) ) ?>"
					   data-min-chars="<?php echo get_option( 'yith_wcas_min_chars' ); ?>" />

				<button type="submit" id="yith-searchsubmit"><?php echo get_option( 'yith_wcas_search_submit_label' ) ?></button>
				<input type="hidden" name="post_type" value="product" />
				<?php do_action( 'wpml_add_language_form_field' ); ?>

			</div>
		</form>
	</div>
	<?php
}