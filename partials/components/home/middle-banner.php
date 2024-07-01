<div class="container">
	<a href="<?php echo get_field( 'middle_banner_link' ) ?>">
		<?php echo wp_get_attachment_image( get_field( 'middle_banner' ), 'full', false, [ 'class' => 'w-full rounded-2xl' ] ) ?>
	</a>
</div>