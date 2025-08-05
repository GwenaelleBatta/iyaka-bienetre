<?php

$title = get_field('contact_title');
$word = get_field('contact_word');

$informations = get_field('iyaka_informations', 5);
$legalName = get_the_title(5);
$phone = $informations['contact_phone'];
$email = $informations ["contact_mail"];
$distance = $informations ["contact_distance"];
$schedules = $informations ["contact_schedules"];

$facebook = $informations ["contact_facebook"];
$instagram = $informations ["contact_instagram"];
$linkedin = $informations ["contact_linkedin"];
?>
<section class="pb-20 rl:pb-40 pt-24">
<!--    <h2 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-6.5xl relative z-1  rg:!leading-snug rl:max-w-[90%] 3xl:max-w-[70%] "-->
<!--        id="contact">--><?php //= $title ?><!--</h2>-->

    <div class="grid-default-12 rl:gap-2  gap-1 text-center relative mb-20 md:mb-40">
        <h2 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-7xl relative z-1 col-span-3 col-start-2 max-md:text-end md:col-span-4 md:col-start-4 rl:col-start-7 rl:col-span-4">
            <?= $title?>
        </h2>
        <span class="inline-block w-[70vw] md:w-[65vw] absolute bg-brand left-0 md:-left-20 h-20 -top-5 rg:h-32 xg:h-40 rg:-top-10"></span>
    </div>
    <div class="grid-default-12 relative max-md:gap-y-20">
        <section class="col-span-full md:col-span-4 rl:col-span-5 lg:col-span-4 row-span-2 rl:row-span-2 ">
            <h3 class="tracking-widest uppercase font-quicksand text-brand-middle/75 xl:text-5xl rl:text-4xl md:text-3xl text-2xl mt-4 first:mt-0 font-bold md:!leading-snug"><?= __('Informations', 'iyaka') ?></h3>
            <ul class="!m-0 divide-brand-light xl:text-xl flex flex-col text-lg divide-y">
                <?php if ($phone) : ?>
                    <li>
                        <a href="tel:<?= filter_var(str_replace(['-', '(0)'], '', $phone), FILTER_SANITIZE_NUMBER_INT) ?>"
                           target="_blank"
                           class="underlined-link after:bg-brand fill-brand ease-all rl:py-4 flex items-center w-full gap-4 py-3 text-grey">
                            <svg aria-hidden="true" class="shrink-0 fill-brand-middle ease-all w-5 h-5">
                                <use xlink:href="#phone"></use>
                            </svg>
                            <span><?= $phone; ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($email) : ?>
                    <li>
                        <a href="mailto:<?= $email ?>" target="_blank"
                           class="underlined-link after:bg-brand fill-brand ease-all rl:py-4 flex items-center w-full gap-4 py-3 !text-grey">
                            <svg aria-hidden="true" class="shrink-0 fill-brand-middle ease-all w-5 h-5">
                                <use xlink:href="#mail"></use>
                            </svg>
                            <span><?= $email; ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($distance) : ?>
                    <li class="fill-brand-middle  ease-all rl:py-4 relative flex w-full gap-4 py-3 text-grey">
                        <svg aria-hidden="true" class="shrink-0 ease-all w-5 h-5 mt-1.5">
                            <use xlink:href="#car"></use>
                        </svg>
                        <span><?= $distance; ?></span>
                    </li>
                <?php endif; ?>
                <?php if ($schedules) : ?>
                    <li class="fill-brand-middle ease-all rl:py-4 relative flex  w-full gap-4 py-3 text-grey">
                        <svg aria-hidden="true" class="shrink-0 ease-all w-5 h-5 mt-1.5">
                            <use xlink:href="#schedules"></use>
                        </svg>
                        <span><?= $schedules; ?></span>

                    </li>
                <?php endif; ?>
            </ul>
        </section>
        <section class="col-span-full md:col-span-3 md:col-start-6 rl:col-span-5 rl:col-start-7">
            <h3 class="tracking-widest uppercase font-quicksand text-brand-middle/75 xl:text-5xl rl:text-4xl md:text-3xl text-2xl mt-4 first:mt-0 font-bold md:!leading-snug"><?= __('Réseaux sociaux', 'iyaka') ?></h3>
            <ul class="socials-menu mt-5 rl:mt-10 !h-fit">
                <?php if ($facebook) : ?>
                    <li>
                        <a href="<?= $facebook ?>" target="_blank" class="group">
                            <span class="sr-only"><?= __('Voir la page Facebook', 'iyaka') ?></span>
                            <svg class="fill-brand-light group-hover:fill-brand-dark group-focus-visible:fill-brand-dark group-hover:scale-110 ease-all w-4 h-4 rl:w-6 rl:h-6">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($instagram) : ?>
                    <li>
                        <a href="<?= $instagram ?>" target="_blank" class="group">
                            <span class="sr-only"><?= __('Voir la page Instagram', 'iyaka') ?></span>
                            <svg class="fill-brand-light group-hover:fill-brand-dark group-focus-visible:fill-brand-dark group-hover:scale-110 ease-all w-4 h-4 rl:w-6 rl:h-6">
                                <use xlink:href="#instagram"></use>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($linkedin) : ?>
                    <li>
                        <a href="<?= $linkedin ?>" target="_blank" class="group">
                            <span class="sr-only"><?= __('Voir le profil Linkedin', 'iyaka') ?></span>
                            <svg class="fill-brand-light group-hover:fill-brand-dark group-focus-visible:fill-brand-dark group-hover:scale-110 ease-all w-4 h-4 rl:w-6 rl:h-6">
                                <use xlink:href="#linkedin"></use>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </section>

    <p class=" relative z-1 uppercase font-quicksand  text-brand-light/30 text-6xl rl:text-7xl lg:text-8xl font-semibold   text-end max-md:-translate-x-14 md:max-rl:-translate-x-20 3xl:-translate-x-28 col-span-4  rl:col-span-4 rl:col-end-13  h-fit self-end"><?= $word ?></p>
    <span class="inline-block  w-[50vw] sm:w-[25vw] md:w-[25vw] rg:w-[20vw] xg:w-[15vw] absolute bg-brand right-0 h-20  rg:h-32 xg:h-40 bottom-0"></span>


    </div>

</section>
