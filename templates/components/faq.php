<?php
$faq_category_all = get_theme_mod('faq_category_all');
$faq_category_soorad = get_theme_mod('faq_category_soorad');
$faq_category_poam = get_theme_mod('faq_category_poam');
$faq_category_contactus = get_theme_mod('faq_category_contactus');

function show_faq_questions($id){
    $args = array(
        'post_type'      => 'faq',
        'posts_per_page' => 10,
        'tax_query'      => array(
            array(
                'taxonomy' => 'catfaq',
                'field'    => 'term_id',
                'terms'    => $id,
            ),
        ),
    );
    $query = new WP_Query($args);

    echo '<ul class="accordion list-square pr-4">';
    $counter = 0;
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $counter++;
    ?>
        <li class="accordion-item">
            <h2 class="accordion-title my-6 <?= ($counter == '1') ? 'active' : '';?>"><?php the_title(); ?></h2>
            <div class="accordion-content mb-6" style="<?= ($counter == '1') ? 'display:block' : '';?>">
            <?php the_content(); ?>
            </div>
        </li>
    <?php
        }
        wp_reset_postdata();    
    }
    echo '</ul>';
}
?>
<section class="mb-28">
    <div class="container mx-auto px-4 lg:px-10">
        <h2 class="text-title2 font-normal lg:text-title1 mb-3">اگر برات سواله</h2>
        <div class="flex gap-5 flex-col lg:flex-row ">
            <div class="tabs">
                <div class="tab active" data-tab="tab1">سوالات کلی</div>
                <div class="tab" data-tab="tab2">درباره سراد</div>
                <div class="tab" data-tab="tab3">انتخاب عطر</div>
                <div class="tab" data-tab="tab4">تماس با ما</div>
            </div>
            <div class="tab-content px-4 py-6 active" id="tab1">
                <?php show_faq_questions($faq_category_all);?>
            </div>
            <div class="tab-content" id="tab2">
                <?php show_faq_questions($faq_category_soorad);?>
            </div>
            <div class="tab-content" id="tab3">
                <?php show_faq_questions($faq_category_poam);?>
            </div>
            <div class="tab-content" id="tab4">
                <?php show_faq_questions($faq_category_contactus);?>
            </div>
        </div>
    </div>
</section>