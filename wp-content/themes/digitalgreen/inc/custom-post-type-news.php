<?php
/*
Custom post type : news
*/
add_action( 'init', 'create_post_type_news' );
function create_post_type_news() {
  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'news' ),
        'singular_name' => __( 'news' ),
		'add_new_item' => __( 'Add New news' ),
		'all_items' => __( 'All news' ),
		'edit_item' => __( 'Edit news' ),
		'new_item' => __( 'New news' ),
		'search_item' => __( 'Search news' ),
      ),
	  'menu_position'  => 5,
	  'public' => true,
	  'has_archive' => true,
	  'taxonomies' => array('post_tag','post'),
	  'supports' => array('editor','title','thumbnail','custom-fields'/*'page-attributes',*/),
    )
  );
}






























