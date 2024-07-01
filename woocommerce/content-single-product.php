<?php
defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>"
	 <?php wc_product_class( '', $product ); ?>>


	<div class="lg:hidden">
		<?php
		/**
		 * Hook: cyn_title.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 */

		do_action( 'cyn_title' )
			?>
	</div>




	<div class="grid grid-cols-2 max-lg:grid-cols-1 gap-6">
		<div class="image space-y-2 col-span-1">


			<div class="p-5 border rounded-2xl max-lg:text-sm max-md:text-xs">
				<?php _e( 'تمامی عطر ها "ساخت اختصاصی" برند سراد هستند. ', 'cyn-dm' ) ?>
			</div>

			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10 @removed by CYAN
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>

		<div class="col-span-1">

			<div class="max-lg:hidden">
				<?php
				/**
				 * Hook: cyn_title.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 */

				do_action( 'cyn_title' )
					?>
			</div>

			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5 @removed by CYAN
			 * @hooked cyn-woocommerce->woocommerce_template_table - 6 @added by CYAN
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10 @removed by CYAN
			 * @hooked woocommerce_template_single_excerpt - 20 @removed by CYAN
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40 @removed by CYAN
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>

	</div>

	<div>
		<?php wc_get_template( 'single-product/notes.php' ) ?>
	</div>


	<div>
		<?php wc_get_template( 'single-product/short-description.php' ) ?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10 @removed by CYAN
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>