<?php

if ( ! class_exists( 'cyn_customize' ) ) {
	class cyn_customize {
		function __construct() {
			add_action( 'customize_register', [ $this, 'cyn_basic_settings' ] );
		}

		public function cyn_basic_settings( $wp_customize ) {

			$this->cyn_register_panel_demo( $wp_customize );
			//$this->cyn_register_panel_demo_2( $wp_customize );

		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control( $wp_customize, $section, $type, $id, $label, $description = '' ) {
			$wp_customize->add_setting(
				$id,
				[ 'type' => 'option' ]
			);


			if ( $type == "file" ) {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[ 
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ( $type != 'file' ) {
				$wp_customize->add_control(
					$id,
					[ 
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_demo( $wp_customize ) {

			$wp_customize->add_panel(
				'demo_panel',
				[ 
					'title' => 'CyanTheme - تنظیمات قالب',
					'priority' => 1
				]
			);


			$wp_customize->add_section(
				'header_section',
				[ 
					'title' => 'سربرگ',
					'priority' => 1,
					'panel' => 'demo_panel'
				]
			);

			$wp_customize->add_section(
				'social_section',
				[ 
					'title' => 'شبکه های اجتماعی',
					'priority' => 1,
					'panel' => 'demo_panel'
				]
			);

			$wp_customize->add_section(
				'footer_section',
				[ 
					'title' => 'فوتر - پابرگ',
					'priority' => 1,
					'panel' => 'demo_panel'
				]
			);

			$wp_customize->add_section(
				'faq_section',
				[ 
					'title' => 'سوالات متداول',
					'priority' => 1,
					'panel' => 'demo_panel'
				]
			);

			//header
			$this->cyn_add_control( $wp_customize, 'header_section', 'text', 'link_search_page', 'لینک صفحه جستجو' );
			$this->cyn_add_control( $wp_customize, 'header_section', 'text', 'link_user_page', 'لینک صفحه داشبورد کاربران' );

			//social
			$this->cyn_add_control( $wp_customize, 'social_section', 'text', 'link_linkedin', 'اینستاگرام' );
			$this->cyn_add_control( $wp_customize, 'social_section', 'text', 'link_youtube', 'یوتیوب' );
			$this->cyn_add_control( $wp_customize, 'social_section', 'text', 'link_whatsapp', 'واتس اپ' );

			//footer
			$this->cyn_add_control( $wp_customize, 'footer_section', 'file', 'footer_logo', 'لوگو فوتر' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'footer_inperson', 'خرید حضوری' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'footer_support', 'پشتیبانی سایت' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'footer_hours', 'ساعات پاسخگویی' );

			//بخش سوالات متداول اینجا دسته ها انتخاب میشه برای نمایش
			$categories = get_terms(array(
				'taxonomy'   => 'catfaq',
				'hide_empty' => false,
			));
		
			$cats = array();
			foreach ($categories as $category) {
				$cats[$category->term_id] = $category->name;
			}
		
			$wp_customize->add_setting('faq_category_all', array(
				'default'   => '',
				'transport' => 'refresh',
			));
			$wp_customize->add_control('faq_category_all', array(
				'type'    => 'select',
				'section' => 'faq_section',
				'label'   => __('دسته سوالات کلی را انتخاب کنید'),
				'choices' => $cats,
			));

			$wp_customize->add_setting('faq_category_soorad', array(
				'default'   => '',
				'transport' => 'refresh',
			));
			$wp_customize->add_control('faq_category_soorad', array(
				'type'    => 'select',
				'section' => 'faq_section',
				'label'   => __('دسته درباره سراد را انتخاب کنید'),
				'choices' => $cats,
			));

			$wp_customize->add_setting('faq_category_poam', array(
				'default'   => '',
				'transport' => 'refresh',
			));
			$wp_customize->add_control('faq_category_poam', array(
				'type'    => 'select',
				'section' => 'faq_section',
				'label'   => __('دسته انتخاب عطر را انتخاب کنید'),
				'choices' => $cats,
			));

			$wp_customize->add_setting('faq_category_contactus', array(
				'default'   => '',
				'transport' => 'refresh',
			));
			$wp_customize->add_control('faq_category_contactus', array(
				'type'    => 'select',
				'section' => 'faq_section',
				'label'   => __('دسته تماس با ما را انتخاب کنید'),
				'choices' => $cats,
			));


		}

		private function cyn_register_panel_demo_2( $wp_customize ) {

			$wp_customize->add_panel(
				'demo_panel_2',
				[ 
					'title' => 'CyanTheme - Demo Panel 2',
					'priority' => 2
				]
			);


			$wp_customize->add_section(
				'demo_section_2',
				[ 
					'title' => 'Demo section 2',
					'priority' => 1,
					'panel' => 'demo_panel_2'
				]
			);

			$this->cyn_add_control( $wp_customize, 'demo_section_2', 'file', 'demo_file_control', 'Demo File Control' );
		}

	}
}
