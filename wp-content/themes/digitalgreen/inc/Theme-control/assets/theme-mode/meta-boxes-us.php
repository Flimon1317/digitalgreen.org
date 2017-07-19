<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_us' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */



function custom_meta_boxes_us() {

 
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $us_managemant = array(
    'id'          => 'us_managemant',
    'title'       => __( 'Custom US Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'us' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      
      array(
              'id'          => 'us_solutions_place',
              'label'       => __( 'Add place', 'digitalgreen' ),
              'type'        => 'text',
              
              ),
      

      

    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $us_managemant );

}




 