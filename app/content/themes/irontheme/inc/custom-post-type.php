<?php
// Register Custom Post Type
function product_post_type() {

  $labels = array(
    'name'                  => _x( 'Товары', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Товар', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Товары', 'ith' ),
    'name_admin_bar'        => __( 'Товары', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Товар', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-cart',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'product', $args );

}
add_action( 'init', 'product_post_type', 0 );