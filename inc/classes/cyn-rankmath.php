<?php
class cyn_rankmath {
	public function __construct() {
		add_filter( 'rank_math/frontend/breadcrumb/args', [ $this, 'change_wrapper' ] );
	}


	function change_wrapper( $args ) {

		$args = [ 
			'delimiter' => '&nbsp;/&nbsp;',
			'wrap_before' => '<nav class="rank-math-breadcrumb"><div class="flex items-center gap-1 text-gray-300   [&_.last]:text-black">',
			'wrap_after' => '</div></nav>',
			'before' => '<span class="hover:text-black transition-colors">',
			'after' => '</span>',
		];

		return $args;
	}





}