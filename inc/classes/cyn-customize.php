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
				'order_section',
				[ 
					'title' => 'سفارشات',
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
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'btn_link_whatsapp', 'لینک دکمه ارتباط در واتس اپ' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'btn_link_phones', 'لینک دکمه شماره تماس ها' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'text', 'btn_link_instagram', 'لینک دکمه اینستاگرام ها' );
			$this->cyn_add_control( $wp_customize, 'footer_section', 'textarea', 'enamad', 'کد ای نماد' );

			//orders
			$this->cyn_add_control( $wp_customize, 'order_section', 'text', 'cyn_order_text_notice', 'متن ' );
			$this->cyn_add_control( $wp_customize, 'order_section', 'text', 'cyn_order_link_notice', 'لینک ' );
		}


	}
}
