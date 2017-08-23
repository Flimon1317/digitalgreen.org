<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_resources' );
/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_resources() {
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $resources_managemant = array(
    'id'          => 'resources_managemant',
    'title'       => __( 'Custom resources Management', 'digitalgreen' ),
    'desc'        => '',
    'pages'       => array( 'resources' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      
      array(
      'id'          => 'resources_short_desc',
      'label'       => __( 'Short Description', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 

      array(
      'id'          => 'resources_by',
      'label'       => __( 'resources Written By', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 


     
     array(
    'id'          => 'resources_blog_image',
    'label'       => __( 'Image', 'digitalgreen' ),
    'type'        => 'upload'
      ),
     
    /* array(
      'id'          => 'resources_description',
      'label'       => __( 'resources Description', 'digitalgreen' ),
      
        'type'        => 'textarea'
      ), */
 
     array(
              'id'          => 'resources_attach',
              'label'       => __( 'upload attachment or add link', 'digitalgreen' ),
              'type'        => 'upload'
              
              ),
    
    /*array(
    'id'          => 'resources_twitter_count',
    'label'       => __( 'Number of Twitter Show', 'digitalgreen' ),
    'desc'        => 'Number of Twitter Show',
    'type'        => 'text'
    ),*/
    )
  );
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $resources_managemant );
}