<?php
$post_ID = $args['post-id'] ?? get_the_ID();
$rel = $args['rel'] ?? 'dofollow';
?>



<a rel="<?php echo $rel ?>"
   href="<?php echo get_permalink( $post_ID ) ?>"
   class="flex gap-3">
	<div>
		<div>
			<p class="text-lg font-semibold">
				<?php echo get_the_title( $post_ID ) ?>
			</p>

			<p class="text-gray-500 line-clamp-2">
				<?php echo cyn_limit_str( get_the_excerpt( $post_ID ), 15 ) ?>
			</p>
		</div>

		<div class="flex justify-between text-gray-500 pt-2">

			<div>
				<?php echo get_the_date() ?>
			</div>

			<div>
				<?php echo get_the_author() ?>
			</div>
		</div>
	</div>

	<div>
		<?php echo get_the_post_thumbnail( $post_ID, [ 100, 100 ], [ 'class' => 'rounded-md min-w-[100px]' ] ) ?>
	</div>

</a>