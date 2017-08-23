<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_blogs' );
/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_blogs() {
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $blogs_managemant = array(
    'id'          => 'blogs_managemant',
    'title'       => __( 'Custom blogs Management', 'digitalgreen' ),
    'desc'        => '',
    'pages'       => array( 'blogs' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      
      array(
      'id'          => 'blogs_short_desc',
      'label'       => __( 'Short Description', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 

      array(
      'id'          => 'blogs_by',
      'label'       => __( 'blogs Written By', 'digitalgreen' ),
      
        'type'        => 'text'
      ), 


     
     array(
    'id'          => 'blogs_blog_image',
    'label'       => __( 'Image', 'digitalgreen' ),
    'type'        => 'upload'
      ),

     /*array(
      'id'          => 'blogs_description',
      'label'       => __( 'Blogs Description', 'digitalgreen' ),
      
        'type'        => 'textarea'
      ),  */

     array(
              'id'          => 'blogs_attach',
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
    ot_register_meta_box( $blogs_managemant );
}