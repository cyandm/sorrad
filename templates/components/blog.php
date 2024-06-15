<section class="my-7">
    <div class="container px-4 lg:px-10 my-16 flex flex-col mx-auto">
        <h2 class="text-title2 font-normal lg:text-title1 order-1">چی از دنیای عطر باید بدونی</h2>

        <?php  $blog_all_link = get_field('blog_all_link');?>
        <a href="<?= esc_url($blog_all_link);?>" class="block order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">بلاگ ها <i class="mr-2"></i></a>
        
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 gap-0 lg:gap-5  order-2 lg:order-3">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) :
                $query->the_post();

                $excerpt = wp_trim_words(get_the_excerpt(), '25', '...');
        ?>
            <div class="rounded-none lg:rounded-3xl overflow-hidden relative flex my-2 lg:my-0 border-b border-egray lg:border-b-0 pb-5 lg:pb-0 items-center">
                <?php if ( has_post_thumbnail() ) :
                    
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                    ?>
                    <a class="order-2 lg:order-1 w-[60%] md:w-[30%} lg:w-full block max-w-[95px] lg:max-w-[100%]" href="<?= get_the_permalink(); ?>">
                        <img class="rounded-lg lg:rounded-none w-[100%] h-[100%] md:w-full md:h-full" src="<?= $thumbnail_url[0]; ?>" alt="<?= get_the_title();?>" />
                    </a>
                <?php endif; ?>

                <div class="px-3 py-0 lg:py-6 bg-white opacity-65 relative lg:absolute bottom-0 backdrop-blur-xl">
                    <h3 class="text-primary text-base mb-1"><a href="<?= get_the_permalink();?>"><?= get_the_title();?></a></h3>
                    <p class="text-xs lg:text-base text-ctext mb-1 leading-4 lg:leading-8"><?= $excerpt;?></p>
                    <ul class="flex flex-wrap gap-6 text-xs text-cgray2 ">
                        <li><i class=""></i> <?= get_the_date();?></li>
                        <li> <i class=""></i> <?= get_the_author();?> </li>
                    </ul>
                </div>
            </div>

        <?php  
                endwhile;     
            }else {
                echo 'مقاله ای در سایت منتشر نشده است.';
            }
        ?>
        </div>
    </div>
</section>