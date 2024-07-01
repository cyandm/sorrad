<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = wc_get_theme_slug_for_templates();


switch ( $template ) {
	//@CYAN remove other themes
	//@CYAN add container class

	default:
		echo '<div id="primary" class="container content-area"><main id="main" class="site-main" role="main">';
		break;
}
