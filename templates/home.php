<?php
/* Template Name: Home Page */


get_header();

cyn_get_component( 'home/slider' );

cyn_get_component( 'home/product-section', [ 'group' => 'group_1', 'post-id' => get_the_ID(), 'direction' => 'ltr' ] );
cyn_get_component( 'home/product-section', [ 'group' => 'group_2', 'post-id' => get_the_ID(), 'direction' => 'rtl' ] );

cyn_get_component( 'home/middle-banner' );

cyn_get_component( 'home/product-section', [ 'group' => 'group_3', 'post-id' => get_the_ID(), 'direction' => 'ltr' ] );
cyn_get_component( 'home/product-section', [ 'group' => 'group_4', 'post-id' => get_the_ID(), 'direction' => 'rtl' ] );

cyn_get_component( 'home/podcasts' );

cyn_get_component( 'home/product-section', [ 'group' => 'group_5', 'post-id' => get_the_ID(), 'direction' => 'ltr' ] );
cyn_get_component( 'home/product-section', [ 'group' => 'group_6', 'post-id' => get_the_ID(), 'direction' => 'rtl' ] );

cyn_get_component( 'home/blog' );

cyn_get_component( 'home/faq' );

get_footer();