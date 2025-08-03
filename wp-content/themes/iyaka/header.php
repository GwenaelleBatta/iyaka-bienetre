<!DOCTYPE html>
<html <?= language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col min-h-screen') ?>>
<?php wp_body_open(); ?>
<?php include get_theme_file_path() . '/inc/svg.php';

get_template_part('template-parts/skiplinks');
get_template_part('template-parts/header', null, [
    'id' => 'basic-2',
    'with_burger_on_desktop' => false,
    'burger_with_border' => false,
    'last_item_is_btn' => false,
    'with_lang_switcher' => false,
]);