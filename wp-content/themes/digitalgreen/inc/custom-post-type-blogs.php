<?php
/*
Custom post type : blogs
*/
add_action( 'init', 'create_post_type_blogs' );
function create_post_type_blogs() {
  register_post_type( 'blogs',
    array(
      'labels' => array(
        'name' => __( 'blogs' ),
        'singular_name' => __( 'blogs' ),
		'add_new_item' => __( 'Add New blogs' ),
		'all_items' => __( 'All blogs' ),
		'edit_item' => __( 'Edit blogs' ),
		'new_item' => __( 'New blogs' ),
		'search_item' => __( 'Search blogs' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























