<?php
$title = get_field('service_title');
$massages = new WP_Query(['post_type' => 'massage', 'orderby' => 'menu_order', 'posts_per_page' => -1]);
?>

<section class="pb-10 md:pb-20  md:pt-24 overflow-hidden md:mt-28 rg:mt-28">
    <div class="grid-default-12 rl:gap-2  gap-1 relative mb-20 rg:mb-48">
        <h2 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-7xl relative z-1 col-span-full">
            <?= $title ?>
        </h2>
        <span class="inline-block w-[70vw] md:w-[70vw] absolute bg-brand right-0  h-20 -top-5 rg:h-32 xg:h-40 rg:-top-10"></span>
    </div>
    <?php
    if ($massages->have_posts()) :
        echo '<div class="md:mb-20">';
        while ($massages->have_posts()) : $massages->the_post();
            $big = get_field('massage_big_image');
            $tiny = get_field('massage_tiny_image');
            $price = get_field('massage_price');
            $time = get_field('massage_time');
            ?>
            <article class=" group rg:even:pr-0 rg:odd:pl-0 grid-default-12 items-center relative max-md:mb-16">
                <span class="inline-block w-[70vw] md:w-[50vw] absolute bg-brand right-0  h-20 -top-5   rg:-top-10 group-odd:hidden -z-1"></span>
                <div class="relative row-start-1 rg:h-full group-odd:col-start-1 rl:group-even:col-start-8 group-even:lg:col-start-7 col-span-full rg:col-span-4 rl:col-span-5 lg:col-span-6 bg-red-400 lg:aspect-square group-odd:lg:mr-14 group-even:lg:ml-14 group-odd:rg:max-rl:mr-10 group-even:rg:max-rl:ml-10 max-rg:h-[400px] max-sd:h-[300px] max-rg:overflow-hidden">
                    <?php echo wp_get_attachment_image($big['id'], '1536x1536', false, ['class' => 'w-full h-full inline-block object-cover']); ?>

                    <?php echo wp_get_attachment_image($tiny['id'], '1536x1536', false, ['class' => 'w-24 md:w-64 md:h-64 lg:w-[370px] lg:h-[370px] group-even:rounded-full outline outline-[12px] lg:outline-[20px] absolute group-odd:outline-brand-middle group-odd:-top-10 group-even:-bottom-32 -right-16 group-even:outline-brand max-rl:hidden']); ?>
                </div>

                <div class="rl:group-odd:col-start-7 rg:col-span-4 rl:max-lg:col-span-7 lg:col-span-6 rg:row-start-1 group-odd:rl:pl-14 group-even:col-start-1 col-span-full group-even:rl:pr-14 rg:py-28 md:py-14 max-md:flex flex-col max-md:gap-5 max-md:mt-5">
                    <h3 class="tracking-widest uppercase font-quicksand text-brand-middle/75 xl:text-5xl rl:text-4xl md:text-3xl text-2xl mt-4 first:mt-0 font-bold md:!leading-snug md:mb-10 max-md:-order-2"><?= get_the_title() ?></h3>
                    <div class="text-content rl:max-w-[90%] md:!leading-relaxed md:mb-10 rl:mb-20">
                        <?= get_the_content() ?>
                    </div>
                    <div class="flex text-content flex-row  justify-between max-md:-order-1">
                        <div class="flex text-content flex-row gap-10 rl:gap-20">
                            <p class="flex gap-3 items-center">
                                <svg class="fill-brand-middle ease-all w-5 h-5 rl:w-[30px] rl:h-[30px]">
                                    <use xlink:href="#price"></use>
                                </svg>
                                <span><?= $price ?>€</span>
                            </p>
                            <p class="flex gap-3 items-center">
                                <svg class="fill-brand-middle ease-all w-5 h-5 rl:w-[28px] rl:h-[28px]">
                                    <use xlink:href="#time"></use>
                                </svg>
                                <span><?= $time ?> min</span>
                            </p>
                        </div>

                        <a class="btn-primary-reverse !mt-0 text-nowrap max-md:w-full text-center max-rl:self-start rl:self-end max-md:hidden"
                           href="#contact">
                            <span class="relative z-10"><?= __('Réserver un massage', 'iyaka') ?></span>
                        </a>
                    </div>
                    <a class="btn-primary-reverse !mt-0 text-nowrap max-md:w-full text-center max-rl:self-start rl:self-end md:hidden"
                       href="#contact">
                        <span class="relative z-10"><?= __('Réserver un massage', 'iyaka') ?></span>
                    </a>
                </div>

            </article>
        <?php endwhile;
        echo '
<div class="flex justify-center">
<button id="loadmore" class="btn-primary max-md:!mt-0 text-nowrap text-center rl:self-end max-md:w-fit max-md:px-10">
                <span class="relative z-10">' . __('Voir plus', 'iyaka') . '</span></button>
</div>';

        echo '</div>';
    endif;
    wp_reset_query(); ?>
</section>
