<?php

/**
 * @param $name
 * @param array $args
 * https://developer.wordpress.org/resource/dashicons/#schedule
 */
function add_post_type( $name, $args = array() ) {
	add_action( 'init', function () use ( $name, $args ) {
		$upper = ucwords( $name );
		$name  = strtolower( str_replace( ' ', '_', $name ) );

		$args = array_merge(
			[
				'public'      => true,
				'label'       => $upper . "s",
				'labels'      => array( 'add_new_item' => "Add new $upper" ),
				'supports'    => array( 'title', 'editor', 'comments', 'thumbnail' ),
				'has_archive' => true
			],
			$args );

		register_post_type( $name, $args );
	} );
}

function add_taxonomy( $name, $post_type, $args = array() ) {
	$name = strtolower( $name );
	add_action( 'init', function () use ( $name, $post_type, $args ) {
		$args = array_merge(
			[
				'label' => ucwords( $name )
			],
			$args );

		register_taxonomy( $name, $post_type, $args );
	} );
}

add_post_type( 'Project', [
    'public' => true,
//    'menu_position' => 5,
    'labels'      => [ 'add_new_item' => "Add new Project" ],
    'supports' => ['title', 'editor','thumbnail'],
    'taxonomies'  => [ 'project-category'],
    'has_archive' => true,
] );



$labels = array(
    'name'                       => _x( 'Project Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'Project Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Project Categories' ),
    'popular_items'              => __( 'Popular Project Categories' ),
    'all_items'                  => __( 'All Project Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Project Category' ),
    'update_item'                => __( 'Update Project Category' ),
    'add_new_item'               => __( 'Add New Project Category' ),
    'new_item_name'              => __( 'New Project Category Name' ),
    'separate_items_with_commas' => __( 'Separate Project categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Project categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used Project categories' ),
    'menu_name'                  => __( ' Project Categories' ),
);

add_taxonomy( "project-category", 'project', [
	'labels'       => $labels,
    'hierarchical' => true
] );



add_post_type( 'Service', [
    'public' => true,
//    'menu_position' => 5,
    'labels'      => [ 'add_new_item' => "Add new Service" ],
    'supports' => ['title', 'editor','thumbnail'],
    'taxonomies'  => [ 'service-category'],
    'has_archive' => true,
] );



$labels = array(
    'name'                       => _x( 'Service Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'Service Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Service Categories' ),
    'popular_items'              => __( 'Popular Service Categories' ),
    'all_items'                  => __( 'All Service Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Service Category' ),
    'update_item'                => __( 'Update Service Category' ),
    'add_new_item'               => __( 'Add New Service Category' ),
    'new_item_name'              => __( 'New Service Category Name' ),
    'separate_items_with_commas' => __( 'Separate Service categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Service categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used Service categories' ),
    'menu_name'                  => __( ' Service Categories' ),
);

add_taxonomy( "service-category", 'service', [
	'labels'       => $labels,
    'hierarchical' => true
] );

add_post_type( 'Testimonial', [
    'public' => true,
//    'menu_position' => 5,
//    'labels'      => [ 'add_new_item' => "Add new Testimonial" ],
    'supports' => ['title', 'editor','thumbnail'],
    'has_archive' => true,
    'labels' => array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in Trash',
    ),
] );


add_post_type( 'Team', [
    'public' => true,
//    'menu_position' => 5,
//    'labels'      => [ 'add_new_item' => "Add new Testimonial" ],
    'supports' => ['title', 'editor','thumbnail'],
    'has_archive' => true,
    'labels' => array(
        'name' => 'Teams',
        'singular_name' => 'Team',
        'add_new' => 'Add New Team',
        'add_new_item' => 'Add New Team',
        'edit_item' => 'Edit Team',
        'new_item' => 'New Team',
        'view_item' => 'View Team',
        'search_items' => 'Search Team',
        'not_found' => 'No Team found',
        'not_found_in_trash' => 'No Team found in Trash',
    ),
] );


// clear the permalinks after the post type has been registered
flush_rewrite_rules();


