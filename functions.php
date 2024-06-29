<?php defined( 'ABSPATH' ) || exit; ?>

<?php

/****************************** Required Files */
//globals
require_once ( __DIR__ . '/inc/cyn-global.php' );

//classes
require_once ( __DIR__ . '/inc/classes/cyn-theme-init.php' );
require_once ( __DIR__ . '/inc/classes/cyn-customize.php' );
require_once ( __DIR__ . '/inc/classes/cyn-register.php' );

//functions
require_once ( __DIR__ . '/inc/functions/cyn-general.php' );
require_once ( __DIR__ . '/inc/functions/cyn-update-checker.php' );

//acf
include_once ( CYN_ACF_PATH . 'acf.php' );
require_once ( __DIR__ . '/inc/functions/cyn-acf-fields.php' );
require_once ( __DIR__ . '/inc/functions/cyn-acf.php' );

//instance classes
new cyn_theme_init( false, '0.0.0' );
new cyn_register();
new cyn_customize();

function add_id_to_headings($content) {
    // Regular expression to match all heading tags (h1-h6)
    $pattern = '/<h([1-6])>(.*?)<\/h\1>/i';
    $replacement = '<h$1 id="$2">$2</h$1>';

    // Add id attribute to each heading tag
    $content = preg_replace_callback($pattern, function ($matches) {
        $heading_level = $matches[1];
        $heading_text = sanitize_title($matches[2]);
        return '<h' . $heading_level . ' id="' . $heading_text . '">' . $matches[2] . '</h' . $heading_level . '>';
    }, $content);

    return $content;
}
add_filter('the_content', 'add_id_to_headings');

