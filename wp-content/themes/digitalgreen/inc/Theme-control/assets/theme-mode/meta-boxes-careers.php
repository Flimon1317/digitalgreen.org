<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_careers' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */



function custom_meta_boxes_careers() {

 
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $careers_managemant = array(
    'id'          => 'careers_managemant',
    'title'       => __( 'Custom careers Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'careers' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      
      array(
      'id'          => 'job_location',
      'label'       => __( 'Job Location', 'theme-text-domain' ),
      'desc'        => '',
      'type'        => 'text'
      ),

      

      

    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $careers_managemant );

}