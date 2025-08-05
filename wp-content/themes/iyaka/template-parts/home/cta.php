<?php
$title = get_field('cta_title');
$content = get_field('cta_content');
$word = get_field('cta_word');
$img = get_field('cta_img');
$button = get_field('cta_button');
?>

<section aria-labelledby="cta" class="grid-default-12 max-rg:items-center max-rg:gap-12 max-rg:!flex max-rg:flex-col-reverse bg-brand/65 relative pt-12 pb-24 mt-40 mb-32">
    <div class="col-span-full rg:col-start-3 rg:col-span-6 rl:col-start-3 rl:col-span-10 lg:col-start-4 lg:col-span-9 xl:pl-10 h-full">


        <h2 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-6.5xl relative z-1 mb-6 rg:!leading-snug rl:max-w-[90%] 3xl:max-w-[70%]" id="cta"></h2>
        <div class="flex max-rl:flex-col max-3xl:justify-between 3xl:gap-40 max-rl:gap-14 items-center rl:items-end">
            <div class="text-content  rl:leading-10 rl:max-w-[650px]">
                <?= $content ?>
            </div>
            <a class="btn-primary !mt-0 text-nowrap max-md:w-full text-center rl:self-end" href="<?= $button['url'] ?>">
                <span class="relative z-10"><?= $button['title'] ?></span>
            </a>
        </div>
    </div>


    <div class="-mt-32 md:max-rg:-mt-40 outline outline-[12px] lg:outline-[20px] rg:absolute outline-brand-middle rounded-full aspect-square w-[60%] h-[60%] sm:w-[50%] sm:h-[50%] rg:w-[380px] rg:h-[380px] lg:w-[450px] lg:h-[450px] xg:w-[520px] xg:h-[520px] 3xl:w-[620px] 3xl:h-[620px] overflow-hidden rg:top-20 rg:-left-28 rl:-left-32 rl:top-20 lg:-left-24 lg:top-20 xg:-left-[7%] xg:top-[20%] 3xl:top-[5%] 3xl:-left-[5%]">
        <?php echo wp_get_attachment_image($img['id'], '1536x1536', false, ['class' => 'ease-all w-full h-full  inline-block  ']); ?>
    </div>
<p class="max-md:hidden absolute uppercase font-quicksand right-0 -bottom-8 lg:-bottom-12 text-brand-light/30 text-6xl rl:text-7xl lg:text-8xl font-semibold "><?= $word ?></p>
</section>
