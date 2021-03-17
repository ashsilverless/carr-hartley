<?php 
add_action( 'init', 'custom_post_type_safari', 0 );
add_action( 'init', 'custom_post_type_country', 0 );
add_action( 'init', 'custom_post_type_itinerary', 0 );

// ====== Safari
function custom_post_type_safari() {

    $labels = array(
        'name'                => _x( 'Safari', 'Post Type General Name'),
        'singular_name'       => _x( 'Safari',  'Post Type Singular Name'),
        'menu_name'           => __( 'Safari Type'),
        'parent_item_colon'   => __( 'Parent Safari'),
        'all_items'           => __( 'All Safaris'),
        'view_item'           => __( 'View Safaris'),
        'add_new_item'        => __( 'Add New Safari Type'),
        'add_new'             => __( 'Add Safari Type' ),
        'edit_item'           => __( 'Edit Safari Type' ),
        'update_item'         => __( 'Update Safari Type' ),
        'search_items'        => __( 'Search Safari Types' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'safari' ),
        'description'         => __( 'safari'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail', 'page-attributes' ),
        'menu_icon'           => 'dashicons-admin-multisite',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'safari', $args );
}
// ====== Country
function custom_post_type_country() {

    $labels = array(
        'name'                => _x( 'Country', 'Post Type General Name' ),
        'singular_name'       => _x( 'Country',  'Post Type Singular Name' ),
        'menu_name'           => __( 'Country' ),
        'parent_item_colon'   => __( 'Parent Country'),
        'all_items'           => __( 'All Countries' ),
        'view_item'           => __( 'View Country' ),
        'add_new_item'        => __( 'Add New Country' ),
        'add_new'             => __( 'Add Country' ),
        'edit_item'           => __( 'Edit Country' ),
        'update_item'         => __( 'Update Country' ),
        'search_items'        => __( 'Search Country' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' )
    );

    $args = array(
        'label'               => __( 'country' ),
        'description'         => __( 'country' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail' ),
        'menu_icon'           => 'dashicons-location-alt',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'country', $args );
}
// ====== Sample Itinerary
function custom_post_type_itinerary() {

    $labels = array(
        'name'                => _x( 'Itinerary', 'Post Type General Name'),
        'singular_name'       => _x( 'Itinerary',  'Post Type Singular Name'),
        'menu_name'           => __( 'Itinerary Type'),
        'parent_item_colon'   => __( 'Parent Itinerary'),
        'all_items'           => __( 'All Itineraries'),
        'view_item'           => __( 'View Itinerary'),
        'add_new_item'        => __( 'Add New Itinerary Type'),
        'add_new'             => __( 'Add Itinerary Type' ),
        'edit_item'           => __( 'Edit Itinerary Type' ),
        'update_item'         => __( 'Update Itinerary Type' ),
        'search_items'        => __( 'Search Itinerary Types' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'itinerary' ),
        'description'         => __( 'itinerary'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail' ),
        'menu_icon'           => 'dashicons-excerpt-view',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'itinerary', $args );
}
add_action( 'init', 'taxonomy_region', 0 );

// ====== Type Region
function taxonomy_region() {

    $labels = array(
        'name'              => _x( 'Region', 'taxonomy general name' ),
        'singular_name'     => _x( 'Region', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Regions'   ),
        'all_items'         => __( 'All Regions'     ),
        'parent_item'       => __( 'Parent Region'   ),
        'parent_item_colon' => __( 'Parent Region:'  ),
        'edit_item'         => __( 'Edit Region'     ),
        'update_item'       => __( 'Update Region'   ),
        'add_new_item'      => __( 'Add New Region'  ),
        'new_item_name'     => __( 'New Region' ),
        'menu_name'         => __( 'Regions'         )
    );

    register_taxonomy( 'region', array( 'safari' , 'country' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'region', 'hierarchical' => true )
    ));
}