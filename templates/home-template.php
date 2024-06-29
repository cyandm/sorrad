<?php
/* Template Name: Home Page */
 get_header();

 get_template_part( '/templates/components/product-left');
 get_template_part( '/templates/components/product-right');
?>

<!-- اسلایدر -->
<?php get_template_part( '/templates/components/slider');?>

<!-- لذت قدم زدن تو گلفروشی -->
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto px-4 lg:pr-10 lg:pl-0">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[50%] px-0 lg:px-10">
                <h2 class="text-title2 font-normal lg:text-title1">لذت قدم زدن تو گلفروشی</h2>
                <p class="mt-2 mb-6 text-secondary">عطرهای با رایحه گل های بهاری، انتخابی ایده آل برای فصل بهار و تابستان هستند <br/>و می توانند شادی و طراوت را به روزهای شما هدیه کنند.</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="text-ctext text-left relative lg:absolute z-10 w-[70%] lg:w-[25%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه222</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه222</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full relative lg:left-[-40px]" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <a href="#" class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها<i class="mr-2"></i></a>
        </div>
    </div>
</section>


<!-- به شیرینی خاص ترین لحظات -->
<?php
    $title = get_field('title_box_two');
    $subtitlee = get_field('subtitle_box_two');
    $more = get_field('morebtn_box_two');
    $product_one = get_field('product_one_box_two');
    $product_two = get_field('product_two_box_two');

    echo show_product_in_right($title,$subtitlee,$more,$product_one,$product_two);
?>

<!-- بنر وسط -->
<?php get_template_part( '/templates/components/banner');?>

<!--بوی خوب میوه ها -->
<?php
    $title = get_field('title_box_three');
    $subtitlee = get_field('subtitle_box_three');
    $more = get_field('morebtn_box_three');
    $product_one = get_field('product_one_box_three');
    $product_two = get_field('product_two_box_three');

    echo show_product_in_left($title,$subtitlee,$more,$product_one,$product_two);
?>

<!-- با عطرها میتونی سفر کنی -->
<?php
    $title = get_field('title_box_four');
    $subtitlee = get_field('subtitle_box_four');
    $more = get_field('morebtn_box_four');
    $product_one = get_field('product_one_box_four');
    $product_two = get_field('product_two_box_four');

    echo show_product_in_right($title,$subtitlee,$more,$product_one,$product_two);
?>

<!--پادکست ها------->
<?php get_template_part( '/templates/components/podcasts');?>

<!--هیجان و حرارت یه عطر گرم-->
<?php
    $title = get_field('title_box_five');
    $subtitlee = get_field('subtitle_box_five');
    $more = get_field('morebtn_box_five');
    $product_one = get_field('product_one_box_five');
    $product_two = get_field('product_two_box_five');

    echo show_product_in_left($title,$subtitlee,$more,$product_one,$product_two);
?>

<!--رایحه های خنک -->
<?php
    $title = get_field('title_box_six');
    $subtitlee = get_field('subtitle_box_six');
    $more = get_field('morebtn_box_six');
    $product_one = get_field('product_one_box_six');
    $product_two = get_field('product_two_box_six');

    echo show_product_in_right($title,$subtitlee,$more,$product_one,$product_two);
?>

<!--وبلاگ------->
<?php get_template_part( '/templates/components/blog');?>

<!--سوالات متداول------->
<?php get_template_part( '/templates/components/faq');?>

<?php get_footer(); ?>