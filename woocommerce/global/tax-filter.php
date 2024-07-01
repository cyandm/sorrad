<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$taxonomy = $args['tax'];

if ( empty( $taxonomy ) ) {
	return;
}

$taxonomy = get_taxonomy( $taxonomy );
$terms = get_terms( [ 
	'taxonomy' => $taxonomy->name
] );


?>

<div class="taxonomy_filter | toggle-tab">
	<div class="flex justify-between items-center px-2 toggle-opener cursor-pointer">
		<span class="text-lg">
			<?php printf( 'دسته بندی بر اساس %s', $taxonomy->labels->singular_name ) ?>
		</span>

		<svg class="icon">
			<use href="#icon-plus" />
		</svg>
	</div>

	<div class="toggle-opening | grid grid-rows-[0fr] transition-all">
		<div class="overflow-hidden ">

			<div class=" px-4 py-2 bg-gray-100 rounded-2xl mt-3">

				<?php if ( count( $terms ) > 10 ) : ?>

					<div id="<?php echo 'tax_' . $taxonomy->name . '_search' ?>"
						 class="taxonomy-search relative mb-2">

						<div>
							<div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
								<svg class="icon">
									<use href="#icon-Search" />
								</svg>
							</div>

							<input type="search"
								   class="search-form bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
								   placeholder="<?php printf( 'جستجو در %s', $taxonomy->labels->singular_name ) ?>"
								   name=""
								   id="">
						</div>
					</div>

				<?php endif; ?>


				<div class="search-items divide-y custom-scrollbar pe-2 max-h-80 overflow-auto">
					<?php foreach ( $terms as $index => $term ) :
						?>

						<div class="flex flex-row-reverse justify-start items-center gap-1 py-2">
							<span class="w-full">
								<?php echo $term->name ?>
							</span>

							<input type="checkbox"
							   	<?php echo ! empty( $_GET[ 'tax_' . $taxonomy->name . '_' . $term->term_id ] ) ? 'checked' : '' ?>
								   class="form-checkbox rounded"
								   name="<?php echo 'tax_' . $taxonomy->name . '_' . $term->term_id ?>">


						</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>