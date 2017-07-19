<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes_team' );
/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes_team() {
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $team_managemant = array(
    'id'          => 'team_managemant',
    'title'       => __( 'Custom team Management', 'digitalgreen' ),
    'desc'        => '',
    'pages'       => array( 'team' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      
      array(
      'id'          => 'team_image',
        'label'       => __( 'Team Image', 'digitalgreen' ),
    'desc'        => 'Team Image',
        'type'        => 'upload'
      ),     
     array(
      'id'          => 'team_desc',
        'label'       => __( 'Designation', 'digitalgreen' ),
    'desc'        => 'Enter Designation',
        'type'        => 'text'
      ),
     array(
		'id'          => 'team_program_team',
		'label'       => __( 'Company', 'digitalgreen' ),
		'desc'        => 'Enter Company',
		'type'        => 'text'
      ),
	  
	  array(
        'id'          => 'team_program_team',
        'label'       => __( 'Program team Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    'settings'    => array(
            //Body Icon details
             
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add member name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_program_team',
              ),

               array(
              'id'          => 'team_designation',
              'label'       => __( 'Designation', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_program_team',
              ),

               

          )
      ),

     array(
        'id'          => 'team_tech_team',
        'label'       => __( 'Technology team Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    'settings'    => array(
            //Body Icon details
             
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add member name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_tech_team',
              ),

               array(
              'id'          => 'team_designation',
              'label'       => __( 'Designation', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_tech_team',
              ),

               

          )
      ),

     array(
        'id'          => 'team_admin_team',
        'label'       => __( 'Admin/Finance/HR Team Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        
    'settings'    => array(
            //Body Icon details
             
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add member name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_admin_team',
              ),

               array(
              'id'          => 'team_designation',
              'label'       => __( 'Designation', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_admin_team',
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
    ot_register_meta_box( $team_managemant );
}