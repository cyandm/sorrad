<a href="<?php the_permalink() ?>"
   class="rounded-none md:rounded-3xl overflow-hidden relative flex my-2 md:my-0 border-b  md:border-b-0 pb-5 md:pb-0 items-center isolate">
	<div class="flex flex-row-reverse md:block h-full">
		<div class="md:size-full min-w-28 min-h-60">
			<?php
			the_post_thumbnail( [ 600, 600 ], [ 'class' => 'rounded-lg md:rounded-none md:size-full size-28 object-cover' ] );
			?>
		</div>
		<div
			 class="px-3 py-0 md:py-6 bg-white/65 relative md:absolute md:bottom-0 md:right-0 md:left-0 backdrop-blur-xl flex flex-col justify-between">
			<div>
				<h3 class="text-black text-base mb-1 line-clamp-1">
					<?= get_the_title(); ?>
				</h3>
				<p class="text-xs text-gray-800 md:text-base  mb-1 leading-4 md:leading-8 line-clamp-2 md:line-clamp-1">
					<?= get_the_excerpt() ?>
				</p>
			</div>
			<ul class="flex flex-wrap gap-6 text-xs text-gray-700 ">
				<li>
					<svg class="icon size-4">
						<use href="#icon-calendar" />
					</svg>
					<span>
						<?= get_the_date(); ?>
					</span>
				</li>
				<li>
					<svg class="icon size-4">
						<use href="#icon-Pen,-Edit,-Write" />
					</svg>
					<span>
						<?= get_the_author(); ?>
					</span>
				</li>
			</ul>
		</div>
	</div>

</a>