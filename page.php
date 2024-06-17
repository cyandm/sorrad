<?php get_header() ?>

<main class="container">

	<div>
		<div class="w-full h-[600px]">
			<?php the_post_thumbnail( 'full', [ 'class' => 'w-full h-full object-cover rounded-2xl' ] ) ?>
		</div>


		<div class="text-5xl my-8">
			<h1>
				<?php the_title() ?>
			</h1>
		</div>
	</div>

	<div class="prose prose-lg prose-img:rounded-2xl">
		<?php the_content() ?>
	</div>


</main>

<?php get_footer() ?>