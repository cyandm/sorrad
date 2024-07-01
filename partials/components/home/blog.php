<?php
$query = new WP_Query( [ 
	'post_type' => 'post',
	'posts_per_page' => 3,
] );

?>

<section class="my-7 container ">
	<div class="flex flex-col">
		<h2 class="text-title_2 font-normal lg:text-title_1 order-1">چی از دنیای عطر باید بدونی</h2>

		<a href="<?= get_post_type_archive_link( 'post' ) ?>"
		   class="flex items-center gap-2 order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">
			<span>
				بلاگ ها
			</span>

			<svg class="icon -rotate-90">
				<use href="#icon-Arrow,-Up-1" />
			</svg>

		</a>

		<div class="order-2 lg:order-3">
			<?php
			if ( $query->have_posts() ) : ?>

				<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-5">

					<?php while ( $query->have_posts() ) :
						$query->the_post();
						cyn_get_card( 'post' );
					endwhile;
					?>
				</div>

				<?php
			else :
				cyn_get_component( 'not-found', [ 'post-type' => 'post' ] );
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>