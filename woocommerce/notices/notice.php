<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/notice.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $notices ) {
	return;
}

?>

<?php foreach ( $notices as $notice ) : ?>
	<div class="bg-blue-100 
	p-2 mb-4 rounded-md border-r-4
	 border-blue-600 text-blue-950 flex justify-between md:items-center flex-row max-md:flex-col 
	 [&_a]:!p-2
	 [&_a]:!border [&_a]:!border-solid [&_a]:!border-blue-700 max-md:[&_a]:!mt-2 [&_a]:!bg-white [&_a]:!text-sm [&_a]:!mr-auto [&_a]:!ml-0 [&_a]:!text-blue-700"
	 	<?php echo wc_get_notice_data_attr( $notice ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<?php echo wc_kses_notice( $notice['notice'] ); ?>
	</div>
<?php endforeach; ?>