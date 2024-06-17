<?php
require ( get_stylesheet_directory() . '/inc/libs/plugin-update-checker/plugin-update-checker.php' );
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/cyandm/sorrad/', //github theme
	get_stylesheet_directory(),
	'sorrad' //theme slug
);

//Set the branch that contains the stable release.
$updateChecker->setBranch( 'main' );

