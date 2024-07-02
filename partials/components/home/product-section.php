<?php
if ( empty( $args ) )
	return;


$title = get_field( $args['group'] . '_title', $args['post-id'] );
$description = get_field( $args['group'] . '_description', $args['post-id'] );
$products = get_field( $args['group'] . '_products', $args['post-id'] );
$link = get_field( $args['group'] . '_link', $args['post-id'] );

$direction = $args['direction'] ?? 'ltr';



if ( empty( $title ) || empty( $description ) || empty( $products ) || empty( $link ) )
	return;

?>



<section class="mb-20 max-w-full my-7">
	<div class="container">
		<div
			 class="flex gap-4 flex-col items-center <?php echo $direction === 'ltr' ? 'lg:flex-row' : 'lg:flex-row-reverse' ?>">
			<div class="flex-1">
				<h2 class="text-title_2 font-normal lg:text-title_1">
					<?php echo $title ?>
				</h2>
				<p class="mt-2 mb-6 text-gray-700">
					<?php echo $description ?>
				</p>
				<a href="<?php echo $link ?>"
				   class="group hidden lg:flex items-center justify-end gap-2 order-3 lg:order-2 mt-4 mb-6 lg:text-left">
					<span>
						مشاهده عطرها
					</span>
					<svg class="icon -rotate-90 transition-all group-hover:-translate-x-2">
						<use href="#icon-Arrow,-Up-1" />
					</svg>
				</a>
			</div>

			<div class="flex-1 flex max-md:flex-col max-md:gap-2 w-full">
				<?php
				foreach ( $products as $index => $product ) :
					cyn_get_card( 'product', [ 'post-id' => $product ] );
				endforeach;
				?>
			</div>

			<a href="#"
			   class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها
				<svg class="icon -rotate-90 transition-all group-hover:-translate-x-2">
					<use href="#icon-Arrow,-Up-1" />
				</svg>
			</a>
		</div>
	</div>
</section>