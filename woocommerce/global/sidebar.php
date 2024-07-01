<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="space-y-4 sticky top-0">
	<?php wc_get_template( 'global/category-drop-down.php' ) ?>


	<div class="">
		<?php
		/**
		 * Hook: cyn_woocommerce_filters.
		 * @hooked CYN_FILTERS:wrapper-start - 5
		 * @hooked CYN_FILTERS:display_in_stock - 10
		 * @hooked CYN_FILTERS:wrapper-end - 100
		 */

		do_action( 'cyn_woocommerce_filters' );
		?>
	</div>



</div>


<?php

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
