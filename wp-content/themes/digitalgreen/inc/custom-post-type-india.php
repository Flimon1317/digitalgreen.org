<?php
/*
Custom post type : india
*/
add_action( 'init', 'create_post_type_india' );
function create_post_type_india() {
  register_post_type( 'india',
    array(
      'labels' => array(
        'name' => __( 'india projects' ),
        'singular_name' => __( 'india' ),
		'add_new_item' => __( 'Add New india' ),
		'all_items' => __( 'All india' ),
		'edit_item' => __( 'Edit india' ),
		'new_item' => __( 'New india' ),
		'search_item' => __( 'Search india' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























