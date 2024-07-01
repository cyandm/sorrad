<?php
$postId = $args['post-id'] ?? get_the_ID();

?>

<a href="<?php echo get_field( 'url', $postId ) ?>"
   class="relative max-h-full">
	<?php
	if ( has_post_thumbnail() ) :
		echo wp_get_attachment_image( get_post_thumbnail_id(), 'full', false, [ 'class' => 'max-h-full object-cover' ] );
	else :
		echo 'لطفا تصویر انتخاب نمایید!';
	endif;
	?>

	<?php if ( ! empty( get_the_title() ) ) : ?>
		<div class="w-full absolute bottom-0 bg-darkgreen bg-white/15 backdrop-blur text-center py-4 text-white">
			<h2 class="text-xl lg:text-5xl text-medium">
				<?= get_the_title(); ?>
			</h2>
			<div class="">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endif; ?>
</a>