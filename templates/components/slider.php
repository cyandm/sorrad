<section class="mb-7">
    <div class="homeslider overflow-x-hidden max-w-full z-10 relative -mt-20">
        <div class="swiper-wrapper">
        <?php 
            $args = array(
                'post_type'      => 'slider',
                'posts_per_page' => 10,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
            <div class="swiper-slide">
                <?php if ( has_post_thumbnail() ) :
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                ?>
                    <img class="w-full" src="<?= $thumbnail_url[0]; ?>" alt="<?= get_the_title();?>" />
                <?php endif; ?>
                <div class="w-full absolute bottom-0 bg-darkgreen backdrop-blur text-center py-4">
                    <h2 class="text-xl lg:text-5xl text-medium text-white leading-7 leading-tight">
                       <?= get_the_title();?>
                    </h2>
                    <?php the_content();?>
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