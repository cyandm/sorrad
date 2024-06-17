<?php
add_action( 'acf/include_fields', 'cyn_register_acf' );

function cyn_register_acf() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	cyn_register_acf_company_settings();

}

function cyn_register_acf_company_settings() {
	//فیلد پادکست ها
	$fields = [ 
		cyn_acf_add_text( 'time_podcast', 'زمان پادکست' ),

	];
	$location = [ 
		[ 
			[ 
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'podcast',
			],
		],
	];

	cyn_register_acf_group( 'فیلدها', $fields, $location );

	//فیلدهای صفحه اصلی
	$field_home = [ 
		cyn_acf_add_text( 'podcast_all_link', 'لینک مشاهده (همه پادکست ها)' ),
		cyn_acf_add_text( 'blog_all_link', 'لینک مشاهده (همه مقالات)' ),
		cyn_acf_add_text( 'banner_center_link', 'لینک مشاهده (بنر وسط صفحه)' ),
		cyn_acf_add_text( 'banner_center_toptext', ' متن بالا (بنر وسط صفحه)' ),
		cyn_acf_add_text( 'banner_center_centertext', 'متن وسط (بنر وسط صفحه)' ),
	];
	$location_home = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'فیلدها', $field_home, $location_home );


	//فیلدهای صفحه درباره ما
	$field_home = [
		cyn_acf_add_text( 'about_title_top', 'متن عنوان بالا' ),
		cyn_acf_add_text( 'about_title_bottom', 'متن زیر عنوان صفحه' ),
		cyn_acf_add_image( 'gallery_img_one', 'تصویر بزرگ سمت چپ' ),
		cyn_acf_add_image( 'gallery_img_two', 'تصویر بالا سمت راست' ),
		cyn_acf_add_image( 'gallery_img_three', 'تصویر پایین سمت راست' ),
	];
	$location_home = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about-template.php',
			],
		],
	];

	cyn_register_acf_group( 'گالری تصاویر', $field_home, $location_home );

}



