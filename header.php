<?php
$render_template = $args['render_template'] ?? true;


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
						<div class="col-span-1 hidden xl:block">
							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
							?>
						</div>
						<div class="col-span-6 xl:col-span-8">
							<div class="block xl:hidden "
								 id="menu-slide-icon">
								<svg class="icon rotate-180 bg-black rounded-full text-white size-10 p-2">
									<use href="#icon-menu-burger-square" />
								</svg>
							</div>

							<?php wp_nav_menu( [ 
								'menu_id' => 'main-menu',
								'menu_class' => 'hidden flex-wrap gap-5 text-primary xl:flex',
								'depth' => '3',
								'theme_location' => 'header_menu',
								'container' => 'ul'
							] ); ?>
						</div>

						<div class="flex flex-wrap gap-3 col-span-6 xl:col-span-3  items-center justify-end">


							<a href="<?= get_site_url() . '/?s=' ?>"
							   class="hidden xl:block shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10">
								<svg class="icon">
									<use href="#icon-Search" />
								</svg>
							</a>
							<a href="<?= get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>"
							   class="hidden xl:block shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10">
								<svg class="icon">
									<use href="#icon-User,-Profile" />
								</svg>
							</a>

							<a href="<?= wc_get_cart_url() ?>"
							   class="hidden xl:block shadow-md rounded-3xl text-primary bg-white bg-opacity-16 w-10 h-10 text-center leading-10 relative">
								<div
									 class="absolute bg-red-600 text-white -top-1 -right-1 size-4 rounded-full flex items-center justify-center text-xs">
									<?php echo WC()->cart->get_cart_contents_count() ?>
								</div>
								<svg class="icon">
									<use href="#icon-Shopping-Cart" />
								</svg>
							</a>

							<a href="#"
							   id="open-popup"
							   class="primary-btn small-btn">هوش مصنوعی</a>
						</div>
					</div>
				</div>

				<?php cyn_get_component( '/mobile-menu' ) ?>
			</header>

			<?php cyn_get_component( '/popup' ) ?>

		<?php endif; ?>

		<svg class="icon hidden"
			 id="trashIcon">
			<use href="#icon-trash-delete-bin-2-1" />
		</svg>