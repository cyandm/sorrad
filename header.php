<?php
$render_template = $args['render_template'] ?? true;

$link_search_page = get_option( 'link_search_page' );
$link_user_page = get_option( 'link_user_page' );

$link_linkedin = get_option( 'link_linkedin' );
$link_youtube = get_option( 'link_youtube' );
$link_whatsapp = get_option( 'link_whatsapp' );
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, initial-scale=1.0">
		<?php wp_head() ?>
	</head>

	<body <?php body_class( 'overflow-x-hidden font-peyda' ) ?>>
		<?php wp_body_open() ?>


		<?php if ( $render_template ) : ?>
			<header class=" bg-transparent lg:bg-white/20 py-4 flex items-center relative z-20">
				<div class="container mx-auto px-4">
					<div class="grid grid-cols-12 items-center">
						<div class="col-span-1 hidden lg:block">
							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
							?>
						</div>
						<div class="col-span-6 lg:col-span-8">
							<div class="block lg:hidden "
								 id="menu-slide-icon">
								<svg class="icon rotate-180 bg-black rounded-full text-white size-10 p-2">
									<use href="#icon-menu-burger-square" />
								</svg>
							</div>

							<?php wp_nav_menu( [ 
								'menu_id' => 'main-menu',
								'menu_class' => 'hidden flex-wrap gap-5 text-primary lg:flex',
								'depth' => '3',
								'theme_location' => 'header_menu',
								'container' => 'ul'
							] ); ?>
						</div>

						<div class="flex flex-wrap gap-3 col-span-6 lg:col-span-3  items-center justify-end">


							<a href="<?= esc_url( $link_search_page ); ?>"
							   class="hidden lg:block shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10">
								<svg class="icon">
									<use href="#icon-Search" />
								</svg>
							</a>
							<a href="<?= esc_url( $link_user_page ); ?>"
							   class="hidden lg:block shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10">
								<svg class="icon">
									<use href="#icon-User,-Profile" />
								</svg>
							</a>

							<a href="#"
							   id="open-popup"
							   class="primary-btn small-btn">هوش مصنوعی</a>
						</div>
					</div>
				</div>

				<div id="sliding-menu"
					 class="w-0 h-full fixed z-50 top-0 right-0 bg-white overflow-x-hidden transition-all duration-500">
					<div class="py-8 px-10">
						<div class="flex flex-wrap flex-row items-center gap-4 justify-between mb-9">

							<div class="flex gap-2">
								<a href="#"
								   class="shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10"
								   id="menu-slide-close">
									<svg class="icon rotate-45">
										<use href="#icon-plus" />
									</svg>
								</a>


								<a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
								   class="shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10">
									<svg class="icon">
										<use href="#icon-Shopping-Cart" />
									</svg>
								</a>
							</div>

							<form name="s"
								  class="flex items-center border-b border-gray-300 py-2">
								<input type="text"
									   placeholder="دنبال چی میگردی؟"
									   class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" />
								<button type="submit"
										class="flex-shrink-0 bg-transparent border-none text-gray-700 py-1 px-2 focus:outline-none">
									<svg class="icon">
										<use href="#icon-Search" />
									</svg>
								</button>
							</form>
						</div>
						<?php
						wp_nav_menu( [ 
							'menu_id' => 'mobile-menu',
							'menu_class' => 'flex flex-wrap flex-col gap-5 text-primary',
							'depth' => '3',
							'theme_location' => 'mobile_menu',
							'container' => 'ul'
						] ); ?>

						<ul class="flex flex-wrap flex-row gap-3 mt-9 justify-center">
							<?php

							?>
							<li>
								<a href="<?= esc_url( $link_whatsapp ); ?>">
									<svg class="icon">
										<use href="#icon-Whatsup" />
									</svg>
								</a>
							</li>

							<li>
								<a href="<?= esc_url( $link_youtube ); ?>">
									<svg class="icon">
										<use href="#icon-Youtube" />
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</header>

			<div id="popup-overlay"
				 class="hidden fixed top-0 left-0 w-full h-full bg-primary opacity-80 z-40">
			</div>

			<div class="hidden bg-white max-w-5xl left-0 right-0 z-50 fixed mx-auto"
				 id="popup-wrapper">
				<div class="max-w-5xl mx-auto grid grid-cols-12">
					<div class="col-span-12 lg:col-span-6 text-center relative">

						<div id="close-popup"
							 class="absolute right-9 top-9 cursor-pointer "><i class=""></i></div>
						<h2 class="text-xl font-semibold my-10 lg:mt-9 lg:mb-44">سراد گالری</h2>

						<div class="flex flex-col mb-3 gap-3">
							<h2 class="text-4xl font-medium mb-3">هنوز عطر اختصاصیتو پیدا نکردی؟</h2>
							<h4 class="text-3xl font-medium mb-1">با هوش مصنوعی بسازش</h4>
							<p class="text-xl font-medium mb-3">به زودی ....</p>
						</div>
					</div>
					<div class="col-span-12 lg:col-span-6 ">
						<img src="<?= get_stylesheet_directory_uri() . '/assets/img/popup.png'; ?>"
							 class="w-full h-full"
							 alt="popup" />
					</div>
				</div>
			</div>
		<?php endif; ?>