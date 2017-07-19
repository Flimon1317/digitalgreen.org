<?php
/*
Custom post type : partners
*/
add_action( 'init', 'create_post_type_partners' );
function create_post_type_partners() {
  register_post_type( 'partners',
    array(
      'labels' => array(
        'name' => __( 'partners' ),
        'singular_name' => __( 'partners' ),
		'add_new_item' => __( 'Add New partners' ),
		'all_items' => __( 'All partners' ),
		'edit_item' => __( 'Edit partners' ),
		'new_item' => __( 'New partners' ),
		'search_item' => __( 'Search partners' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























