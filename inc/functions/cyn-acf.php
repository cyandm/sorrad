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

	//فیلدهای اضافی محصولات
	$fields = [ 
		cyn_acf_add_text( 'product_english_name', 'نام انگلیسی محصول' ),
		cyn_acf_add_options( 'gender', 'مردانه / زنانه', [ 'men', 'women' ] ),

	];
	$location = [ 
		[ 
			[ 
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			],
		],
	];

	cyn_register_acf_group( 'سایر فیلدها', $fields, $location );

	//فیلدهای صفحه اصلی
	$field_home = [ 
		cyn_acf_add_text( 'podcast_all_link', 'لینک مشاهده (همه پادکست ها)' ),
		cyn_acf_add_text( 'blog_all_link', 'لینک مشاهده (همه مقالات)' ),
		cyn_acf_add_text( 'banner_center_link', 'لینک مشاهده (بنر وسط صفحه)' ),
		cyn_acf_add_text( 'banner_center_toptext', ' متن بالا (بنر وسط صفحه)' ),
		cyn_acf_add_text( 'banner_center_centertext', 'متن وسط (بنر وسط صفحه)' ),
		//cyn_acf_add_post_object( 'best_time_cat', 'دسته بندی ردیف دوم', 'product'),
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

	cyn_register_acf_group( 'متن بنر وسط صفحه و لینک های مشاهده', $field_home, $location_home );

	//ردیف اول بعد اسلایدر در صفحه اصلی
	$field_home = [ 
		cyn_acf_add_text( 'title_box_one', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_one', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_one', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_one', 'تک محصول سمت چپ', 'product'),
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

	cyn_register_acf_group( 'ردیف اول بعداز اسلایدر', $field_home, $location_home );

	//ردیف دوم بعد اسلایدر در صفحه اصلی
	$field_home_two = [ 
		cyn_acf_add_text( 'title_box_two', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_two', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_two', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_two', 'تک محصول اول', 'product'),
		cyn_acf_add_post_object( 'product_two_box_two', 'تک محصول دوم', 'product'),
	];
	$location_home_two = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'ردیف دوم  بعداز اسلایدر', $field_home_two, $location_home_two );

	//ردیف سوم بعد اسلایدر در صفحه اصلی
	$field_home_three = [ 
		cyn_acf_add_text( 'title_box_three', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_three', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_three', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_three', 'تک محصول اول', 'product'),
		cyn_acf_add_post_object( 'product_two_box_three', 'تک محصول دوم', 'product'),
	];
	$location_home_three = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'ردیف سوم محصولات  بعداز اسلایدر', $field_home_three , $location_home_three );



	//ردیف چهارم بعد اسلایدر در صفحه اصلی
	$field_home_four = [ 
		cyn_acf_add_text( 'title_box_four', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_four', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_four', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_four', 'تک محصول اول', 'product'),
		cyn_acf_add_post_object( 'product_two_box_four', 'تک محصول دوم', 'product'),
	];
	$location_home_four = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'ردیف چهارم محصولات  بعداز اسلایدر', $field_home_four , $location_home_four );

	//ردیف پنجم بعد اسلایدر در صفحه اصلی
	$field_home_five = [ 
		cyn_acf_add_text( 'title_box_five', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_five', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_five', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_five', 'تک محصول اول', 'product'),
		cyn_acf_add_post_object( 'product_two_box_five', 'تک محصول دوم', 'product'),
	];
	$location_home_five = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'ردیف پنجم محصولات  بعداز اسلایدر', $field_home_five , $location_home_five );

	//ردیف ششم بعد اسلایدر در صفحه اصلی
	$field_home_six = [ 
		cyn_acf_add_text( 'title_box_six', 'عنوان باکس' ),
		cyn_acf_add_text( 'subtitle_box_six', 'متن زیر عنوان' ),
		cyn_acf_add_text( 'morebtn_box_six', 'لینک مشاهده عطرها' ),
		cyn_acf_add_post_object( 'product_one_box_six', 'تک محصول اول', 'product'),
		cyn_acf_add_post_object( 'product_two_box_six', 'تک محصول دوم', 'product'),
	];
	$location_home_six = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home-template.php',
			],
		],
	];

	cyn_register_acf_group( 'ردیف ششم محصولات  بعداز اسلایدر', $field_home_six , $location_home_six );


	//فیلدهای صفحه درباره ما
	$field_about = [
		cyn_acf_add_text( 'about_title_top', 'متن عنوان بالا' ),
		cyn_acf_add_text( 'about_title_bottom', 'متن زیر عنوان صفحه' ),
		cyn_acf_add_image( 'gallery_img_one', 'تصویر بزرگ سمت چپ' ),
		cyn_acf_add_image( 'gallery_img_two', 'تصویر بالا سمت راست' ),
		cyn_acf_add_image( 'gallery_img_three', 'تصویر پایین سمت راست' ),
	];
	$location_about = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about-template.php',
			],
		],
	];

	cyn_register_acf_group( 'گالری تصاویر', $field_about, $location_about );

}



