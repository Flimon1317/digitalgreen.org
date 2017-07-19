<?php
/*
Custom post type : resources
*/
add_action( 'init', 'create_post_type_resources' );
function create_post_type_resources() {
  register_post_type( 'resources',
    array(
      'labels' => array(
        'name' => __( 'resources' ),
        'singular_name' => __( 'resources' ),
		'add_new_item' => __( 'Add New resources' ),
		'all_items' => __( 'All resources' ),
		'edit_item' => __( 'Edit resources' ),
		'new_item' => __( 'New resources' ),
		'search_item' => __( 'Search resources' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























