<?php
add_action( 'acf/include_fields', 'cyn_register_acf' );

function cyn_register_acf() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	// cyn_register_acf_company_settings();
	cyn_register_acf_product_settings();
	cyn_register_acf_product_notes();
	cyn_register_acf_product_cats();
	cyn_register_acf_slider();
	cyn_register_acf_home_page();
	cyn_register_acf_podcast();
}

// function cyn_register_acf_company_settings() {

// 	//فیلدهای صفحه درباره ما
// 	$field_home = [ 
// 		cyn_acf_add_text( 'about_title_top', 'متن عنوان بالا' ),
// 		cyn_acf_add_text( 'about_title_bottom', 'متن زیر عنوان صفحه' ),
// 		cyn_acf_add_image( 'gallery_img_one', 'تصویر بزرگ سمت چپ' ),
// 		cyn_acf_add_image( 'gallery_img_two', 'تصویر بالا سمت راست' ),
// 		cyn_acf_add_image( 'gallery_img_three', 'تصویر پایین سمت راست' ),
// 	];
// 	$location_home = [ 
// 		[ 
// 			[ 
// 				'param' => 'page_template',
// 				'operator' => '==',
// 				'value' => 'templates/about-template.php',
// 			],
// 		],
// 	];

// 	cyn_register_acf_group( 'گالری تصاویر', $field_home, $location_home );

// }

function cyn_register_acf_product_settings() {
	$fields = [ 

		cyn_register_add_tax( 'first_notes', 'نت های ابتدایی', 'product_notes' ),
		cyn_register_add_tax( 'main_notes', 'نت های میانی', 'product_notes' ),
		cyn_register_add_tax( 'end_notes', 'نت های پایانی', 'product_notes' ),

		cyn_acf_add_image( 'custom_thumbnail', 'تصویر شاخص مخصوص صفحه اصلی' ),

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