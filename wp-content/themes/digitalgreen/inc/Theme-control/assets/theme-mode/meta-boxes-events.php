<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_events' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */



function custom_meta_boxes_events() {

 
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $events_managemant = array(
    'id'          => 'events_managemant',
    'title'       => __( 'Custom events Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'News Resource' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

     array(
      'id'          => 'events_date',
        'label'       => __( 'date', 'theme-text-domain' ),
    'desc'        => 'Enter Date',
        'type'        => 'date-picker'
      ),

     array(
      'id'          => 'events_location',
        'label'       => __( 'Location', 'theme-text-domain' ),
    'desc'        => 'Enter Location',
        'type'        => 'text'
      ),

     array(
      'id'          => 'events_link',
        'label'       => __( 'Website Link', 'theme-text-domain' ),
    'desc'        => 'Enter Website Link',
        'type'        => 'text'
      ),

     
	  
      
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $events_managemant );

}