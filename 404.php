<?php defined( 'ABSPATH' ) || exit;  ?>

<?php get_header(); ?>

<section>
    <div class="container text-center mx-auto px-10 py-8">
        <h1 class="text-5xl text-secondtext font-medium">404</h1>
        <p class="text-secondtext text-base mt-4 mb-6">متاسفانه صفحه ی مورد نظر یافت نشد!</p>
        <img class="mx-auto" src="<?= get_stylesheet_directory_uri().'/assets/img/404.png'; ?>" />
        <a href="<?php home_url();?>" class="inline-block bg-primary rounded-3xl text-white px-6 py-3 my-6">بازگشت به صفحه اصلی</a>
    </div>
</section>

<?php get_footer();?>