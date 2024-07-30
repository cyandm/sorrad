<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $notices ) {
	return;
}



?>

<?php foreach ( $notices as $notice ) : ?>
	<div class="
	bg-green-100 
	p-2 mb-4 rounded-md border-r-4 [&_a]:!p-2
	 border-green-600 text-green-950 flex justify-between items-center flex-row-reverse max-md:flex-col-reverse 
	 [&_a]:!border [&_a]:!border-solid [&_a]:!border-green-700 max-md:[&_a]:!mt-2 [&_a]:!bg-white [&_a]:!text-sm [&_a]:!mr-auto [&_a]:!ml-0 [&_a]:!text-green-700"
	 	<?php echo wc_get_notice_data_attr( $notice ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		 role="alert">

		<?php echo wc_kses_notice( $notice['notice'] ); ?>
	</div>
<?php endforeach; ?>