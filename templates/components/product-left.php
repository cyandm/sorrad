<?php
 function show_product_in_left($title,$subtitlee,$more,$product_one_id,$product_two_id){
    $product_one = wc_get_product($product_one_id);
    $product_two = wc_get_product($product_two_id);
?>
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto px-4 lg:pr-10 lg:pl-0">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[50%] px-0 lg:px-10">
                <h2 class="text-title2 font-normal lg:text-title1"><?= esc_html($title);?></h2>
                <p class="mt-2 mb-6 text-secondary"><?= esc_html($subtitlee);?></p>
                <a href="<?= esc_url($more);?>" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <?php 
                if ($product_one) {
                    $product_name = $product_one->get_name();
                    $product_image = wp_get_attachment_image_src($product_one->get_image_id(), 'full');
                    $product_link = get_permalink($product_one_id);
                    $product_price = $product_one->get_price();
                    $product_english_name = get_field('product_english_name', $product_one_id);
                    $gender = get_field('gender', $product_one_id);
                    if($gender == '0'){ $color_gender = 'bg-pink';}else{ $color_gender = 'bg-blue';}
            ?>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal"><?= esc_html($product_english_name);?></h3>
                    <h2 class="mt-1 mb-2"><a href="<?= esc_url($product_link);?>" class="text-ctext"><?= esc_html($product_name);?></a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium"><?= number_format_i18n($product_price);?><span>
                    
                    <i class="<?= $color_gender;?> p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="<?= esc_url($product_link);?>" class="w-[30%] lg:w-full">
                    <?php 
                        if ($product_image) {
                            echo '<img class="w-full" src="' . esc_url($product_image[0]) . '" alt="' . esc_attr($product_name) . '">';
                        }
                    ?>
                </a>
            </div>
            <?php
                }

                if ($product_two) {
                    $product_name = $product_two->get_name();
                    $product_image = wp_get_attachment_image_src($product_two->get_image_id(), 'full');
                    $product_link = get_permalink($product_two_id);
                    $product_price = $product_two->get_price();
                    $product_english_name = get_field('product_english_name', $product_two_id);
                    $gender = get_field('gender', $product_two_id);
                    if($gender == 'women'){ $color_gender = 'bg-pink';}else{ $color_gender = 'bg-blue';}
            ?>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal"><?= esc_html($product_english_name);?></h3>
                    <h2 class="mt-1 mb-2"><a href="<?= esc_url($product_link);?>" class="text-ctext"><?= esc_html($product_name);?></a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium"><?= number_format_i18n($product_price);?><span>
                    
                    <i class="<?= $color_gender;?> p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="<?= esc_url($product_link);?>" class="w-[30%] lg:w-full relative">
                    <?php 
                        if ($product_image) {
                            echo '<img class="w-full" src="' . esc_url($product_image[0]) . '" alt="' . esc_attr($product_name) . '">';
                        }
                    ?>
                </a>
            </div>
            <?php } ?>
            <a href="<?= esc_url($more);?>" class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها<i class="mr-2"></i></a>
        </div>
    </div>
</section>
<?php
 }
 ?>