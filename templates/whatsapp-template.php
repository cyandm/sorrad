<?php 
/* Template name: whatsapp  */
get_header();

$btn_link_instagram = get_option('btn_link_instagram');
$btn_link_phones = get_option('btn_link_phones');
 ?>
 
<section class="bg-no-repeat items-center bg-contain md:bg-cover h-auto lg:h-[45rem] instagram-page" style="background-image:url('<?= get_stylesheet_directory_uri().'/assets/img/bg-templates.png'; ?>');">
    <div class="container mx-auto flex h-full items-center justify-start px-4 lg:px-10 mt-">
        <div class="w-full lg:w-[60%] xl:w-[40%] bg-none lg:bg-bg-content p-0 lg:p-8 rounded-4xl">
            <h1 class="text-xl lg:text-5xl leading-7 lg:leading-425 mb-1 lg:mb-3 text-cgray2 mt-12 lg:mt-16"><?= get_the_title();?></h1>
            <h3 class="text-xs lg:text-xl w-[42%] lg:w-[100%]">ما منتظر دریافت پیام های شما و پاسخ به سوالاتتون هستیم.</h3>
            <div class="bg-bg-content lg:bg-none rounded-3xl lg:rounded-none p-8 lg:p-0 mt-[7.5rem] md:mt-20">
                <div class="text-xl text-cgray2 font-light">
                    <?php the_content();?>
                </div>
                <div class="flex gap-4 mb-16 mt-7">
                    <a class="block px-1 py-2 rounded-3xl bg-white-24 text-xs" href="<?= esc_url($btn_link_instagram);?>"><i class=""></i> اینستاگرام ها <i class=""></i></a>
                    <a class="block px-1 py-2 rounded-3xl bg-white-24 text-xs" href="<?= esc_url($btn_link_phones);?>"><i class=""></i> شماره تماس ها <i class=""></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>