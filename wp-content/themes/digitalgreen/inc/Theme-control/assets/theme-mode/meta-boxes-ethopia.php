
<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_ethopia' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */



function custom_meta_boxes_ethopia() {

 
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $ethopia_managemant = array(
    'id'          => 'ethopia_managemant',
    'title'       => __( 'Custom ethopia Management', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'ethopia' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      
      array(
              'id'          => 'ethopia_solutions_place',
              'label'       => __( 'Add place', 'digitalgreen' ),
              'type'        => 'text',
              
              ),
      

      array(
              'id'          => 'ethopia_solutions_duration',
              'label'       => __( 'Add duration period', 'digitalgreen' ),
              'type'        => 'text',
              
              ),
      array(
              'id'          => 'ethopia_solutions_title',
              'label'       => __( 'Add solutions Title', 'digitalgreen' ),
              'type'        => 'text',
              
              ),

       

        array(
        'id'          => 'ethopia_solutions',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    	'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    	'settings'    => array(
            //Body Icon details
                     
             array(
              'id'          => 'ethopia_solutions_type1',
              'label'       => __( 'Add solution image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'ethopia_solutions',
              ),
          )
      ),

        array(
              'id'          => 'ethopia_partner_type1',
              'label'       => __( 'Add Partner type 1', 'digitalgreen' ),
              'type'        => 'text',
              
              ),


        array(
        'id'          => 'ethopia_partners1',
        'label'       => __( 'Partners1 Section', 'digitalgreen' ),
    	'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    	'settings'    => array(
            //Body Icon details
                     
             array(
              'id'          => 'ethopia_partners1_title',
              'label'       => __( 'Add partner', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia_partners1',
              ),
          )
      ),

        array(
              'id'          => 'ethopia_partner_type2',
              'label'       => __( 'Add Partner type 2', 'digitalgreen' ),
              'type'        => 'text',
              
              ),

        array(
        'id'          => 'ethopia_partners2',
        'label'       => __( 'Partners2 Section', 'digitalgreen' ),
    	'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    	'settings'    => array(
            //Body Icon details
                     
             array(
              'id'          => 'ethopia_partners2_title',
              'label'       => __( 'Add partner', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia_partners2',
              ),
          )
      ),

    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $ethopia_managemant );

}




 