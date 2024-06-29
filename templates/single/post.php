<?php defined( 'ABSPATH' ) || exit; ?>

<?php get_header() ?>

<main class="single-page | container mb-36">
	<div class="container mx-auto px-10">
		<div class="flex flex-wrap">
			<div class="w-full my-2 py-3 text-xs">
				<span class="text-[#c2c2c2] "><?php the_category(', ');?> </span> <i class="mx-4"> > </i><?php the_title();?>
			</div>
		</div>
		<div class="flex gap-5 my-3">
			<div class="w-1/4">
				<div class="mb-8">
					<h2 class="text-cgray2 text-2xl font-medium mb-4">در این مقاله خواهید خواند:</h2>
					<ul>
						<li><a href="#">روانشناسی عطر چیست؟</a></li>
						<li><a href="#">عطر افراد چه اطلاعاتی از تیپ شخصیتی آنها هد؟</a></li>
						<li><a href="#">تاثیر خلق و خو در انتخاب رایحه عطر</a></li>
						<li><a href="#">شخصیت افراد علاق مند به عطر تند</a></li>
					</ul>
				</div>
				<div class="mb-6">
					<form name="s" class="flex items-center border-b border-gray-300 py-2">
						<input type="text" placeholder="دنبال چی میگردی؟" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
						<button type="submit" class="flex-shrink-0 bg-transparent border-none text-gray-700 py-1 px-2 focus:outline-none">
						<i></i>
						</button>
					</form>
				</div>
				<div class="mb-6 cats-articles">
					<h5 class="text-xl leading-7 font-medium">دسته بندی ها</h5>
						<?php
							$categories = get_categories();
							if ( $categories ) {
								echo '<ul>';
								foreach ( $categories as $category ) {
									echo '<li class="p-3 mb-2 border border-[#f6f6f6] rounded-lg">';
									echo '<a class="text-base text-secondary hover:text-primary" href="' . get_category_link( $category->term_id ) . '">';
									echo $category->name;
									echo '</a>';
									echo '</li>';
								}
								echo '</ul>';
							} else {
								echo 'دسته بندی ساخته نشده است';
							}
						?>
				</div>
				<div class="mb-6 cats-articles">
					<h5 class="text-xl leading-7 font-medium">تازه منتشر شده</h5>
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 5,
					);

					$latest_posts = new WP_Query($args);

					if ($latest_posts->have_posts()) :
						while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
							<div class="post-item">

								<?php if (has_post_thumbnail()) : ?>
									<div class="">
										<?php the_post_thumbnail('medium');?>
									</div>
								<?php endif; ?>
								<div class="">
									<h3 class=""><?php the_title(); ?></h3>
									<div class="">
										<?= wp_trim_words(get_the_excerpt(), 25, '...'); ?>
									</div>
									<div class="flex justify-between">
										<span class=""><?= get_the_date();?></span>
										<a href="<?php the_permalink(); ?>" class="">ادامه مطلب</a>
									</div>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata();
					else :
						echo 'هیچ پستی یافت نشد';
					endif;
					?>

				</div>

			</div>
			<div class="w-3/4">
			<?php 
				if ( have_posts() ) :
    			while ( have_posts() ) : the_post(); 
			?>
				<div class="text-center" >
					<?php
						$attr = array(
							'class' => 'w-full',
							'alt'   => get_the_title(),
						);
						echo wp_get_attachment_image( get_post_thumbnail_id(), 'full' , false, $attr);
					?>
				</div>
				<div class="flex justify-between my-5">
					<ul class="flex">
						<?php
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
								foreach ( $categories as $category ) {
									echo '<li class="text-xs bg-[#f6f6f6] px-3 py-2 rounded-lg ml-3"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="custom-category-class">' . esc_html( $category->name ) . '</a> </li>';
								}
							}
						?>
					</ul>
					<ul>
						<li><i></i><?= get_the_author(); ?></li>
						<li><i></i><?= get_the_date(); ?></li>
					</ul>
				</div>
				<h1>
					<?php the_title() ?>
				</h1>

				<div class="content">
					<?php
					$content = get_the_content();
					preg_match_all('/<h([1-6]) id="([^"]+)">(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);


					if ($matches) {
						echo '<div class="toc">';
						echo '<h2>آنچه در این مقاله می‌خوانید:</h2>';
						echo '<ul>';
						foreach ($matches as $match) {
							$heading_level = $match[1];
							$heading_id = $match[2];
							$heading_text = strip_tags($match[3]);
							echo '<li class="toc-level-' . $heading_level . '"><a href="#' . $heading_id . '">' . $heading_text . '</a></li>';
						}
						echo '</ul>';
						echo '</div>';
					}
					the_content();
					?>
				</div>
			</div>
			<?php 
			endwhile;

			else :
				echo 'پستی یافت نشد';
			endif;
			?>
		</div>
	</div>
</main>

<?php get_footer() ?>