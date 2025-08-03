<?php
/*
 * This template is used for the display of 404 (Not Found) errors.
 */

get_header(); ?>
    <div id="rgpd-page"
         class="py-28 gap-y-12  bg-grey-lightest relative flex flex-col ">
    <div class="rl:gap-2 flex flex-col items-center gap-1 text-center relative mb-10 md:mb-20">
        <h1 class="text-brand-light font-quicksand font-bold text-4xl md:text-5xl lg:text-6xl xg:text-7xl relative z-1">
            <?= __('Page non trouvée', 'iyaka') ?>
        </h1>
        <span class="inline-block w-[70vw] md:w-[60vw] absolute bg-brand left-0 md:-left-20 h-20 -top-5 rg:h-32 xg:h-40 rg:-top-10"></span>
    </div>
    <div class="text-center text-content">
        <p> <?= __("La page que vous chercher n'a pas pu être trouvée" , 'iyaka') ?></p>
        <a class="btn-primary" href="<?= get_home_url() ?>">
           <span class="relative z-10"> <?= __("Retourner à la page d'accueil" , 'iyaka') ?></span>
        </a>
    </div>
    </div>
<?php get_footer(); ?>