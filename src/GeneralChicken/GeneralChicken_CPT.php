<?php

namespace GeneralChicken;
// Register Custom Post Type
function GeneralChickenCPT() {

    $labels = array(
        'name'                  => _x( 'Downloads', 'general-chicken' ),
        'singular_name'         => _x( 'download',  'general-chicken' ),
        'menu_name'             => __( 'Downloads', 'general-chicken' ),
        'name_admin_bar'        => __( 'Downloads', 'general-chicken' ),
        'archives'              => __( 'Download Archives', 'general-chicken' ),
        'attributes'            => __( 'Download Attributes', 'general-chicken' ),
        'parent_item_colon'     => __( 'Parent Download:', 'general-chicken' ),
        'all_items'             => __( 'All Downloads', 'general-chicken' ),
        'add_new_item'          => __( 'Add New Download', 'general-chicken' ),
        'add_new'               => __( 'Add New', 'general-chicken' ),
        'new_item'              => __( 'New Download', 'general-chicken' ),
        'edit_item'             => __( 'Edit Download', 'general-chicken' ),
        'update_item'           => __( 'Update Download', 'general-chicken' ),
        'view_item'             => __( 'View Download', 'general-chicken' ),
        'view_items'            => __( 'View Download', 'general-chicken' ),
        'search_items'          => __( 'Search Download', 'general-chicken' ),
        'not_found'             => __( 'Not found', 'general-chicken' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'general-chicken' ),
        'featured_image'        => __( 'Featured Image', 'general-chicken' ),
        'set_featured_image'    => __( 'Set featured image', 'general-chicken' ),
        'remove_featured_image' => __( 'Remove featured image', 'general-chicken' ),
        'use_featured_image'    => __( 'Use as featured image', 'general-chicken' ),
        'insert_into_item'      => __( 'Insert into Download', 'general-chicken' ),
        'uploaded_to_this_item' => __( 'Uploaded to this general-chicken', 'general-chicken' ),
        'items_list'            => __( 'Items list', 'general-chicken' ),
        'items_list_navigation' => __( 'Items list navigation', 'general-chicken' ),
        'filter_items_list'     => __( 'Filter items list', 'general-chicken' ),
    );
    $args = array(
        'label'                 => __( 'general-chicken', 'general-chicken' ),
        'description'           => __( 'A list of transactions', 'general-chicken' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => false,
    );
    register_post_type( 'general-chicken', $args );

}
add_action( 'init', 'GeneralChicken\GeneralChickenCPT', 0 );