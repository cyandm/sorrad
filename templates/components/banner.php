<?php  
    $banner_center_link = get_field('banner_center_link');
    $banner_center_toptext = get_field('banner_center_toptext');
    $banner_center_centertext = get_field('banner_center_centertext');
?>

<section class="my-7 bg-gradient-to-b from-[#F3F2F7] via-[#F6F5FA] via-25% via-[#F9F8FD] via-46% via-[#FAF9FE] via-62% via-[#F9F8FD] via-81% to-[#F4F3F9]">
    <div class="bg-no-repeat bg-right150 lg:bg-right bg-contain" style="background-image:url('<?= get_stylesheet_directory_uri().'/assets/img/banner.png'; ?>');">
        <div class="container mx-auto py-10 lg:py-32 px-10 flex flex-wrap justify-end">
            <div class="w-[58%]">
                <h3 class="text-lg md:text-2xl lg:text-3xl xl:text-5xl leading-6xl font-normal mb-4"><?= esc_html($banner_center_toptext);?></h3>
                <h3 class="text-xl md:text-3xl lg:text-4xl xl:text-7xl leading-snug font-bold mb-4"><?= esc_html($banner_center_centertext);?></h3>
                
                <a href="<?= esc_url($banner_center_link);?>" class="mt-2 text-sm font-normal leading-7">لذت تجربه کردن حس های مختلف <i class=""></i></a>
            </div>
        </div>
    </div>
</section>