<?php

/** CPTS **/
global $massage;

function create_post_types()
{
    global $massage;
    register_custom_post_type($massage);
}

$massage = [
    'name' => 'Massage',
    'slug' => 'massage',
    'menu_icon' => 'dashicons-admin-comments',
    'publicly_queryable' => true,
    'supports' => [
        'title', 'editor', 'thumbnail'
    ],
    'taxonomies' => []
];

function register_custom_post_type($post_type)
{
    register_post_type($post_type['slug'], [
        'label' => $post_type['name'],
        'labels' => [
            'name' => $post_type['name'] . 's',
            'singular_name' => $post_type['name'],
            'add_new' => 'Ajouter un élément',
            'add_new_item' => 'Ajouter un nouvel élément',
            'new_item' => 'Nouvel élément',
            'edit_item' => 'Modifier un élément',
            'view_item' => 'Voir l’élément',
            'all_items' => 'Tous les élément',
            'search_items' => 'Rechercher un élément',
        ],
        'publicly_queryable' => $post_type['publicly_queryable'] ?? false,
        'description' => $post_type['name'] . 's crées',
        'menu_position' => 10,
        'menu_icon' => $post_type['menu_icon'] ?? 'dashicons-admin-post',
        'public' => true,
        'has_archive' => $post_type['has_archive'] ?? false,
        'show_ui' => true,
        'supports' => $post_type['supports'] ?? [
                'title', 'thumbnail',
            ],
    ]);

    foreach ($post_type['taxonomies'] as $taxonomy) {
        register_taxonomy(
            $taxonomy['slug'],
            $post_type['slug'],
            [
                'label' => $taxonomy['name'],
                'labels' => [
                    'name' => $taxonomy['name'] . 's',
                    'singular_name' => $taxonomy['name'],
                    'all_items' => 'Toutes les ' . $taxonomy['name'] . 's',
                    'edit_item' => 'Éditer la ' . $taxonomy['name'],
                    'view_item' => 'Voir la ' . $taxonomy['name'],
                    'update_item' => 'Mettre à jour la ' . $taxonomy['name'],
                    'add_new_item' => 'Ajouter une ' . $taxonomy['name'],
                    'new_item_name' => 'Nouvelle ' . $taxonomy['name'],
                    'search_items' => 'Rechercher parmi les ' . $taxonomy['name'] . 's',
                    'popular_items' => $taxonomy['name'] . 's les plus utilisées',
                ],
                'show_admin_column' => true,
                'hierarchical' => $taxonomy['hierarchical'] ?? true,
            ]
        );
    }
}

add_action('init', 'create_post_types');
