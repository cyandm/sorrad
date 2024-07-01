<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $notices ) {
	return;
}

?>

<?php foreach ( $notices as $notice ) : ?>
	<div class="bg-green-100 p-2 rounded-md border-r-4 border-green-600 text-green-950 flex justify-between items-center flex-row-reverse"
	 	<?php echo wc_get_notice_data_attr( $notice ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		 role="alert">
		<?php echo wc_kses_notice( $notice['notice'] ); ?>
	</div>
<?php endforeach; ?>