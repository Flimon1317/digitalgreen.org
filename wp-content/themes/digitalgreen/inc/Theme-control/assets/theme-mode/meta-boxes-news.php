<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_news' );
/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_news() {
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $news_managemant = array(
    'id'          => 'news_managemant',
    'title'       => __( 'Custom news Management', 'digitalgreen' ),
    'desc'        => '',
    'pages'       => array( 'news' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      
      array(
      'id'          => 'news_short_desc',
      'label'       => __( 'Short Description', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 

      array(
      'id'          => 'news_by',
      'label'       => __( 'News Written By', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 
 
     array(
		'id'          => 'news_blog_image',
		'label'       => __( 'Banner Image', 'digitalgreen' ),
		'type'        => 'upload'
      ),

    /* array(
      'id'          => 'news_description',
      'label'       => __( 'News Description', 'digitalgreen' ),
      
        'type'        => 'textarea'
      ), */

     array(
              'id'          => 'news_attach',
              'label'       => __( 'upload attachment or add link', 'digitalgreen' ),
              'type'        => 'upload'
              
              ),

	 	
    )
  );
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $news_managemant );
}