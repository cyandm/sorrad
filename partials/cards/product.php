<?php

$postId = $args['post-id'] ?? get_the_ID();
$product = wc_get_product( $postId );

$cyn_woocommerce = new cyn_woocommerce();


?>

<a href="<?php echo get_permalink( $postId ) ?>">

	<div
		 class="relative transition-all duration-300 justify-between rounded-xl hover:shadow-cxl group overflow-hidden max-md:shadow-cxl max-md:flex max-md:flex-row-reverse">
		<?php echo wp_get_attachment_image( get_field( 'custom_thumbnail', $postId ), 'full', false, [ 'class' => 'relative -z-10 max-md:max-w-28 max-md:object-contain' ] ) ?>

		<div
			 class="md:translate-y-full transition-all group-hover:translate-y-0 duration-300 md:absolute p-4  md:bg-white/75 left-0 bottom-0 right-0 ">

			<div class="grid gap-2">
				<div>
					<?php echo get_the_title( $postId ) ?>
				</div>

				<div>
					<?php echo $product->get_price_html() ?>
				</div>

				<div>
					<?php $cyn_woocommerce->cyn_display_gender( $product ) ?>
				</div>
			</div>
		</div>
	</div>
</a>