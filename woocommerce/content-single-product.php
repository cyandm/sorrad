<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$terms = get_the_terms( $product->get_id(), 'product_cat' );
$perfume_cat = get_term_by( 'slug', 'perfume', 'product_cat' );

$is_perfume = in_array( $perfume_cat, $terms );



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


			<?php if ( $is_perfume ) : ?>
				<div class="p-5 border rounded-2xl max-lg:text-sm max-md:text-xs">
					<?php _e( 'تمامی عطر ها "ساخت اختصاصی" برند سراد هستند. ', 'cyn-dm' ) ?>
				</div>
			<?php endif; ?>

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
			 * @hooked woocommerce_template_single_rating - 10 @removed by CYAN
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

	<?php if ( $is_perfume ) : ?>
		<div>
			<?php wc_get_template( 'single-product/notes.php' ) ?>
		</div>
	<?php endif; ?>


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

	<?php //call_user_func( 'comments_template' ) ?>

</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>