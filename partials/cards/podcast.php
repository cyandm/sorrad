<?php
$postID = $args['post-id'] ?? get_the_ID();

$file = get_field( 'podcast_file', $postID );

if ( empty( $file ) )
	return;

$mp3 = new MP3File( get_attached_file( is_array( $file ) ? $file['id'] : $file ) );
$time = gmdate( "i:s", $mp3->getDurationEstimate() );


?>

<div
	 class="my-2 lg:my-0 border-b border-egray lg:border-b-0 pb-5 lg:pb-0 items-center flex lg:block gap-4 justify-between">
	<a href="<?= get_the_permalink(); ?>"
	   class="rounded-lg lg:rounded-3xl overflow-hidden relative order-2 lg:order-1 w-[60%] md:w-[30%} lg:w-full block max-w-[95px] lg:max-w-[100%]">
		<?php if ( has_post_thumbnail() ) :

			the_post_thumbnail( 'full', [ 'class' => 'w-full h-full' ] );

		endif; ?>

		<div
			 class="h-full absolute top-0 w-full flex justify-center lg:justify-between p-3  items-center lg:items-start">
			<div class="hidden lg:block bg-white/70 text-gray-700 px-2 py-1 rounded-2xl">
				<?= $time ?>
			</div>

			<svg class="icon size-9 text-white bg-white/25 rounded-full">
				<use href="#icon-Play" />
			</svg>

		</div>
	</a>
	<div class="">
		<h3 class="text-primary text-base my-1 lg:my-2"><a href="<?= get_the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<p class="text-gray-400 text-xs"><?= $excerpt; ?></p>
		<div class="flex lg:hidden justify-between items-center py-2 text-gray-400 text-xs">
			<div><?= get_the_date(); ?></div>
			<div><?= $time; ?></div>
		</div>
	</div>
</div>