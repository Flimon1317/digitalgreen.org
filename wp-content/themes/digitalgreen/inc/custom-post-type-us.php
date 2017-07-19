<?php
/*
Custom post type : US
*/
add_action( 'init', 'create_post_type_us' );
function create_post_type_us() {
  register_post_type( 'us',
    array(
      'labels' => array(
        'name' => __( 'US projects' ),
        'singular_name' => __( 'india' ),
		'add_new_item' => __( 'Add New US' ),
		'all_items' => __( 'All US' ),
		'edit_item' => __( 'Edit US' ),
		'new_item' => __( 'New US' ),
		'search_item' => __( 'Search US' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























