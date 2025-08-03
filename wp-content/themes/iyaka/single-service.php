<?php get_header();

$content = get_field('service_content');
$btn = get_field('service_btn');
$id= get_field('service_gallery');
$gallery_data = get_post_meta($id, '_eg_gallery_data', true);
$images = [];
if (!empty($gallery_data['gallery'])) {
    $images = $gallery_data['gallery'];
}
if (count($images) > 10):
    $keys = array_keys($images);
    $tenth_id = $keys[10];
endif;
?>

    <div id="about"
         class="section-container grid-default  bg-grey/5 gap-y-12 rl:gap-y-20 rl:pt-60 rl:pb-32 pt-40 pb-12 relative">
        <div class="col-span-full flex flex-col gap-4  rg:col-start-5 rg:col-span-4 rl:col-start-8 rl:col-span-7 xl:col-start-8 xl:col-span-6 rl:px-12 xl:px-20 rg:row-start-1 max-rg:-order-2 ">
            <p class="text-white font-quicksand w-fit bg-brand p-1  relative text-2.5xl rg:text-3.5xl font-light max-md:self-center"><?= __('Services', 'iyaka') ?></p>
            <h1 class="text-3xl rg:text-4.5xl !leading-snug  font-bold max-md:text-center">
                <?= get_the_title() ?>
            </h1>
            <div class="rl:gap-12 flex flex-col gap-6 mt-4 ">
                <?php if ($content) : ?>
                    <div class="text-content text-start">
                        <?= $content ?>
                    </div>
                <?php endif; ?>
                <?php if ($btn) : ?>
                    <div class="flex gap-5 max-sd:flex-col max-md:items-center max-md:justify-center">
                        <a href="<?= $btn['url'] ?>" class="btn-primary max-sd:min-w-[80%] max-sd:text-center !mt-0">
                            <span class="relative z-1"><?= $btn['title'] ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (count($images)) : ?>
            <div class="col-span-full row-start-1 rg:col-start-1 rg:col-span-4 rl:col-start-2 rl:col-span-6  h-full max-rg:row-start-2 relative ">
                <div class="grid gap-3 h-fit sticky top-0 grid-cols-6 ">
                    <?php foreach ($images as $index => $img) : ?>
                        <a href="<?= $img["src"] ?>" data-fancybox="gallery"
                           class="group bg-brand last:col-span-4 first:col-span-4 col-span-2 relative inline-block w-full max-h-[400px] overflow-hidden">
                            <?= wp_get_attachment_image($index, 'large', false, ['class' => 'ease-all group-hover:opacity-70 object-cover w-full h-full']); ?>
                            <span class="ease-all group-hover:translate-x-0 group-hover:opacity-100 opacity-0 absolute bottom-0 left-0 p-2 translate-x-full bg-brand">
                            <svg class="fill-white w-6 h-6 -scale-x-100">
                                <use xlink:href="#zoom" class=""></use>
                            </svg>
                        </span>
                            <span class="sr-only"><?= __("Voir l'image en détail") ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="absolute right-0 bottom-0  max-md:-bottom-8 max-md:-right-8 max-xl:-bottom-2 max-xl:-right-6 max-xl:scale-[0.8]  max-md:scale-75 max-md:hidden">
            <?php get_template_part('template-parts/shapes'); ?>
        </div>
        <div class="absolute left-0 top-0  max-md:-top-8 max-md:-left-8 max-xl:-top-2 max-xl:-left-6 max-xl:scale-[0.8]  max-md:scale-75 rotate-180 max-md:hidden">
            <?php get_template_part('template-parts/shapes'); ?>
        </div>
    </div>

<?php get_footer(); ?>