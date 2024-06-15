<section>
    <div class="container px-4 lg:px-10 my-16 flex flex-col mx-auto">
        <h2 class="text-title2 font-normal lg:text-title1 order-1">اینبار نت های عطر رو با گوش بشنو</h2>

        <?php  $podcast_all_link = get_field('podcast_all_link');?>
        <a href="<?= esc_url($podcast_all_link);?>" class="block order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">همه پادکست ها<i class="mr-2"></i></a>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 lg:gap-5  order-2 lg:order-3">
            <?php 
            $args = array(
                'post_type'      => 'podcast',
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $excerpt = wp_trim_words(get_the_excerpt(), '12', '...');
                    $time = get_field('time_podcast');
            ?>
            <div class="my-2 lg:my-0 border-b border-egray lg:border-b-0 pb-5 lg:pb-0 items-center flex lg:block gap-4 justify-between">
                <a href="<?= get_the_permalink();?>" class="rounded-lg lg:rounded-3xl overflow-hidden relative order-2 lg:order-1 w-[60%] md:w-[30%} lg:w-full block max-w-[95px] lg:max-w-[100%]" >
                <?php if ( has_post_thumbnail() ) :
                    
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                ?>
                    <img class="w-[100%] h-[100%] md:w-full md:h-full" src="<?= $thumbnail_url[0]; ?>" alt="<?= get_the_title();?>" />
                <?php endif; ?> 

                <div class="h-full absolute top-0 w-full flex justify-center lg:justify-between p-3  items-center lg:items-start">
                        <div class="hidden lg:block bg-white bg-opacity-50 text-cgray4 px-2 py-1 rounded-2xl"><?= $time;?></div>
                        <div class="shadow-md rounded-3xl text-primary bg-white-300 w-10 h-10 text-center leading-10"><i class="play"></i></div>
                    </div> 
                </a>
                <div class="">
                    <h3 class="text-primary text-base my-1 lg:my-2"><a href="<?= get_the_permalink();?>"><?php the_title(); ?></a></h3>
                    <p class="text-xs text-cgray3"><?= $excerpt;?></p>
                    <div class="block lg:hidden flex justify-between items-center py-2">
                        <div class="text-cgray4 text-xs"><?= get_the_date();?></div>
                        <div class="text-cgray4 text-xs"><?= $time;?></div>
                    </div> 
                </div>
            </div>
            <?php 
                }
                wp_reset_postdata();    
            }
            ?>
        </div>
    </div>
</section>