<?php 

function programs_register_post_type() {
	register_post_type('programs', array(
		'labels'             => array(
			'name'               => esc_html__('Programs', 'wshop'),  
			'singular_name'      => esc_html__('Program on main', 'wshop'),  
			'add_new'            => esc_html__('Add new', 'wshop'),
			'add_new_item'       => esc_html__('Add new program', 'wshop'),
			'edit_item'          => esc_html__('Edit program', 'wshop'),
			'new_item'           => esc_html__('New program', 'wshop'),
			'view_item'          => esc_html__('View program', 'wshop'),
			'search_items'       => esc_html__('Find program', 'wshop'),
			'not_found'          => esc_html__('Programs not found', 'wshop'),
			'not_found_in_trash' => esc_html__('There is no Program', 'wshop'),
			'parent_item_colon'  => '',
			'menu_name'          => esc_html__('Programs', 'wshop')
		),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'exclude_from_search' => true,   
		'show_in_nav_menus'  => false,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-excerpt-view',
		'supports'           => array('title', 'thumbnail', 'editor'),
		'show_in_rest'       => true, 
	));
}

add_action('init', 'programs_register_post_type');
