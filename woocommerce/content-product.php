<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// $product_custom = $args['post-id'] ? wc_get_product( $args['post-id'] ) : 0;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>


<div <?php wc_product_class( sprintf( 'rounded-xl shadow-cxl hover:shadow-md transition duration-500 p-6 max-md:p-2 %s', $product->is_in_stock() ? '' : 'grayscale' ), $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>

	<div class="max-md:max-w-[35%]">
		<?php wc_get_template( 'loop/image.php' ) ?>
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item_title.
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10 @remove by cyan
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
	</div>

	<div class="max-md:min-h-full max-md:w-full max-md:flex max-md:flex-col max-md:justify-between">
		<?php
		/**
		 * Hook: woocommerce_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_product_title - 10
		 */
		// do_action( 'woocommerce_shop_loop_item_title' );
		?>

		<?php
		echo '<h2 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title( $product->get_id() ) . '</h2>';
		?>

		<div class="text-xs md:text-sm text-gray-400">
			<?php echo get_field( 'english_name', $product->get_id() ) ?>
		</div>

		<div class="flex justify-between items-center">
			<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 * @hooked @cyan-add
			 */
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
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</div>