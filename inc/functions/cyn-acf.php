<?php
add_action( 'acf/include_fields', 'cyn_register_acf' );

function cyn_register_acf() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	cyn_register_acf_product_settings();
	cyn_register_acf_product_notes();
	cyn_register_acf_product_cats();
	cyn_register_acf_slider();
	cyn_register_acf_home_page();
	cyn_register_acf_podcast();
	cyn_register_acf_posts();
	cyn_register_acf_about_us();
	cyn_register_acf_home_blog();
	cyn_register_acf_custom_thumb();
	cyn_register_acf_custom_shop();
}

function cyn_register_acf_product_settings() {
	$fields = [ 

		cyn_register_add_tax( 'first_notes', 'نت های ابتدایی', 'product_notes' ),
		cyn_register_add_tax( 'main_notes', 'نت های میانی', 'product_notes' ),
		cyn_register_add_tax( 'end_notes', 'نت های پایانی', 'product_notes' ),

		cyn_acf_add_image( 'custom_thumbnail', 'تصویر شاخص مخصوص صفحه اصلی' ),

		cyn_acf_add_text( 'english_name', 'نام انگلیسی' ),

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

	cyn_register_acf_group( 'تنظیمات محصولات', $fields, $location );

}

function cyn_register_acf_product_notes() {
	$fields = [ 

		cyn_acf_add_image( 'custom_image', 'تصویر شاخص' )

	];

	$location = [ 
		[ 
			[ 
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'product_notes',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات', $fields, $location );
}

function cyn_register_acf_product_cats() {

	$choices = [];
	$taxes = get_taxonomies( [
	], 'objects', 'or' );


	foreach ( $taxes as $tax => $tax_object ) {
		if ( str_contains( $tax, 'pa_' ) ) {
			$choices[ $tax ] = $tax_object->label;
		}
	}

	$choices['product_notes'] = 'نت های عطر';


	$fields = [ 
		cyn_acf_add_options( 'filters', 'انتخاب فیلتر ها', $choices, 1 ),
		cyn_acf_add_text( 'slogan', 'شعار' ),
	];

	$location = [ 
		[ 
			[ 
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'product_cat',
			],
		],
	];
	cyn_register_acf_group( 'تنظیمات دسته محصولات', $fields, $location );

}

function cyn_register_acf_slider() {
	$fields = [ 
		cyn_acf_add_text( 'url', 'لینک اسلایدر', 1 ),
	];

	$location = [ 
		[ 
			[ 
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );

}

function cyn_register_acf_home_page() {
	$fields = [ 
		cyn_acf_add_tab( 'بنر میانی' ),
		cyn_acf_add_image( 'middle_banner', 'بنر میانی' ),
		cyn_acf_add_text( 'middle_banner_link', 'لینک بنر میانی' ),
	];

	array_push( $fields, cyn_acf_add_tab( 'گروه محصولات' ) );

	for ( $i = 1; $i <= 6; $i++ ) {
		array_push( $fields, cyn_acf_add_group( "group_$i", "گروه $i", [ 
			cyn_acf_add_text( 'title', 'عنوان بخش' ),
			cyn_acf_add_text( 'link', 'لینک بخش' ),
			cyn_acf_add_wysiwyg( 'description', 'توضیحات بخش' ),
			cyn_acf_add_post_object( 'products', 'محصولات بخش', 'product', '', 1 ),
		] ) );
	}

	array_push( $fields, cyn_acf_add_tab( 'دیگر تنظیمات' ) );
	array_push( $fields, cyn_acf_add_link( 'contact_us_link', 'لینک تماس با ما - سوالات متداول' ) );



	$location = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/home.php',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_about_us() {
	$fields = [ 
		cyn_acf_add_text( 'about_title_top', 'عنوان بالا' ),
		cyn_acf_add_text( 'about_title_bottom', 'عنوان پایین' ),

		cyn_acf_add_image( 'gallery_img_one', 'تصویر اول' ),
		cyn_acf_add_image( 'gallery_img_two', 'تصویر دوم' ),
		cyn_acf_add_image( 'gallery_img_three', 'تصویر سوم' ),
	];



	$location = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about-template.php',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_podcast() {
	$fields = [ 
		cyn_acf_add_file( 'podcast_file', 'فایل پادکست' ),
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

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_posts() {
	$fields = [ 
		cyn_acf_add_post_object( 'faq_post', 'سوالات متداول', 'faq', '', 1 ),
	];

	$location = [ 
		[ 
			[ 
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_home_blog() {

	$choices = [];
	$cats = get_categories();

	foreach ( $cats as $cat ) {
		$choices[ $cat->slug ] = $cat->name;
	}

	$fields = [ 
		cyn_acf_add_post_object( 'feature_posts', 'پست های برجسته', 'post', 100, 1 ),
		cyn_acf_add_options( 'selected_cats', 'دسته بندی های برجسته', $choices, 1 ),
		cyn_acf_add_link( 'view_all', 'مشاهده همه' )
	];

	$location = [ 
		[ 
			[ 
				'param' => 'page',
				'operator' => '==',
				'value' => get_option( 'page_for_posts' ),
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_custom_thumb() {
	$fields = [ 
		cyn_acf_add_image( 'custom_thumbnail', 'تصویر شاخص' )

	];

	$location = [ 
		[ 
			[ 
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'category',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}

function cyn_register_acf_custom_shop() {

	$banners = [ 
		cyn_acf_add_tab( 'بنر ها' ),
		cyn_acf_add_image( 'banner_1', 'تصویر 1', 33 ),
		cyn_acf_add_text( 'banner_text_1', 'متن 1', 0, 33 ),
		cyn_acf_add_link( 'banner_link_1', 'لینک 1', 33 ),

		cyn_acf_add_image( 'banner_2', 'تصویر 2', 33 ),
		cyn_acf_add_text( 'banner_text_2', 'متن 2', 0, 33 ),
		cyn_acf_add_link( 'banner_link_2', 'لینک 2', 33 ),

		cyn_acf_add_image( 'banner_3', 'تصویر 3', 33 ),
		cyn_acf_add_text( 'banner_text_3', 'متن 3', 0, 33 ),
		cyn_acf_add_link( 'banner_link_3', 'لینک 3', 33 ),
	];

	$products = [ 
		cyn_acf_add_tab( 'محصولات' ),
	];

	for ( $i = 1; $i < 11; $i++ ) {
		array_push( $products, cyn_acf_add_text( "product_text_$i", "متن $i", 0, 33 ) );
		array_push( $products, cyn_acf_add_post_object( "products_$i", "محصولات $i", 'product', 33, 1 ) );
		array_push( $products, cyn_acf_add_link( "product_link_$i", "لینک $i", 33 ),
		);
	}



	$fields = array_merge( $banners, $products );

	$location = [ 
		[ 
			[ 
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/custom-shop.php',
			],
		],
	];

	cyn_register_acf_group( 'تنظیمات ', $fields, $location );
}