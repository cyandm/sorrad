<?php

/****************************** Required Files */
define( 'CYN_THEME_DIRECTORY', __DIR__ );
define( 'CYN_THEME_URI', get_stylesheet_directory_uri() );

//globals
require_once ( CYN_THEME_DIRECTORY . '/inc/cyn-global.php' );
require_once ( CYN_THEME_DIRECTORY . '/vendor/autoload.php' );

//classes
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-theme-init.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-customize.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-register.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-woocommerce.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-filters.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-ajax.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-mp3.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-persian.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-search.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/classes/cyn-rankmath.php' );


//instance classes
new cyn_theme_init( false, '1.0.2' );
new cyn_register();
new cyn_customize();
new cyn_filters();
new cyn_ajax();
new cyn_persian();
new cyn_search();
new cyn_rankmath();
$cyn_woocommerce = new cyn_woocommerce();


//functions
require_once ( CYN_THEME_DIRECTORY . '/inc/functions/cyn-general.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/functions/cyn-update-checker.php' );

//acf
include_once ( CYN_ACF_PATH . 'acf.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/functions/cyn-acf-fields.php' );
require_once ( CYN_THEME_DIRECTORY . '/inc/functions/cyn-acf.php' );


