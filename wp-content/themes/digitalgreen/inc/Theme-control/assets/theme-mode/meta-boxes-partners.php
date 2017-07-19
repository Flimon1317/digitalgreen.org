<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_partners' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_partners() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $partners_managemant = array(
    'id'          => 'partners_managemant',
    'title'       => __( 'Custom partners Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'partners' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(	  
	       
	  
      
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $partners_managemant );

}