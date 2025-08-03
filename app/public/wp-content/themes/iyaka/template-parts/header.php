<?php

$id = $args['id'] ?? null;
$informations = get_field('iyaka_informations', 5);

$with_burger_on_desktop = $args['with_burger_on_desktop'] ?? false;
$burger_with_border = $args['burger_with_border'] ?? false;
$last_item_is_btn = $args['last_item_is_btn'] ?? false;
$with_lang_switcher = $args['with_lang_switcher'] ?? false;
$group_items = $args['group_items'] ?? false;


$logo = get_field('logo', 5);

$facebook = $informations ["contact_facebook"];
$instagram = $informations ["contact_instagram"];
$linkedin = $informations ["contact_linkedin"];

?>

<header class="double-lines-header relative inset-x-0 z-40 bg-white py-3 ">
    <div class="main-header font-sarpanch <?= $with_burger_on_desktop ? 'with-burger-on-desktop' : 'without-burger-on-desktop'; ?> grid-default-12 ">
        <input id="toggle-menu-<?= $id ?>" class="toggle-menu hidden" type="checkbox">
        <div class="burger-container col-span-full <?= $with_burger_on_desktop ? '2xl:col-start-2 2xl:col-span-10' : 'rl:col-start-1 rl:col-span-2 2xl:col-start-1 2xl:col-span-2'; ?> relative z-20 flex items-center justify-between">
            <a href="<?= home_url() ?>" class="w-fit inline-block">
                <?php echo wp_get_attachment_image($logo['id'], '1536x1536', false, ['class' => 'ease-all style-svg w-24 md:w-40 rl:w-60 rl:h-60 ']); ?>
                <span class="sr-only"><?= __("Retourner à la page d'accueil") ?></span>
            </a>
            <label tabindex="0"
                   for="toggle-menu-<?= $id ?>"
                   class="burger-menu with-border aspect-square w-14 lg:w-16 rounded-full bg-brand  flex items-center justify-center cursor-pointer relative ease-all">
                    <span class="lines">
                        <span aria-hidden="true" class="line-1 origin-top-right"></span>
                        <span aria-hidden="true" class="line-2"></span>
                        <span aria-hidden="true" class="line-3 origin-bottom-right"></span>
                    </span>
                <span class="sr-only"><?= __('Ouvrir/fermer le menu', 'iyaka') ?></span>
            </label>
        </div>
        <div aria-hidden="true" id="menu-<?= $id ?>"
             class="header-mobile  <?= $with_burger_on_desktop ? '' : 'rl:col-end-13 rl:col-span-9 xl:col-end-13 xl:col-span-8'; ?>">
            <div class="menu-container flex items-center gap-10 max-rl:w-full <?= $with_burger_on_desktop ? 'flex-col lg:gap-16' : 'max-rl:flex-col lg:gap-10'; ?>">
                <div role="navigation" class="max-rl:w-full">
                    <?php wp_nav_menu([
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => $last_item_is_btn ? 'header-menu last-item-is-btn' : 'header-menu',
                    ]); ?>
                </div>
            </div>
            <ul class="socials-menu">
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
        </div>
    </div>
</header>

