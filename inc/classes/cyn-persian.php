<?php

use HanifHefaz\Dcter\Dcter;

class cyn_persian {
	public function __construct() {
		add_filter( 'get_the_date', [ $this, 'change_georgian_to_persian' ], 10, 3 );
		add_filter( 'the_date', [ $this, 'change_georgian_to_persian' ], 10, 3 );

	}

	public function change_georgian_to_persian( $the_date, $d, $post ) {
		$jalaali_date = Dcter::GregorianToJalali( $post->post_date );
		return $jalaali_date;
	}


}