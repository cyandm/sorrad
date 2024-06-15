<?php 
$render_template = $args['render_template'] ?? true  ;

$link_linkedin = get_option('link_linkedin');
$link_youtube = get_option('link_youtube');
$link_whatsapp = get_option('link_whatsapp');
$footer_logo = get_option('footer_logo');
$footer_inperson = get_option('footer_inperson');
$footer_support = get_option('footer_support');
$footer_hours = get_option('footer_hours');

?>

<?php if ( $render_template ) : ?>
<section class="font-peyda mt-12 border-t border-cgray"> 
<div class="container mx-auto px-10 lg:px-10 py-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="flex items-center">
        <img class="ml-4 w-16 h-16" src="<?= get_stylesheet_directory_uri().'/assets/img/car.svg'; ?>" alt="Car Icon" />
        <div>
          <h3 class="text-lg font-bold">ارسال رایگان</h3>
          <p class="text-sm">خرید بالای ۷۰۰ هزار تومن</p>
        </div>
      </div>
      <div class="flex items-center">
        <img class="ml-4 w-16 h-16" src="<?= get_stylesheet_directory_uri().'/assets/img/earth.svg'; ?>" alt="Earth Icon" />
        <div>
          <h3 class="text-lg font-bold">ارسال ویژه</h3>
          <p class="text-sm">مختص شهر تهران</p>
        </div>
      </div>
      <div class="flex items-center">
        <img class="ml-4 w-16 h-16" src="<?= get_stylesheet_directory_uri().'/assets/img/click-mobile.svg'; ?>" alt="Click Mobile Icon" />
        <div>
          <h3 class="text-lg font-bold">اصالت کالا</h3>
          <p class="text-sm">ضمانت اصل بودن تمام کالاها</p>
        </div>
      </div>
      <div class="flex items-center">
        <img class="ml-4 w-16 h-16" src="<?= get_stylesheet_directory_uri().'/assets/img/box.svg'; ?>" alt="Box Icon" />
        <div>
          <h3 class="text-lg font-bold">تعویض کالا</h3>
          <p class="text-sm">تا ۷ روز در صورت داشتن مشکل</p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-primary text-white">
  <div class="container mx-auto p-10 md:p-8 lg:p-10">
    <div class="flex flex-wrap gap-8">
		<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l border-darkborder">
			<?php wp_nav_menu(['menu_class' => 'space-y-9 list-square' , 'depth' => '1' , 'theme_location' => 'footer1_menu' , 'container' => 'ul']);?>
		</div>
		<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l-0 md:border-l border-darkborder ">
			<?php wp_nav_menu(['menu_class' => 'space-y-9 list-square' , 'depth' => '1' , 'theme_location' => 'footer2_menu' , 'container' => 'ul']);?>
		</div>
		<div class="w-[45%] md:w-[21%] lg:w-[10%] border-l border-darkborder">
		<?php wp_nav_menu(['menu_class' => 'space-y-9 list-square' , 'depth' => '1' , 'theme_location' => 'footer3_menu' , 'container' => 'ul']);?>
		</div>
		<div class="w-[45%] md:w-[21%] lg:w-[9%]  border-l-0 md:border-l border-darkborder">
		<?php wp_nav_menu(['menu_class' => 'space-y-9 list-square' , 'depth' => '1' , 'theme_location' => 'footer4_menu' , 'container' => 'ul']);?>
		</div>
		<div class="w-[100%] md:w-[45%] lg:w-[25%]">
			<ul class="space-y-9 list-square">
				<li><?= esc_html($footer_inperson);?></li>
				<li><?= esc_html($footer_support);?></li>
				<li><?= esc_html($footer_hours);?></li>
			</ul>
			<div class="mt-9 sm:w-[100%]">
				<ul class="space-y-5 text-xs">
					<li><a href="#" class="rounded-3xl block w-52 py-2 px-8 bg-secondary"><i class="iconsax" icon-name="phone"></i> شماره تماس ها</a></li>
					<li><a href="#" class="rounded-3xl block w-52 py-2 px-8 bg-secondary"><i class="iconsax" icon-name="instagram"></i> اینستاگرام ها</a></li>
					<li><a href="#" class="rounded-3xl block w-52 py-2 px-8 bg-secondary"><i class="iconsax" icon-name="whatsapp"></i> ارتباط در واتس اپ</a></li>
				</ul>
			</div>
		</div>
		<div class="w-[100%] md:w-[100%] lg:w-[15%] xl:w-[22%] flex items-center justify-center lg:justify-end order-first lg:order-none">
			<a href="#">
				<?php
				if ($footer_logo) {
					echo '<a href="' . esc_url(home_url()) . '"><img src="' . esc_url($footer_logo) . '" alt="'.get_bloginfo('name').'" /></a>';
				}?>
			</a>
		</div>
    </div>  
  </div>
  <div class="container mx-auto p-10 md:p-8 lg:p-10 ">
	<ul class="flex justify-center gap-8 pt-6 border-t border-darkborder pb-16 md:pb-0">
		<li><a href="<?= esc_url($link_whatsapp);?>"><i class="whatsapp"></i></a></li>
		<li><a href="<?= esc_url($link_linkedin);?>"><i class="linkedin"></i></a></li>
		<li><a href="<?= esc_url($link_youtube);?>"><i class="youtube"></i></a></li>
	</ul>
  </div>
  <div class="block md:hidden fixed left-0 right-0 bottom-4 z-50 bg-white w-[90%] mx-auto rounded-[1.25rem] border border-egray shadow-md">
		<ul class="flex justify-center gap-7 m-3 ">
			<li><a class="shadow-md rounded-3xl block text-primary bg-white w-10 h-10 text-center leading-10" href="#"><i class="user"></i></a></li>
			<li><a class="shadow-md rounded-3xl block text-primary bg-white w-10 h-10 text-center leading-10" href="#"><i class="cart"></i></a></li>
			<li><a class="shadow-md rounded-3xl block text-primary bg-white w-10 h-10 text-center leading-10" href="#"><i class="bag"></i></a></li>
		</ul>
	</div>
</footer>

<?php endif; ?>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>

</body>

</html>