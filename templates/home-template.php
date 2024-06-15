<?php
/* Template Name: Home Page */
 get_header();
 
 //function show_in_left();
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
            <div class="block lg:hidden w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>

            <div class="hidden lg:block w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="homeproduct overflow-x-hidden max-w-full z-10 relative -mt-20">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="w-full"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>    
                            <div class="px-3 py-0 w-full lg:py-6 bg-white opacity-65 absolute bottom-0 backdrop-blur-xl">
                                <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                                <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                                <span  class="text-xs">تومان</span>
                                <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                                
                                <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
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
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full relative lg:right-[-40px]" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[50%] px-0 lg:px-10 lg:pr-20 lg:pl-10">
                <h2 class="text-title2 font-normal lg:text-title1">به شیرینی خاص ترین لحظات</h2>
                <p class="mt-2 mb-6 text-secondary">شادی رخدادهای زندگیت رو با یه رایحه شیرین به خاطر بسپار</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <a href="#" class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها<i class="mr-2"></i></a>
        </div>
    </div>
</section>

<!-- بنر وسط -->
<?php get_template_part( '/templates/components/banner');?>

<!--بوی خوب میوه ها -->
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto px-4 lg:pr-10 lg:pl-0">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[50%] px-0 lg:px-10">
                <h2 class="text-title2 font-normal lg:text-title1">بوی خوب میوه ها</h2>
                <p class="mt-2 mb-6 text-secondary">با عطرهای میوه ای، بوی تازگی و شادابی میوه ها را به همراه داشته باشید <br >و از جذابیت خود بهترین استفاده را ببرید!</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
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

<!-- با عطرها میتونی سفر کنی -->
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext"> ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full relative lg:right-[-40px]" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[50%] px-0 lg:px-10 lg:pr-20 lg:pl-10">
                <h2 class="text-title2 font-normal lg:text-title1">با عطرها میتونی سفر کنی</h2>
                <p class="mt-2 mb-6 text-secondary">تجربه قدم زدن کنار ساحل و نفس کشیدن تو جنگل رو تو یه شیشه حفظ کن</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <a href="#" class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها<i class="mr-2"></i></a>
        </div>
    </div>
</section>

<!--پادکست ها------->
<?php get_template_part( '/templates/components/podcasts');?>

<!--هیجان و حرارت یه عطر گرم-->
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto px-4 lg:pr-10 lg:pl-0">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[50%] px-0 lg:px-10">
                <h2 class="text-title2 font-normal lg:text-title1">هیجان و حرارت یه عطر گرم</h2>
                <p class="mt-2 mb-6 text-secondary">با یه عطر گرم و پرشور٫حرارت وجودت رو به رخ بکش</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
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

<!--رایحه های خنک -->
<section class="mb-20 max-w-full overflow-x-hidden my-7">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row flex-wrap items-center">
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext"> ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full relative lg:right-[-40px]" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[25%] flex shadow-cxl lg:shadow-none rounded-2xl gap-5 items-center justify-end mb-2 p-5 lg:p-0">
                <div class="block lg:hidden text-ctext text-left relative w-[70%] ">
                    <h3 class="text-xs text-normal">GUERLAIN - L'instant EDP for Women</h3>
                    <h2 class="mt-1 mb-2"><a href="#" class="text-ctext">گرلن ال اینستنت ادو پرفیوم زنانه</a></h2>
                    <span  class="text-xs">تومان</span>
                    <span class="text-base text-medium">۳،۲۴۰،۰۰۰<span>
                    
                    <i class="bg-pink p-2 rounded absolute bottom-0 right-0"></i>
                </div>
                <a href="#" class="w-[30%] lg:w-full relative"><img class="w-full" src="<?= get_stylesheet_directory_uri().'/assets/img/fruit.png'; ?>" /></a>
            </div>
            <div class="w-full lg:w-[50%] px-0 lg:px-10 lg:pr-20 lg:pl-10">
                <h2 class="text-title2 font-normal lg:text-title1">رایحه های خنک</h2>
                <p class="mt-2 mb-6 text-secondary">یه رایحه  مثل سرزندگی یه نوشیدنی خنک تو یه روز گرم تابستونی</p>
                <a href="#" class="hidden lg:block  order-3 lg:order-2 mt-4 mb-6 lg:text-left">مشاهده عطرها<i class="mr-2"></i></a>
            </div>
            <a href="#" class="block lg:hidden  order-3 lg:order-2 mt-4 mb-6 text-center lg:text-right">مشاهده عطرها<i class="mr-2"></i></a>
        </div>
    </div>
</section>

<!--وبلاگ------->
<?php get_template_part( '/templates/components/blog');?>

<!--سوالات متداول------->
<?php get_template_part( '/templates/components/faq');?>

<?php get_footer(); ?>