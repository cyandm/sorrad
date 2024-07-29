<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$products = get_posts( array(
	'post_type' => 'product',
	'post_status' => 'publish',
	'orderby' => 'meta_value_num',
	'meta_key' => '_price',
	'posts_per_page' => -1,
) );

$highest = $products[ array_key_first( $products ) ];
$lowest = $products[ array_key_last( $products ) ];

$highest_price = get_post_meta( $highest->ID, '_price', true );
$lowest_price = get_post_meta( $lowest->ID, '_price', true );
?>


<div class="toggle-tab">
	<div class="flex justify-between items-center px-2 | toggle-opener cursor-pointer">
		<span class="text-lg">
			<?php printf( 'بر اساس %s', 'قیمت' ) ?>
		</span>
		<svg class="icon">
			<use href="#icon-plus" />
		</svg>
	</div>


	<div class=" toggle-opening grid grid-rows-[0fr] transition-all">

		<div class="overflow-hidden">
			<div class=" space-y-4 my-3 px-2s">
				<div class="">
					<div class="flex justify-between items-center">
						<label for="minPrice"
							   class="text-sm">حداقل قیمت</label>

						<div>
							<input id="minPriceText"
								   class="max-w-28"
								   type="number"
								   value="<?php echo $_GET['minPrice'] ?? $lowest_price ?>">


							<span>تومان</span>
						</div>



					</div>
					<input id="minPrice"
						   dir="ltr"
						   min="<?php echo $lowest_price ?>"
						   max="<?php echo $highest_price ?>"
						   step="1000"
						   name="minPrice"
						   value="<?php echo $_GET['minPrice'] ?? $lowest_price ?>"
						   type="range"
						   class="w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer form-range">

				</div>

				<div class="">
					<div class="flex justify-between items-center">

						<label for="maxPrice"
							   class="text-sm">حداکثر قیمت</label>
						<div>
							<input id="maxPriceText"
								   class="max-w-28"
								   type="number"
								   value="<?php echo $_GET['maxPrice'] ?? $lowest_price ?>">


							<span>تومان</span>
						</div>
					</div>
					<input id="maxPrice"
						   step="1000"
						   min="<?php echo $lowest_price ?>"
						   max="<?php echo $highest_price ?>"
						   dir="ltr"
						   name="maxPrice"
						   type="range"
						   value="<?php echo $_GET['maxPrice'] ?? $highest_price ?>"
						   class="w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer form-range">

				</div>
			</div>
		</div>
	</div>

</div>