<?php
$render_template = $args['render_template'] ?? true;

$link_linkedin = get_option( 'link_linkedin' );
$link_youtube = get_option( 'link_youtube' );
$link_whatsapp = get_option( 'link_whatsapp' );
$footer_logo = get_option( 'footer_logo' );
$footer_inperson = get_option( 'footer_inperson' );
$footer_support = get_option( 'footer_support' );
$footer_hours = get_option( 'footer_hours' );
$btn_link_whatsapp = get_option( 'btn_link_whatsapp' );
$btn_link_phones = get_option( 'btn_link_phones' );
$btn_link_instagram = get_option( 'btn_link_instagram' );

$enamad = get_option( 'enamad' );
?>

<?php if ( $render_template ) : ?>
	<section class="font-peyda mt-12 border-t border-cgray">
		<div class="container mx-auto px-10 lg:px-10 py-5">
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
				<div class="flex items-center">
					<img class="ml-4 w-16 h-16"
						 src="<?= get_stylesheet_directory_uri() . '/assets/img/car.svg'; ?>"
						 alt="Car Icon" />
					<div>
						<h3 class="text-lg font-bold">ارسال سریع</h3>
						<p class="text-sm">ارسال سفارشات در سریع ترین زمان </p>
					</div>
				</div>
				<div class="flex items-center">
					<img class="ml-4 w-16 h-16"
						 src="<?= get_stylesheet_directory_uri() . '/assets/img/secure-payment.png'; ?>"
						 alt="Earth Icon" />
					<div>
						<h3 class="text-lg font-bold">خرید امن </h3>
						<p class="text-sm">سرویس پرداخت ایمن</p>
					</div>
				</div>
				<div class="flex items-center">
					<img class="ml-4 w-16 h-16"
						 src="<?= get_stylesheet_directory_uri() . '/assets/img/click-mobile.svg'; ?>"
						 alt="Click Mobile Icon" />
					<div>
						<h3 class="text-lg font-bold">پشتیبانی دائم</h3>
						<p class="text-sm">پشتیبانی 24/7 تلفنی و آنلاین </p>
					</div>
				</div>
				<div class="flex items-center">
					<img class="ml-4 w-16 h-16"
						 src="<?= get_stylesheet_directory_uri() . '/assets/img/backup.png'; ?>"
						 alt="Box Icon" />
					<div>
						<h3 class="text-lg font-bold">مشاوره تخصصی</h3>
						<p class="text-sm">ارتباط با کارشناسان فروش</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="max-md:pb-20 bg-black text-white">
		<div class="container mx-auto p-10 md:p-8 lg:p-10">
			<div class="flex flex-wrap gap-8">
				<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l border-gray-900">
					<?php wp_nav_menu( [ 'menu_class' => 'space-y-9 list-square', 'depth' => '1', 'theme_location' => 'footer1_menu', 'container' => 'ul' ] ); ?>
				</div>
				<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l-0 md:border-l border-gray-900 ">
					<?php wp_nav_menu( [ 'menu_class' => 'space-y-9 list-square', 'depth' => '1', 'theme_location' => 'footer2_menu', 'container' => 'ul' ] ); ?>
				</div>
				<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l border-gray-900">
					<?php wp_nav_menu( [ 'menu_class' => 'space-y-9 list-square', 'depth' => '1', 'theme_location' => 'footer3_menu', 'container' => 'ul' ] ); ?>
				</div>
				<div class="w-[45%] md:w-[21%] lg:w-[9%]  border-l-0 md:border-l border-gray-900">
					<?php wp_nav_menu( [ 'menu_class' => 'space-y-9 list-square', 'depth' => '1', 'theme_location' => 'footer4_menu', 'container' => 'ul' ] ); ?>
				</div>
				<div class="w-[100%] md:w-[45%] lg:w-[25%]">
					<ul class="space-y-9 list-square">
						<li><?= esc_html( $footer_inperson ); ?></li>
						<li><?= esc_html( $footer_support ); ?></li>
						<li><?= esc_html( $footer_hours ); ?></li>
					</ul>
					<div class="mt-9 sm:w-[100%]">
						<ul class="space-y-5 text-xs">
							<li>
								<a href="<?= esc_url( $btn_link_phones ); ?>"
								   class="rounded-3xl flex items-center w-52 py-2 px-5 bg-white/20">
									<div class="flex justify-between items-center gap-1">
										<svg class="icon">
											<use href="#icon-Phone,-Call-11" />
										</svg>
										شماره تماس ها
									</div>
									<svg class="icon size-4 mr-auto ml-0 rotate-90">
										<use href="#icon-chevron-down" />
									</svg>
								</a>
							</li>
							<li>
								<a href="<?= esc_url( $btn_link_instagram ); ?>"
								   class="rounded-3xl flex items-center w-52 py-2 px-5 bg-white/20">
									<div class="flex justify-between items-center gap-1">
										<svg class="icon">
											<use href="#icon-instagram" />
										</svg>
										اینستاگرام ها
									</div>
									<svg class="icon size-4 mr-auto ml-0 rotate-90">
										<use href="#icon-chevron-down" />
									</svg>
								</a>
							</li>
							<li><a href="<?= esc_url( $btn_link_whatsapp ); ?>"
								   class="rounded-3xl flex items-center w-52 py-2 px-5 bg-white/20">
									<div class="flex justify-between items-center gap-1">
										<svg class="icon">
											<use href="#icon-Whatsup" />
										</svg> ارتباط در واتس اپ
									</div>

									<svg class="icon size-4 mr-auto ml-0 rotate-90">
										<use href="#icon-chevron-down" />
									</svg>

								</a>

							</li>
						</ul>
					</div>
				</div>
				<div
					 class="w-[100%] md:w-[100%] lg:w-[15%] xl:w-[22%] flex items-center justify-center lg:justify-end order-first lg:order-none">
					<div class="max-md:flex">
						<a href="/">
							<?php
							if ( $footer_logo ) {
								echo '<a href="' . esc_url( home_url() ) . '"><img src="' . esc_url( $footer_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" /></a>';
							} ?>
						</a>

						<div>
							<?php echo empty( $enamad ) ? '' : $enamad ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto p-10 md:p-8 lg:p-10 text-center">
			<!-- <ul class="flex justify-center gap-8 pt-6 border-t border-darkborder pb-16 md:pb-0">
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
			</ul> -->

			<div class="mt-4 text-white opacity-30 border-t pt-6 ">
				<span>Design & Develope by <a href="https://cyandm.com">Cyan DM</a></span>
			</div>
		</div>
		<?php cyn_get_component( 'bottom-app-bar' ) ?>
	</footer>

<?php endif; ?>

<div class="icons">
	<?php include_once ( CYN_THEME_DIRECTORY . '/assets/icons/icons.svg' ) ?>
</div>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>

</body>

</html>