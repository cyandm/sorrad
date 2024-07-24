<?php
$query = new WP_Query( [ 
	'post_type' => 'podcast',
	'posts_per_page' => 4,
] );


?>

<?php if ( $query->have_posts() ) : ?>
	<section>
		<div class="container my-16 flex flex-col mx-auto">
			<h2 class="text-title_2 font-normal lg:text-title_1 order-1">اینبار نت های عطر رو با گوش بشنو</h2>

			<a href="<?= esc_url( get_post_type_archive_link( 'podcast' ) ); ?>"
			   class="flex items-center gap-2 order-3 lg:order-2 mt-4 mb-6 ">
				<span>
					همه پادکست ها
				</span>

				<svg class="icon -rotate-90">
					<use href="#icon-Arrow,-Up-1" />
				</svg>
			</a>

			<div class="order-2 lg:order-3">
				<?php

				if ( $query->have_posts() ) :
					?>
					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 lg:gap-5  ">
						<?php
						while ( $query->have_posts() ) {
							$query->the_post();
							cyn_get_card( 'podcast', [ 'post-id' => get_the_ID() ] );
						}
						?>
					</div>
				<?php else : ?>

					<div>
						<?php cyn_get_component( 'not-found', [ 'post-type' => 'podcast' ] ); ?>
					</div>

				<?php endif;
				wp_reset_postdata();

				?>
			</div>
			<div />
	</section>
<?php endif;