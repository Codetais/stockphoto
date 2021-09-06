<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Customers.
	 */

	$labels = [
		"name" => __( "Customers", "stockphoto" ),
		"singular_name" => __( "Customers", "stockphoto" ),
	];

	$args = [
		"label" => __( "Customers", "stockphoto" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "customers", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "customers", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts_customers() {

	/**
	 * Post Type: Customers.
	 */

	$labels = [
		"name" => __( "Customers", "stockphoto" ),
		"singular_name" => __( "Customers", "stockphoto" ),
	];

	$args = [
		"label" => __( "Customers", "stockphoto" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "customers", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "customers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_customers' );
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_6132f86a31e35',
		'title' => 'Slider',
		'fields' => array(
			array(
				'key' => 'field_6132f8865fd63',
				'label' => 'image one',
				'name' => 'image_one',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_6132f89b5fd64',
				'label' => 'image two',
				'name' => 'image_two',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_6132f8ab5fd65',
				'label' => 'download file',
				'name' => 'download_file',
				'type' => 'file',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;