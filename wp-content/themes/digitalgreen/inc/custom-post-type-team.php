<?php
/*
Custom post type : team
*/
add_action( 'init', 'create_post_type_team' );
function create_post_type_team() {
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'team' ),
        'singular_name' => __( 'team' ),
		'add_new_item' => __( 'Add New team' ),
		'all_items' => __( 'All team' ),
		'edit_item' => __( 'Edit team' ),
		'new_item' => __( 'New team' ),
		'search_item' => __( 'Search team' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























