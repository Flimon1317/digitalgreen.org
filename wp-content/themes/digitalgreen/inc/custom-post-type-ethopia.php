<?php
/*
Custom post type : ethopia
*/
add_action( 'init', 'create_post_type_ethopia' );
function create_post_type_ethopia() {
  register_post_type( 'ethopia',
    array(
      'labels' => array(
        'name' => __( 'ethopia projects' ),
        'singular_name' => __( 'ethopia' ),
		'add_new_item' => __( 'Add New ethopia' ),
		'all_items' => __( 'All ethopia' ),
		'edit_item' => __( 'Edit ethopia' ),
		'new_item' => __( 'New ethopia' ),
		'search_item' => __( 'Search ethopia' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























