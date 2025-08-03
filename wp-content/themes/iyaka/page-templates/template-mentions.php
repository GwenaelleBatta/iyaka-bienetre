<?php get_header(); // Template Name: RGPD
$page_id = get_the_ID();
?>
    <div id="rgpd-page"
         class="py-28 gap-y-12  bg-grey-lightest relative flex flex-col ">
        <div class="rl:gap-2 flex flex-col items-center gap-1 text-center relative mb-10 md:mb-20">
            <h1 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-7xl relative z-1">
                <?= get_the_title() ?>
            </h1>
            <span class="inline-block w-[70vw] md:w-[50vw] absolute bg-brand left-0 md:-left-20 h-20 -top-5 rg:h-32 xg:h-40 rg:-top-10"></span>
        </div>

        <div class="grid-default-12 rg:px-default">
            <div class="col-span-full rl:col-start-3 rl:col-span-8 xg:col-start-4 xg:col-span-6 flex flex-col gap-4">
                <?php if ($page_id == 10) :
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
                    <p class="uppercase font-quicksand text-brand-middle/75 xl:text-5xl rl:text-4xl md:text-3xl text-2xl mt-4 first:mt-0 font-bold md:!leading-snug"><?= $legalName ?></p>
                    <ul class="divide-brand-light xl:text-xl flex flex-col text-lg divide-y">
                        <?php if ($phone) : ?>
                            <li>
                                <a href="tel:<?= filter_var(str_replace(['-', '(0)'], '', $phone), FILTER_SANITIZE_NUMBER_INT) ?>"
                                   target="_blank"
                                   class="underlined-link after:bg-brand fill-brand ease-all rl:py-6 flex items-center w-full gap-4 py-3 text-grey">
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
                                   class="underlined-link after:bg-brand fill-brand ease-all rl:py-6 flex items-center w-full gap-4 py-3 text-grey">
                                    <svg aria-hidden="true" class="shrink-0 fill-brand-middle ease-all w-5 h-5">
                                        <use xlink:href="#mail"></use>
                                    </svg>
                                    <span><?= $email; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($distance) : ?>
                            <li class="fill-brand-middle  ease-all rl:py-6 relative flex items-center w-full gap-4 py-3 text-grey">
                                    <svg aria-hidden="true" class="shrink-0 ease-all w-5 h-5 mt-1">
                                        <use xlink:href="#car"></use>
                                    </svg>
                                    <span><?= $distance; ?></span>
                            </li>
                        <?php endif; ?>
                        <?php if ($schedules) : ?>
                            <li class="fill-brand-middle ease-all rl:py-6 relative flex items-center w-full gap-4 py-3 text-grey">
                               <svg aria-hidden="true" class="shrink-0 ease-all w-5 h-5 mt-1">
                                        <use xlink:href="#schedules"></use>
                                    </svg>
                                <span><?= $schedules; ?></span>

                            </li>
                        <?php endif; ?>
                    </ul>
                <?php else : ?>
                <div class="text-content">
                    <?= get_the_content() ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>