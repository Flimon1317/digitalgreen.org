<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'digitalgreen' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'digitalgreen' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'digitalgreen' ) . '</p>'
    ),
	
	//Option Section
	
    'sections'        => array( 
	
	/*Header*/
      array(
        'id'          => 'header',
        'title'       => __( 'Header Section', 'digitalgreen' ),
      ),

      array(
        'id'          => 'headermenu',
        'title'       => __( 'Header Menu Section', 'digitalgreen' ),
      ),
      
	  
	  /*Bannar*/
      
	  
	  /*Home Content*/
     
	  /*Home Meet*/
      array(
        'id'          => 'homepage',
        'title'       => __( 'Homepage Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'globalimpact',
        'title'       => __( 'Global Impact Settings', 'digitalgreen' ),
      ),

     

      array(
        'id'          => 'globalinitiatives',
        'title'       => __( 'Global Initiatives Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'aboutus',
        'title'       => __( 'About Us Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'careers',
        'title'       => __( 'Careers Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'news',
        'title'       => __( 'News Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'blogs',
        'title'       => __( 'Blogs Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'resources',
        'title'       => __( 'News Resources Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'resources1',
        'title'       => __( 'Resources Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'team',
        'title'       => __( 'Team Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'partners',
        'title'       => __( 'Partners Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'casestudy',
        'title'       => __( 'Case Studies Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'contact',
        'title'       => __( 'Contact Us Settings', 'digitalgreen' ),
      ),
	  

      array(
        'id'          => 'solutions',
        'title'       => __( 'Solutions Settings', 'digitalgreen' ),
      ),

      array(
        'id'          => 'solutionscoco',
        'title'       => __( 'Solutions Coco Settings', 'digitalgreen' ),
      ),


	  array(
        'id'          => 'india',
        'title'       => __( 'India Settings', 'digitalgreen' ),
      ),

    array(
        'id'          => 'ethopia',
        'title'       => __( 'Ethopia Settings', 'digitalgreen' ),
      ),

    array(
        'id'          => 'loop',
        'title'       => __( 'Loop Settings', 'digitalgreen' ),
      ),

    array(
        'id'          => 'training',
        'title'       => __( 'Training Settings', 'digitalgreen' ),
      ), 

    array(
        'id'          => 'communityvideos',
        'title'       => __( 'Community Videos Settings', 'digitalgreen' ),
      ),  
	
    array(
        'id'          => 'innovation',
        'title'       => __( 'Innovation Settings', 'digitalgreen' ),
      ),  

    array(
        'id'          => 'financials',
        'title'       => __( 'Financials Section', 'digitalgreen' ),
      ),

    array(
        'id'          => 'donate',
        'title'       => __( 'Donate Section', 'digitalgreen' ),
      ),
        

      array(
        'id'          => 'footer',
        'title'       => __( 'Footer Section', 'digitalgreen' ),
      ),
	  
	  
    ),
	
	//Option Settings
	
    'settings'        => array( 
	
	
	//Header Favicon
	  //logo


	 
	  
	  //main logo
	 array(
        'id'          => 'header_logo',
        'label'       => __( 'Header Main Logo', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'header',
      ),
	  
	    
	  array(
    'id' => 'menu_tab',
    'label' => 'Global Impact',
    'type' => 'tab',
    'section' => 'headermenu'
    ),

  array(
        'id'          => 'global_impact',
        'label'       => __( 'Global Impact', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'headermenu',
    'settings'    => array(
            //Body Icon details
                           
               array(
              'id'          => 'title',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'global_impact',
              ),

               array(
              'id'          => 'global_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'global_impact',
              ),

               array(
              'id'          => 'global_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'global_impact',
              ),

          )
      ),

      array(
    'id' => 'menu1_tab',
    'label' => 'solution Impact',
    'type' => 'tab',
    'section' => 'headermenu'
    ),

  array(
        'id'          => 'solution_impact',
        'label'       => __( 'solution', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'headermenu',
    'settings'    => array(
            //Body Icon details
                           
               array(
              'id'          => 'title',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solution_impact',
              ),

               array(
              'id'          => 'solution_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solution_impact',
              ),

               array(
              'id'          => 'solution_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solution_impact',
              ),

          )
      ),

      array(
    'id' => 'menu2_tab',
    'label' => 'about Impact',
    'type' => 'tab',
    'section' => 'headermenu'
    ),

  array(
        'id'          => 'about_impact',
        'label'       => __( 'about', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'headermenu',
    'settings'    => array(
            //Body Icon details
                           
               array(
              'id'          => 'title',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'about_impact',
              ),

               array(
              'id'          => 'about_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'about_impact',
              ),

               array(
              'id'          => 'about_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'about_impact',
              ),

          )
      ),  


	  
	 
    array(
		'id' => 'banner_tab',
		'label' => 'Banner',
		'type' => 'tab',
		'section' => 'homepage'
		),
	 	

	  //Banner Image

    array(
        'id'          => 'home_banner1',
        'label'       => __( 'Banner Image1', 'digitalgreen' ),
		'desc'        => 'Upload Banner image 1',
        'type'        => 'upload',
        'section'     => 'homepage',
      ),
    array(
        'id'          => 'home_banner1_text',
        'label'       => __( 'Banner Image1 Description', 'digitalgreen' ),
		'desc'        => 'Enter Banner Description',
        'type'        => 'text',
        'section'     => 'homepage',
      ),

    array(
        'id'          => 'home_banner2',
        'label'       => __( 'Banner Image2', 'digitalgreen' ),
		'desc'        => 'Upload Banner image 2',
        'type'        => 'upload',
        'section'     => 'homepage',
      ),
    array(
        'id'          => 'home_banner2_text',
        'label'       => __( 'Banner Image2 Description', 'digitalgreen' ),
		'desc'        => 'Enter Banner Description',
        'type'        => 'text',
        'section'     => 'homepage',
      ),

    array(
        'id'          => 'home_banner3',
        'label'       => __( 'Banner Image3', 'digitalgreen' ),
		'desc'        => 'Upload Banner image 3',
        'type'        => 'upload',
        'section'     => 'homepage',
      ),

    array(
        'id'          => 'home_banner3_text',
        'label'       => __( 'Banner Image3 Description', 'digitalgreen' ),
		'desc'        => 'Enter Banner Description',
        'type'        => 'text',
        'section'     => 'homepage',
      ),


    array(
        'id'          => 'home_banner3_array',
        'label'       => __( 'Banner 3 Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage',
    'settings'    => array(
            //Body Icon details
             
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add Title', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'home_banner3_array',
              ),

               

               array(
              'id'          => 'home_banner3_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'home_banner3_array',
              ),

               array(
              'id'          => 'home_banner3_desc',
              'label'       => __( 'Add Desc', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'home_banner3_array',
              ),

          )
      ),
	 
    
    array(
		'id' => 'solutions_tab',
		'label' => 'Our Solutions',
		'type' => 'tab',
		'section' => 'homepage'
		),
   
   array(
        'id'          => 'solutions_title',
        'label'       => __( 'Title', 'digitalgreen' ),
    'desc'        => '',
        'type'        => 'text',
        'section'     => 'homepage',
      ),


    array(
        'id'          => 'solutions_description',
        'label'       => __( 'Our Solutions Description', 'digitalgreen' ),
		'desc'        => 'Enter Description',
        'type'        => 'text',
        'section'     => 'homepage',
      ),
    array(
        'id'          => 'solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutions_array',
              ),

               array(
              'id'          => 'solutions_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions_array',
              ),

               array(
              'id'          => 'solutions_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions_array',
              ),

          )
      ),
	 
    
    

	array(
		'id' => 'innovation_tab',
		'label' => 'Innovation Lab',
		'type' => 'tab',
		'section' => 'homepage'
		),				

	 
	 array(
        'id'          => 'innovation_image',
        'label'       => __( 'Upload', 'digitalgreen' ),
        'type'        => 'upload',
        'section'     => 'homepage',
      ),

   array(
        'id'          => 'innovation_title',
        'label'       => __( 'Title', 'digitalgreen' ),
        'type'        => 'text',
        'section'     => 'homepage',
      ),

	 array(
        'id'          => 'innovation_description',
        'label'       => __( 'Innovation Description', 'digitalgreen' ),
        'type'        => 'text',
        'section'     => 'homepage',
      ),

	 

	 array(
        'id'          => 'innovation_quote',
        'label'       => __( 'Quote', 'digitalgreen' ),
        'type'        => 'text',
        'section'     => 'homepage',
      ),

	 array(
        'id'          => 'innovation_quoter',
        'label'       => __( 'Innovation Quote By', 'digitalgreen' ),
        'type'        => 'text',
        'section'     => 'homepage',
      ),

    

	 
    
    array(
		'id' => 'awards_tab',
		'label' => 'Awards',
		'type' => 'tab',
		'section' => 'homepage'
		),

   array(
        'id'          => 'award_title',
        'label'       => __( 'Award Title', 'digitalgreen' ),
        'type'        => 'text',
        'section'     => 'homepage',
      ),	

    array(
        'id'          => 'awards_home',
        'label'       => __( 'Awards Section', 'digitalgreen' ),
		'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'homepage',
		'settings'	  => array(
						//Body Icon details
						 array(
							'id'          => 'awards_image',
							'label'       => __( 'Add Award Image', 'digitalgreen' ),
							'desc'        => 'Upload Picture',
							'std'         => '',
							'type'        => 'upload',
							'section'     => 'awards_home',
						  ),
						  
						   array(
							'id'          => 'title',
							'label'       => __( 'Add Name', 'digitalgreen' ),
							'type'        => 'text',
							'section'     => 'awards_home',
						  ),

						   

						   array(
							'id'          => 'awards_description',
							'label'       => __( 'Add Description', 'digitalgreen' ),
							'type'        => 'text',
							'section'     => 'awards_home',
						  ),

               array(
              'id'          => 'awards_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'awards_home',
              ),

					)
      ),


      array(
		'id' => 'example_banner_tab',
		'label' => 'Banner',
		'type' => 'tab',
		'section' => 'example'
		),	
	array(
        'id'          => 'example_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'example',
      ),
	array(        
      'id'          => 'example_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'example',      
      ),
	array(        
      'id'          => 'example_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'example',      
      ),

            
	
	array(
		'id' => 'global_banner_tab',
		'label' => 'Banner',
		'type' => 'tab',
		'section' => 'globalimpact'
		),	
	array(
        'id'          => 'global_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),
	array(        
      'id'          => 'global_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	array(        
      'id'          => 'global_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

  array(        
      'id'          => 'global_banner_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

	array(
		'id' => 'global_india_tab',
		'label' => 'Section 1',
		'type' => 'tab',
		'section' => 'globalimpact'
		),

  array(        
      'id'          => 'global_india_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	
	array(        
      'id'          => 'global_india_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
      array(
        'id'          => 'global_india_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),
	


      

    array(
        'id'          => 'global_india_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalimpact',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_india_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'globalimpact',
              ),

              

          )
      ),

    array(        
      'id'          => 'global_india_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
		

	

	array(
		'id' => 'global_ethopia_tab',
		'label' => 'Section 2',
		'type' => 'tab',
		'section' => 'globalimpact'
		),

  array(        
      'id'          => 'global_ethopia_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	
	array(        
      'id'          => 'global_ethopia_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	array(
        'id'          => 'global_ethopia_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),
	array(
        'id'          => 'global_ethopia_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalimpact',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_ethopia_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'globalimpact',
              ),

              

          )
      ),

      array(        
      'id'          => 'global_ethopia_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

	array(
		'id' => 'global_global_tab',
		'label' => 'Section 3',
		'type' => 'tab',
		'section' => 'globalimpact'
		),

  array(        
      'id'          => 'global_global_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	
	array(        
      'id'          => 'global_global_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),
	array(
        'id'          => 'global_global_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),
	
	array(
        'id'          => 'global_global_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalimpact',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_global_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'globalimpact',
              ),

              

          )
      ), 


       array(        
      'id'          => 'global_global_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

      array(
		'id' => 'global_case_study_tab',
		'label' => 'Case Studies',
		'type' => 'tab',
		'section' => 'globalimpact'
		), 

      array(        
      'id'          => 'global_casestudy_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

      array(
        'id'          => 'global_casestudy_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),


      array(
		'id' => 'global_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'globalimpact'
		), 

      array(        
      'id'          => 'global_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

      array(        
      'id'          => 'global_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalimpact',      
      ),

      array(
        'id'          => 'global_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalimpact',
      ),

      
      array(
        'id'          => 'global_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalimpact',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_solution_values',
              ),
             array(
              'id'          => 'global_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'global_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'globalimpact',      
      ),


      array(
		'id' => 'global_initiatives_banner_tab',
		'label' => 'Banner',
		'type' => 'tab',
		'section' => 'globalinitiatives'
		),	
	array(
        'id'          => 'global_initiatives_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalinitiatives',
      ),
	array(        
      'id'          => 'global_initiatives_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

        
	array(        
      'id'          => 'global_initiatives_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

      array(        
      'id'          => 'global_initiatives_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

	array(
		'id' => 'global_initiatives_india_tab',
		'label' => 'Section1',
		'type' => 'tab',
		'section' => 'globalinitiatives'
		),

       array(        
      'id'          => 'global_initiatives_india_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	
	array(        
      'id'          => 'global_initiatives_india_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	array(
        'id'          => 'global_initiatives_india_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalinitiatives',
      ),
	
	array(
        'id'          => 'global_initiatives_india_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalinitiatives',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_initiatives_india_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_initiatives_india_image_value1',
              ),

              

          )
      ),


       array(        
      'id'          => 'global_initiatives_india_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

	

	array(
		'id' => 'global_initiatives_ethopia_tab',
		'label' => 'Section2',
		'type' => 'tab',
		'section' => 'globalinitiatives'
		),

       array(        
      'id'          => 'global_initiatives_ethopia_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	
	array(        
      'id'          => 'global_initiatives_ethopia_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	array(
        'id'          => 'global_initiatives_ethopia_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalinitiatives',
      ),
	
	array(
        'id'          => 'global_initiatives_ethopia_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalinitiatives',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_initiatives_ethopia_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_initiatives_ethopia_image_value1',
              ),

              

          )
      ),

       array(        
      'id'          => 'global_initiatives_ethopia_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

	array(
		'id' => 'global_initiatives_global_tab',
		'label' => 'Section3',
		'type' => 'tab',
		'section' => 'globalinitiatives'
		),

        array(        
      'id'          => 'global_initiatives_global_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	
	array(        
      'id'          => 'global_initiatives_global_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),
	array(
        'id'          => 'global_initiatives_global_image',
        'label'       => __( 'Image', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalinitiatives',
      ),
	
	array(
        'id'          => 'global_initiatives_global_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalinitiatives',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_initiatives_global_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_initiatives_global_image_value1',
              ),

              

          )
      ), 

      array(        
      'id'          => 'global_initiatives_global_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

       array(
		'id' => 'global_initiatives_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'globalinitiatives'
		), 

      array(        
      'id'          => 'global_initiatives_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

      array(        
      'id'          => 'global_initiatives_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'globalinitiatives',      
      ),

      array(
        'id'          => 'global_initiatives_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'globalinitiatives',
      ),

      
      array(
        'id'          => 'global_initiatives_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'globalinitiatives',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'global_initiatives_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_initiatives_solution_values',
              ),
             array(
              'id'          => 'global_initiatives_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'global_initiatives_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'global_initiatives_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'globalinitiatives',      
      ),

        

     array(
        'id' => 'aboutus_banner_tab',
        'label' => 'Banner',
        'type' => 'tab',
        'section' => 'aboutus'
        ),  
    array(
        'id'          => 'aboutus_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
        'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'aboutus',
      ),
    array(        
      'id'          => 'aboutus_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),

    array(
        'id' => 'aboutus_about_tab',
        'label' => 'About Section',
        'type' => 'tab',
        'section' => 'aboutus'
        ),  
    array(        
      'id'          => 'aboutus_about_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),
    array(        
      'id'          => 'aboutus_about_desc',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'aboutus',      
      ),
    
    array(
        'id' => 'aboutus_video_tab',
        'label' => 'Video',
        'type' => 'tab',
        'section' => 'aboutus'
        ), 

     
             array(
              'id'          => 'aboutus_video_image',
              'label'       => __( 'Upload Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'aboutus',
              ),

             array(
              'id'          => 'aboutus_video_title',
              'label'       => __( 'Add video Title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'aboutus',
              ),
              
               array(
              'id'          => 'aboutus_video_desc',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'aboutus',
              ),

               array(
              'id'          => 'aboutus_video_link',
              'label'       => __( 'Add link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'aboutus',
              ),

          

     array(
        'id' => 'aboutus_video_community_tab',
        'label' => 'History Section',
        'type' => 'tab',
        'section' => 'aboutus'
        ), 

     array(
        'id'          => 'aboutus_video_community',
        'label'       => __( 'video slider Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'aboutus',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'aboutus_video_community_image',
              'label'       => __( 'Upload Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'aboutus_video',
              ),

             array(
              'id'          => 'aboutus_video_community_title',
              'label'       => __( 'Add video Title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'aboutus_video',
              ),

             array(
              'id'          => 'aboutus_video_community_year',
              'label'       => __( 'Add video Year', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'aboutus_video',
              ),
              
               array(
              'id'          => 'aboutus_video_community_desc',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'aboutus_video',
              ),

               array(
              'id'          => 'aboutus_video_community_link',
              'label'       => __( 'Add link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'aboutus_video',
              ),

          )
      ),

     array(
        'id' => 'aboutus_partners_tab',
        'label' => 'Partners',
        'type' => 'tab',
        'section' => 'aboutus'
        ), 

     array(        
      'id'          => 'aboutus_partners_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),
  array(        
      'id'          => 'aboutus_partners_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),

    array(        
      'id'          => 'aboutus_partners_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),

     array(
        'id'          => 'aboutus_partners',
        'label'       => __( 'Partners Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'aboutus',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'aboutus_partner_image',
              'label'       => __( 'Upload Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'aboutus_video',
              ),

             
          )
      ),

    array(
        'id' => 'aboutus_careers_tab',
        'label' => 'Careers',
        'type' => 'tab',
        'section' => 'aboutus'
        ), 

     array(        
      'id'          => 'aboutus_careers_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),
  array(        
      'id'          => 'aboutus_careers_image',        
      'label'       => __( 'Upload', 'digitalgreen' ),        
      'type'        => 'Upload',        
      'section'     => 'aboutus',      
      ),

   array(        
      'id'          => 'aboutus_careers_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'aboutus',      
      ),


   array(
    'id' => 'aboutus_financials_tab',
    'label' => 'Financials  Tab',
    'type' => 'tab',
    'section' => 'aboutus'
    ),  

    array(
        'id'          => 'aboutus_financials_array',
        'label'       => __( 'Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'aboutus',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'title',
              'label'       => __( 'Add Title', 'digitalgreen' ),
              'desc'        => '',
              'type'        => 'text',
              'section'     => 'aboutus',
              ),

              array(
              'id'          => 'aboutus_desc',
              'label'       => __( 'Description', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'aboutus',
              ),
              
               array(
              'id'          => 'aboutus_link',
              'label'       => __( 'Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'aboutus',
              ),

          )
      ),





     array(
    'id' => 'solutions_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'solutions'
    ),  
  array(
        'id'          => 'solutions_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  array(        
      'id'          => 'solutions_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(        
      'id'          => 'solutions_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

  array(
    'id' => 'solutions_approach_tab',
    'label' => 'Solutions Approach Tab',
    'type' => 'tab',
    'section' => 'solutions'
    ),  

    array(
        'id'          => 'solutions_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_approach_title',
              'label'       => __( 'Add Title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),
         
              array(
              'id'          => 'solutions_approach_short_desc',
              'label'       => __( 'Add short Desc', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              array(
              'id'          => 'solutions_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'solutions',
              ),
              
              array(
              'id'          => 'solutions_approach_heading',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions',
              ), 

               

               array(
              'id'          => 'solutions_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions',
              ),

          )
      ),

  array(
    'id' => 'solutions_community_tab',
    'label' => 'Section 1',
    'type' => 'tab',
    'section' => 'solutions'
    ),

  array(        
      'id'          => 'solutions_about_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

 array(        
      'id'          => 'solutions_community_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  
  array(        
      'id'          => 'solutions_community_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(
        'id'          => 'solutions_community_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  
  array(
        'id'          => 'solutions_community_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_community_value1',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              

          )
      ),
  array(        
      'id'          => 'solutions_community_learn_link',        
      'label'       => __( 'Learn More Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

  array(
    'id' => 'solutions_coco_tab',
    'label' => 'Section 2',
    'type' => 'tab',
    'section' => 'solutions'
    ),

  array(        
      'id'          => 'solutions_coco_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  
  array(        
      'id'          => 'solutions_coco_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(
        'id'          => 'solutions_coco_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  
  array(
        'id'          => 'solutions_coco_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_coco_value1',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              

          )
      ),

  array(        
      'id'          => 'solutions_coco_learn_link',        
      'label'       => __( 'Learn More Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

  array(
    'id' => 'solutions_training_tab',
    'label' => 'Section 3',
    'type' => 'tab',
    'section' => 'solutions'
    ),

  array(        
      'id'          => 'solutions_training_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  
  array(        
      'id'          => 'solutions_training_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(
        'id'          => 'solutions_training_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  array(
        'id'          => 'solutions_training_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_training_value1',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              

          )
      ),
  array(        
      'id'          => 'solutions_training_learn_link',        
      'label'       => __( 'Learn More Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  
  array(
    'id' => 'solutions_loop_tab',
    'label' => 'Section 4',
    'type' => 'tab',
    'section' => 'solutions'
    ),

  array(        
      'id'          => 'solutions_loop_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

  
  
  array(        
      'id'          => 'solutions_loop_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(
        'id'          => 'solutions_loop_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  array(
        'id'          => 'solutions_loop_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_loop_value1',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              

          )
      ),

      array(        
      'id'          => 'solutions_loop_learn_link',        
      'label'       => __( 'Learn More Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

array(
    'id' => 'solutions_innovation_tab',
    'label' => 'Section 5',
    'type' => 'tab',
    'section' => 'solutions'
    ),

  array(        
      'id'          => 'solutions_innovation_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

 array(        
      'id'          => 'solutions_innovation_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  
  array(        
      'id'          => 'solutions_innovation_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),
  array(
        'id'          => 'solutions_innovation_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),
  
  array(
        'id'          => 'solutions_innovation_image_value1',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_innovation_value1',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutions',
              ),

              

          )
      ),
  array(        
      'id'          => 'solutions_innovation_learn_link',        
      'label'       => __( 'Learn More Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),


     array(
    'id' => 'solutions_solutions_tab1',
    'label' => 'Solutions',
    'type' => 'tab',
    'section' => 'solutions'
    ),

    array(
        'id'          => 'solutions_solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutions_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'solutions_solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutions_solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutions_solutions_array',
              ),

               array(
              'id'          => 'solutions_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions_solutions_array',
              ),

               array(
              'id'          => 'solutions_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutions_solutions_array',
              ),

          )
      ),
	 

     array(
		'id' => 'solutions_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'solutions'
		), 

      array(        
      'id'          => 'solution_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

      array(        
      'id'          => 'solution_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutions',      
      ),

      array(
        'id'          => 'solution_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutions',
      ),

      
      array(
        'id'          => 'solution_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutions',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solution_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solution_solution_values',
              ),
             array(
              'id'          => 'solution_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solution_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'solution_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'solutions',      
      ),

  

   array(
    'id' => 'india_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'india'
    ),  
  array(
        'id'          => 'india_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'india',
      ),
  array(        
      'id'          => 'india_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
  array(        
      'id'          => 'india_banner_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
  array(        
      'id'          => 'india_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),

   

    array(        
      'id'          => 'india_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
    array(        
      'id'          => 'india_image_value1_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
    array(       
      'id'          => 'india_image_value2',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),

     array(        
      'id'          => 'india_image_value2_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
  array(        
      'id'          => 'india_image_value3',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),
  array(        
      'id'          => 'india_image_value3_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'india',      
      ),      
       
   array(
    'id' => 'india_approach_tab',
    'label' => 'India Approach Tab',
    'type' => 'tab',
    'section' => 'india'
    ),

    array(
        'id'          => 'india_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'india',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'india_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'india',
              ),

              array(
              'id'          => 'india_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'india',
              ),

              array(
              'id'          => 'india_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'india',
              ),
              
               array(
              'id'          => 'india_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'india',
              ),

               array(
              'id'          => 'india_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'india',
              ),

          )
      ),

    array(
    'id' => 'india_quote_tab',
    'label' => 'India Quote Tab',
    'type' => 'tab',
    'section' => 'india'
    ),

    array(
        'id'          => 'india_quote_array',
        'label'       => __( 'Quote Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'india',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'title',
              'label'       => __( 'Add Quote', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'india_quote_array',
              ),

              array(
              'id'          => 'india_quote_by',
              'label'       => __( 'Quote By', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'india_quote_array',
              ),

              array(
              'id'          => 'india_quote_link',
              'label'       => __( 'Quote Link', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'india_quote_array',
              ),
              
               

          )
      ),

    

    array(
    'id' => 'ethopia_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'ethopia'
    ),  
  array(
        'id'          => 'ethopia_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'ethopia',
      ),
  array(        
      'id'          => 'ethopia_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),
  array(        
      'id'          => 'ethopia_banner_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),

  array(        
      'id'          => 'ethopia_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),

   

    array(        
      'id'          => 'ethopia_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),
    array(        
      'id'          => 'ethopia_image_value1_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),
    array(       
      'id'          => 'ethopia_image_value2',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),

     array(        
      'id'          => 'ethopia_image_value2_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),
  array(        
      'id'          => 'ethopia_image_value3',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),
  array(        
      'id'          => 'ethopia_image_value3_text',        
      'label'       => __( 'text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'ethopia',      
      ),      
       
   array(
    'id' => 'ethopia_approach_tab',
    'label' => 'ethopia Approach Tab',
    'type' => 'tab',
    'section' => 'ethopia'
    ),

    array(
        'id'          => 'ethopia_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'ethopia',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'ethopia_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia',
              ),

              array(
              'id'          => 'ethopia_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'ethopia',
              ),

              array(
              'id'          => 'ethopia_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'ethopia',
              ),
              
               array(
              'id'          => 'ethopia_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'ethopia',
              ),

               array(
              'id'          => 'ethopia_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'ethopia',
              ),

          )
      ),

    array(
    'id' => 'ethopia_quote_tab',
    'label' => 'ethopia Quote Tab',
    'type' => 'tab',
    'section' => 'india'
    ),

    array(
        'id'          => 'ethopia_quote_array',
        'label'       => __( 'Quote Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'ethopia',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'title',
              'label'       => __( 'Add Quote', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia_quote_array',
              ),

              array(
              'id'          => 'ethopia_quote_by',
              'label'       => __( 'Quote By', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia_quote_array',
              ),

              array(
              'id'          => 'ethopia_quote_link',
              'label'       => __( 'Quote Link', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'ethopia_quote_array',
              ),
              
               

          )
      ),

    array(
    'id' => 'loop_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'loop'
    ),  
  array(
        'id'          => 'loop_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'loop',
      ),
  array(        
      'id'          => 'loop_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),
  array(        
      'id'          => 'loop_banner_sub_title',        
      'label'       => __( 'Sub Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),
  array(        
      'id'          => 'loop_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

  array(
    'id' => 'loop_approach_tab',
    'label' => 'loop Approach Tab',
    'type' => 'tab',
    'section' => 'loop'
    ),  

    array(
        'id'          => 'loop_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'loop',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'loop_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'loop',
              ),

              array(
              'id'          => 'loop_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'india',
              ),
              
               array(
              'id'          => 'loop_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'loop',
              ),

                array(
              'id'          => 'loop_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'loop',
              ),

               array(
              'id'          => 'loop_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'loop',
              ),

          )
      ),

    array(
    'id' => 'loop_product_tab',
    'label' => 'Product Showcase',
    'type' => 'tab',
    'section' => 'loop'
    ),

    array(
        'id'          => 'loop_product_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'loop',
      ),

    array(        
      'id'          => 'loop_product_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),
    array(        
      'id'          => 'loop_product_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ), 

    array(
        'id'          => 'loop_product_show_image',
        'label'       => __( 'Show Case Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'loop',
      ),

     array(        
      'id'          => 'loop_product_playstore_link',        
      'label'       => __( 'Product Playstore Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

    

  array(
    'id' => 'loop_what_tab',
    'label' => 'What is ?',
    'type' => 'tab',
    'section' => 'loop'
    ),

    array(        
      'id'          => 'loop_what_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

    array(
        'id'          => 'loop_what_image',
        'label'       => __( 'What is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'loop',
      ),
  array(        
      'id'          => 'loop_what_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'loop',      
      ),
  array(        
      'id'          => 'loop_what_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

   

    array(
    'id' => 'loop_how_tab',
    'label' => 'how is ?',
    'type' => 'tab',
    'section' => 'loop'
    ),

    array(        
      'id'          => 'loop_how_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

    array(
        'id'          => 'loop_how_image',
        'label'       => __( 'How is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'loop',
      ),
  array(        
      'id'          => 'loop_how_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'loop',      
      ),

  array(        
      'id'          => 'loop_how_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),
   
   array(
    'id' => 'loop_screenshots_tab',
    'label' => 'Screenshots',
    'type' => 'tab',
    'section' => 'loop'
    ),

    array(        
      'id'          => 'loop_screenshots_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),
  
  array(
        'id'          => 'loop_screenshots',
        'label'       => __( 'Screenshots Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'loop',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'loop_screenshot_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'loop',
              ),
              

          )
      ),


array(
    'id' => 'loop_solutions_tab1',
    'label' => 'Solutions',
    'type' => 'tab',
    'section' => 'loop'
    ),

    array(
        'id'          => 'loop_solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'loop',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'loop_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'loop_solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'loop_solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'loop_solutions_array',
              ),

               array(
              'id'          => 'loop_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'loop_solutions_array',
              ),

               array(
              'id'          => 'loop_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'loop_solutions_array',
              ),

          )
      ),



      array(
		'id' => 'loop_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'loop'
		), 

      array(        
      'id'          => 'loop_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

      array(        
      'id'          => 'loop_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'loop',      
      ),

      array(
        'id'          => 'loop_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'loop',
      ),

      
      array(
        'id'          => 'loop_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'loop',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'loop_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'loop_solution_values',
              ),
             array(
              'id'          => 'loop_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'loop_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'loop_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'loop',      
      ),


  array(
    'id' => 'training_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'training'
    ),  
  array(
        'id'          => 'training_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'training',
      ),
  array(        
      'id'          => 'training_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),
  array(        
      'id'          => 'training_banner_sub_title',        
      'label'       => __( 'Sub Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),
  array(        
      'id'          => 'training_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

  array(
    'id' => 'training_approach_tab',
    'label' => 'training Approach Tab',
    'type' => 'tab',
    'section' => 'training'
    ),  

    array(
        'id'          => 'training_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'training',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'training_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'training',
              ),

              array(
              'id'          => 'training_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'india',
              ),
              
               array(
              'id'          => 'training_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'training',
              ),

                array(
              'id'          => 'training_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'training',
              ),

               array(
              'id'          => 'training_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'training',
              ),

          )
      ),

    array(
    'id' => 'training_product_tab',
    'label' => 'Product Showcase',
    'type' => 'tab',
    'section' => 'training'
    ),

    array(
        'id'          => 'training_product_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'training',
      ),

    array(        
      'id'          => 'training_product_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),
    array(        
      'id'          => 'training_product_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ), 

    array(
        'id'          => 'training_product_show_image',
        'label'       => __( 'Show Case Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'training',
      ),

     array(        
      'id'          => 'training_product_playstore_link',        
      'label'       => __( 'Product Playstore Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

    

  array(
    'id' => 'training_what_tab',
    'label' => 'What is ?',
    'type' => 'tab',
    'section' => 'training'
    ),

    array(        
      'id'          => 'training_what_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

    array(
        'id'          => 'training_what_image',
        'label'       => __( 'What is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'training',
      ),
  array(        
      'id'          => 'training_what_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'training',      
      ),
  array(        
      'id'          => 'training_what_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

   

    array(
    'id' => 'training_how_tab',
    'label' => 'how is ?',
    'type' => 'tab',
    'section' => 'training'
    ),

    array(        
      'id'          => 'training_how_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

    array(
        'id'          => 'training_how_image',
        'label'       => __( 'How is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'training',
      ),
  array(        
      'id'          => 'training_how_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'training',      
      ),

  array(        
      'id'          => 'training_how_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),
   
   array(
    'id' => 'training_screenshots_tab',
    'label' => 'Screenshots',
    'type' => 'tab',
    'section' => 'training'
    ),

    array(        
      'id'          => 'training_screenshots_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),
  
  array(
        'id'          => 'training_screenshots',
        'label'       => __( 'Screenshots Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'training',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'training_screenshot_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'training',
              ),
              

          )
      ),


array(
    'id' => 'training_solutions_tab1',
    'label' => 'Solutions',
    'type' => 'tab',
    'section' => 'training'
    ),

    array(
        'id'          => 'training_solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'training',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'training_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'training_solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'training_solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'training_solutions_array',
              ),

               array(
              'id'          => 'training_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'training_solutions_array',
              ),

               array(
              'id'          => 'training_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'training_solutions_array',
              ),

          )
      ),



      array(
		'id' => 'training_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'training'
		), 

      array(        
      'id'          => 'training_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

      array(        
      'id'          => 'training_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'training',      
      ),

      array(
        'id'          => 'training_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'training',
      ),

      
      array(
        'id'          => 'training_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'training',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'training_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'training_solution_values',
              ),
             array(
              'id'          => 'training_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'training_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'training_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'training',      
      ),

     array(
    'id' => 'communityvideos_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),  
  array(
        'id'          => 'communityvideos_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),
  array(        
      'id'          => 'communityvideos_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),
  array(        
      'id'          => 'communityvideos_banner_sub_title',        
      'label'       => __( 'Sub Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),
  array(        
      'id'          => 'communityvideos_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

  array(
    'id' => 'communityvideos_approach_tab',
    'label' => 'communityvideos Approach Tab',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),  

    array(
        'id'          => 'communityvideos_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'communityvideos',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'communityvideos_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'communityvideos',
              ),

              array(
              'id'          => 'communityvideos_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'india',
              ),
              
               array(
              'id'          => 'communityvideos_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'communityvideos',
              ),

                array(
              'id'          => 'communityvideos_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'communityvideos',
              ),

               array(
              'id'          => 'communityvideos_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'communityvideos',
              ),

          )
      ),

    array(
    'id' => 'communityvideos_product_tab',
    'label' => 'Product Showcase',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),

    array(
        'id'          => 'communityvideos_product_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),

    array(        
      'id'          => 'communityvideos_product_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),
    array(        
      'id'          => 'communityvideos_product_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ), 

    array(
        'id'          => 'communityvideos_product_show_image',
        'label'       => __( 'Show Case Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),

    array(        
      'id'          => 'communityvideos_product_playstore_link',        
      'label'       => __( 'Product Playstore Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

    

  array(
    'id' => 'communityvideos_what_tab',
    'label' => 'What is ?',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),

    array(        
      'id'          => 'communityvideos_what_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

    array(
        'id'          => 'communityvideos_what_image',
        'label'       => __( 'What is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),
  array(        
      'id'          => 'communityvideos_what_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'communityvideos',      
      ),
  array(        
      'id'          => 'communityvideos_what_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

   

    array(
    'id' => 'communityvideos_how_tab',
    'label' => 'how is ?',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),

    array(        
      'id'          => 'communityvideos_how_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

    array(
        'id'          => 'communityvideos_how_image',
        'label'       => __( 'How is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),
  array(        
      'id'          => 'communityvideos_how_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'communityvideos',      
      ),

  array(        
      'id'          => 'communityvideos_how_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),
   
   array(
    'id' => 'communityvideos_screenshots_tab',
    'label' => 'Screenshots',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),

    array(        
      'id'          => 'communityvideos_screenshots_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),
  
  array(
        'id'          => 'communityvideos_screenshots',
        'label'       => __( 'Screenshots Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'communityvideos',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'communityvideos_screenshot_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'communityvideos',
              ),
              

          )
      ),


array(
    'id' => 'communityvideos_solutions_tab1',
    'label' => 'Solutions',
    'type' => 'tab',
    'section' => 'communityvideos'
    ),

    array(
        'id'          => 'communityvideos_solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'communityvideos',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'communityvideos_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'communityvideos_solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'communityvideos_solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'communityvideos_solutions_array',
              ),

               array(
              'id'          => 'communityvideos_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'communityvideos_solutions_array',
              ),

               array(
              'id'          => 'communityvideos_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'communityvideos_solutions_array',
              ),

          )
      ),



      array(
		'id' => 'communityvideos_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'communityvideos'
		), 

      array(        
      'id'          => 'communityvideos_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

      array(        
      'id'          => 'communityvideos_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'communityvideos',      
      ),

      array(
        'id'          => 'communityvideos_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'communityvideos',
      ),

      
      array(
        'id'          => 'communityvideos_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'communityvideos',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'communityvideos_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'communityvideos_solution_values',
              ),
             array(
              'id'          => 'communityvideos_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'communityvideos_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'communityvideos_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'communityvideos',      
      ),


   

  array(
    'id' => 'innovation_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'innovation'
    ),  
  array(
        'id'          => 'innovation_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),
  array(        
      'id'          => 'innovation_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  

    

  array(
    'id' => 'innovation_section1_tab',
    'label' => 'section1',
    'type' => 'tab',
    'section' => 'innovation'
    ),
  array(        
      'id'          => 'innovation_section1_title',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(        
      'id'          => 'innovation_section1_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(
        'id'          => 'innovation_section1_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),
  array(        
      'id'          => 'innovation_section1_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section1_image_value2',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section1_image_value3',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(        
      'id'          => 'innovation_section1_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(
    'id' => 'innovation_section2_tab',
    'label' => 'section2',
    'type' => 'tab',
    'section' => 'innovation'
    ),

    array(        
      'id'          => 'innovation_section2_title',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  
  array(        
      'id'          => 'innovation_section2_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(
        'id'          => 'innovation_section2_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),
  array(        
      'id'          => 'innovation_section2_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section2_image_value2',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section2_image_value3',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(        
      'id'          => 'innovation_section2_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(
    'id' => 'innovation_section3_tab',
    'label' => 'section3',
    'type' => 'tab',
    'section' => 'innovation'
    ),

    array(        
      'id'          => 'innovation_section3_title',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  
  array(        
      'id'          => 'innovation_section3_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(
        'id'          => 'innovation_section3_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),
  array(        
      'id'          => 'innovation_section3_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section3_image_value2',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section3_image_value3',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ), 

  array(        
      'id'          => 'innovation_section3_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(
    'id' => 'innovation_innovation_tab',
    'label' => 'Section 4',
    'type' => 'tab',
    'section' => 'innovation'
    ),

    array(        
      'id'          => 'innovation_section4_title',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  
  array(        
      'id'          => 'innovation_section4_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(
        'id'          => 'innovation_section4_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),
  array(        
      'id'          => 'innovation_section4_image_value1',        
      'label'       => __( 'Value 1', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section4_image_value2',        
      'label'       => __( 'Value 2', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),
  array(        
      'id'          => 'innovation_section4_image_value3',        
      'label'       => __( 'Value 3', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(        
      'id'          => 'innovation_section4_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

  array(
    'id' => 'innovation_solutions_tab',
    'label' => 'Featured tab',
    'type' => 'tab',
    'section' => 'innovation'
    ), 

      array(        
      'id'          => 'innovation_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

      array(        
      'id'          => 'innovation_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'innovation',      
      ),

      array(
        'id'          => 'innovation_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
  'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'innovation',
      ),

      
      array(
        'id'          => 'innovation_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'innovation',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'innovation_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'innovation_solution_values',
              ),
             array(
              'id'          => 'innovation_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'innovation_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'innovation_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'innovation',      
      ),

      
   array(
    'id' => 'solutionscoco_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),  
  array(
        'id'          => 'solutionscoco_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),
  array(        
      'id'          => 'solutionscoco_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),
  array(        
      'id'          => 'solutionscoco_banner_sub_title',        
      'label'       => __( 'Sub Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),
  array(        
      'id'          => 'solutionscoco_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

  array(
    'id' => 'solutionscoco_approach_tab',
    'label' => 'solutionscoco Approach Tab',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),  

    array(
        'id'          => 'solutionscoco_approach',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutionscoco',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutionscoco_approach_title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutionscoco',
              ),

              array(
              'id'          => 'solutionscoco_approach_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'india',
              ),
              
               array(
              'id'          => 'solutionscoco_approach_short_desc',
              'label'       => __( 'Add short description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutionscoco',
              ),

                array(
              'id'          => 'solutionscoco_approach_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutionscoco',
              ),

               array(
              'id'          => 'solutionscoco_approach_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'textarea',
              'section'     => 'solutionscoco',
              ),

          )
      ),

    array(
    'id' => 'solutionscoco_product_tab',
    'label' => 'Product Showcase',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),

    array(
        'id'          => 'solutionscoco_product_image',
        'label'       => __( 'Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),

    array(        
      'id'          => 'solutionscoco_product_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),
    array(        
      'id'          => 'solutionscoco_product_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ), 

    array(
        'id'          => 'solutionscoco_product_show_image',
        'label'       => __( 'Show Case Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),
    array(        
      'id'          => 'solutionscoco_product_playstore_link',        
      'label'       => __( 'Product Playstore Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

    

  array(
    'id' => 'solutionscoco_what_tab',
    'label' => 'What is Coco',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),

    array(        
      'id'          => 'solutionscoco_what_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

    array(
        'id'          => 'solutionscoco_what_image',
        'label'       => __( 'What is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),
  array(        
      'id'          => 'solutionscoco_what_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'solutionscoco',      
      ),
  array(        
      'id'          => 'solutionscoco_what_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

   

    array(
    'id' => 'solutionscoco_how_tab',
    'label' => 'how is Coco',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),

    array(        
      'id'          => 'solutionscoco_how_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

    array(
        'id'          => 'solutionscoco_how_image',
        'label'       => __( 'How is coco Image', 'digitalgreen' ),
    'desc'        => 'Upload',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),
  array(        
      'id'          => 'solutionscoco_how_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'textarea',        
      'section'     => 'solutionscoco',      
      ),

  array(        
      'id'          => 'solutionscoco_how_link',        
      'label'       => __( 'link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),
   
   array(
    'id' => 'solutionscoco_screenshots_tab',
    'label' => 'Screenshots',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),

    array(        
      'id'          => 'solutionscoco_screenshots_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),
  
  array(
        'id'          => 'solutionscoco_screenshots',
        'label'       => __( 'Screenshots Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'solutionscoco',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutionscoco_screenshot_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'solutionscoco',
              ),
              

          )
      ),


array(
    'id' => 'solutionscoco_solutions_tab1',
    'label' => 'Solutions',
    'type' => 'tab',
    'section' => 'solutionscoco'
    ),

    array(
        'id'          => 'solutionscoco_solutions_array',
        'label'       => __( 'Solutions Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'solutionscoco',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutionscoco_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'solutionscoco_solutions_array',
              ),
              
               array(
              'id'          => 'title_img',
              'label'       => __( 'Add Title Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutionscoco_solutions_array',
              ),

              array(
              'id'          => 'title_img_hover',
              'label'       => __( 'Add Title Hover Image', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'solutionscoco_solutions_array',
              ),

               array(
              'id'          => 'solutionscoco_array_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutionscoco_solutions_array',
              ),

               array(
              'id'          => 'solutionscoco_array_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'solutionscoco_solutions_array',
              ),

          )
      ),



      array(
		'id' => 'solutionscoco_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'solutionscoco'
		), 

      array(        
      'id'          => 'solutionscoco_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

      array(        
      'id'          => 'solutionscoco_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'solutionscoco',      
      ),

      array(
        'id'          => 'solutionscoco_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'solutionscoco',
      ),

      
      array(
        'id'          => 'solutionscoco_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'solutionscoco',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'solutionscoco_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutionscoco_solution_values',
              ),
             array(
              'id'          => 'solutionscoco_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'solutionscoco_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'solutionscoco_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'solutionscoco',      
      ),

	   array(
    'id' => 'careers_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'careers'
    ),

     array(
        'id'          => 'careers_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'careers',
      ),


   array(        
      'id'          => 'careers_banner_title',        
      'label'       => __( 'Banner Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'careers',      
      ),

      array(        
        'id'          => 'careers_banner_desc',        
        'label'       => __( 'Banner Description', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ),

      array(
    'id' => 'careers_offer_tab',
    'label' => 'What We Offer',
    'type' => 'tab',
    'section' => 'careers'
    ),
     array(        
        'id'          => 'careers_offer_title',        
        'label'       => __( 'Heading', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ),
     array(        
        'id'          => 'careers_offer_desc',        
        'label'       => __( 'Description', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ),

     array(
    'id' => 'careers_community_tab',
    'label' => 'Community Video Section',
    'type' => 'tab',
    'section' => 'careers'
    ),
     array(        
        'id'          => 'careers_community_title',        
        'label'       => __( 'Title', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ),
     array(        
        'id'          => 'careers_community_desc',        
        'label'       => __( 'Description', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ),

    array(        
        'id'          => 'careers_community_image',        
        'label'       => __( 'Upload image', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ), 

   array(        
        'id'          => 'careers_community_link',        
        'label'       => __( 'Link', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ), 


    array(
    'id' => 'careers_team_tab',
    'label' => 'Team',
    'type' => 'tab',
    'section' => 'careers'
    ), 

    array(        
      'id'          => 'careers_team_heading',        
      'label'       => __( 'Heading Text', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'careers',      
      ),

      array(        
        'id'          => 'careers_team_desc',        
        'label'       => __( 'Description', 'digitalgreen' ),        
        'type'        => 'text',        
        'section'     => 'careers',      
        ), 

      array(
        'id'          => 'careers_team_team',
        'label'       => __( 'Team Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'careers',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'team_image',
              'label'       => __( 'Add Team Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'careers_team_team',
              ),
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add Name', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'careers_team_team',
              ),

               

               array(
              'id'          => 'team_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'careers_team_team',
              ),

          )
      ),

   array(
		'id' => 'careers_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'careers'
		), 

      array(        
      'id'          => 'careers_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'careers',      
      ),

      array(        
      'id'          => 'careers_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'careers',      
      ),

      array(
        'id'          => 'careers_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'careers',
      ),

      
      array(
        'id'          => 'careers_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'careers',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'careers_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'careers_solution_values',
              ),
             array(
              'id'          => 'careers_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'careers_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'careers_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'careers',      
      ),


  array(
    'id' => 'banner_news_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'news'
    ),  

    array(
        'id'          => 'banner_news_image',
        'label'       => __( 'Banner Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'news',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'news_banner_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'banner_news_image',
              ),

             array(
              'id'          => 'news_banner_category',
              'label'       => __( 'Add Category', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_news_image',
              ),
              
               array(
              'id'          => 'news_banner_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_news_image',
              ),

               array(
              'id'          => 'news_banner_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_news_image',
              ),

                array(
              'id'          => 'news_banner_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_news_image',
              ),
               

              

          )
      ),

    array(
    'id' => 'banner_blogs_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'blogs'
    ),  

    array(
        'id'          => 'banner_blogs_image',
        'label'       => __( 'Banner Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'blogs',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'blogs_banner_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'banner_blogs_image',
              ),

             array(
              'id'          => 'blogs_banner_category',
              'label'       => __( 'Add Category', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_blogs_image',
              ),
              
               array(
              'id'          => 'blogs_banner_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_blogs_image',
              ),

               array(
              'id'          => 'blogs_banner_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_blogs_image',
              ),

                array(
              'id'          => 'blogs_banner_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_blogs_image',
              ),
               

              

          )
      ),

    array(
    'id' => 'banner_resources1_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'resources1'
    ),  

    array(
        'id'          => 'banner_resources1_image',
        'label'       => __( 'Banner Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'resources1',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'resources1_banner_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'banner_resources1_image',
              ),

             array(
              'id'          => 'resources1_banner_category',
              'label'       => __( 'Add Category', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources1_image',
              ),
              
               array(
              'id'          => 'resources1_banner_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources1_image',
              ),

               array(
              'id'          => 'resources1_banner_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources1_image',
              ),

                array(
              'id'          => 'resources1_banner_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources1_image',
              ),
               

              

          )
      ),

     array(
    'id' => 'banner_resources_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'resources'
    ),  

    array(
        'id'          => 'banner_resources_image',
        'label'       => __( 'Banner Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'resources',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'resources_banner_image',
              'label'       => __( 'Add Image', 'digitalgreen' ),
              'desc'        => 'Upload Picture',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'banner_resources_image',
              ),

             array(
              'id'          => 'resources_banner_category',
              'label'       => __( 'Add Category', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources_image',
              ),
              
               array(
              'id'          => 'resources_banner_heading',
              'label'       => __( 'Add Heading', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources_image',
              ),

               array(
              'id'          => 'resources_banner_description',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources_image',
              ),

                array(
              'id'          => 'resources_banner_link',
              'label'       => __( 'Add Link', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'banner_resources_image',
              ),
               

              

          )
      ),

       array(
    'id' => 'casestudy_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'casestudy'
    ),  
  array(
        'id'          => 'casestudy_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'casestudy',
      ),
  array(        
      'id'          => 'casestudy_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),
  array(        
      'id'          => 'casestudy_banner_heading',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),
  array(        
      'id'          => 'casestudy_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),

  array(
    'id' => 'casestudy_casestudy_tab',
    'label' => 'casestudies Tab',
    'type' => 'tab',
    'section' => 'casestudy'
    ),

    array(        
      'id'          => 'casestudy_casestudy_title',        
      'label'       => __( 'Heading', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),
  

    array(
        'id'          => 'casestudy_casestudy',
        'label'       => __( 'Approach Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'casestudy',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'casestudy_title',
              'label'       => __( 'Title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'casestudy_casestudy',
              ),
              
               array(
              'id'          => 'casestudy_area',
              'label'       => __( 'Add place', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'casestudy_casestudy',
              ),

               array(
              'id'          => 'casestudy_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'casestudy_casestudy',
              ),

               array(
              'id'          => 'casestudy_desc',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'casestudy_casestudy',
              ),
      
              

              array(
              'id'          => 'casestudy_attach',
              'label'       => __( 'upload attachment or add link', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'casestudy_casestudy',
              ),

          )
      ),

     array(
		'id' => 'casestudy_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'casestudy'
		), 

      array(        
      'id'          => 'casestudy_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),

      array(        
      'id'          => 'casestudy_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'casestudy',      
      ),

      array(
        'id'          => 'casestudy_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'casestudy',
      ),

      
      array(
        'id'          => 'casestudy_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'casestudy',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'casestudy_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'casestudy_solution_values',
              ),
             array(
              'id'          => 'casestudy_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'casestudy_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'casestudy_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'casestudy',      
      ),


  
     //Financials
      
      array(
    'id' => 'financial_tab',
    'label' => 'banner',
    'type' => 'tab',
    'section' => 'financials'
    ),
    
     array(
    'id' => 'financial_banner_image',
    'label' => 'banner',
    'type' => 'upload',
    'section' => 'financials'
    ),
    
    array(
    'id' => 'financial_banner_title',
    'label' => 'banner title',
    'type' => 'text',
    'section' => 'financials'
    ),
    
    array(
    'id' => 'financial_heading',
    'label' => 'banner heading',
    'type' => 'text',
    'section' => 'financials'
    ),
    
    array(
    'id' => 'financial_description',
    'label' => 'banner description',
    'type' => 'text',
    'section' => 'financials'
    ),
    
    
    array(
    'id' => 'financial_tab1',
    'label' => 'Financials',
    'type' => 'tab',
    'section' => 'financials'
    ),
    array(
    'id' => 'title_speaks',
    'label' => ' Heading',
    'type' => 'text',
    'section' => 'financials'
    ),
    
    
     array(
        'id'          => 'financials_financial',
        'label'       => __( 'Financial Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'financials',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'financial_title',
              'label'       => __( 'Financial Title', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'financials_financial',
              ),
              
              
              
              array(
              'id'          => 'financial_area',
              'label'       => __( 'Add area', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'financials_financial',
              ),
              
              array(
              'id'          => 'financial_value',
              'label'       => __( 'Add value', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'financials_financial',
              ),
              
              array(
              'id'          => 'financial_desc',
              'label'       => __( 'Add desc', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'financials_financial',
              ),

             array(
              'id'          => 'financial_attach',
              'label'       => __( 'upload attachment or add link', 'digitalgreen' ),
              'type'        => 'upload',
              'section'     => 'financials_financial',
              ),
    
    )
    ),



      array(
		'id' => 'financial_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'financials'
		), 

      array(        
      'id'          => 'financial_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'financials',      
      ),

      array(        
      'id'          => 'financial_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'financials',      
      ),

      array(
        'id'          => 'financial_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'financials',
      ),

      
      array(
        'id'          => 'financial_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'financials',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'financial_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'financial_solution_values',
              ),
             array(
              'id'          => 'financial_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'financial_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'financial_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'financials',      
      ),

	  //main logo
	
     array(
        'id'          => 'footer_logo',
        'label'       => __( 'Footer Logo', 'digitalgreen' ),
		'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'footer',
      ),


	 array(        
      'id'          => 'footer_facebook',        
      'label'       => __( 'Facebook Url', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'footer',      
      ),

      array(        
      	'id'          => 'footer_twitter',        
      	'label'       => __( 'Twitter Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),

      array(        
      	'id'          => 'footer_linkedIn',        
      	'label'       => __( 'LinkedIn Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),

       array(        
      	'id'          => 'footer_google+',        
      	'label'       => __( 'Google+ Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),

       array(        
      	'id'          => 'footer_flickr',        
      	'label'       => __( 'Flickr Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),

      array(        
      	'id'          => 'footer_vimeo',        
      	'label'       => __( 'Vimeo Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),

       array(        
      	'id'          => 'footer_instagram',        
      	'label'       => __( 'Instagram Url', 'digitalgreen' ),        
      	'type'        => 'text',        
      	'section'     => 'footer',      
      	),
      
      array(
    'id' => 'team_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'team'
    ),  
  array(
        'id'          => 'team_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'team',
      ),
  array(        
      'id'          => 'team_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'team',      
      ),

  array(
    'id' => 'team_about_tab',
    'label' => 'About',
    'type' => 'tab',
    'section' => 'team'
    ),  
  array(
        'id'          => 'team_about_title',
        'label'       => __( 'About Title', 'digitalgreen' ),
    'desc'        => 'Title',
        'type'        => 'text',
        'section'     => 'team',
      ),
  array(        
      'id'          => 'team_about_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'team',      
      ),


  array(
        'id'          => 'team_team',
        'label'       => __( 'Team Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'team',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'team_image',
              'label'       => __( 'Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'team_team',
              ),
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_team',
              ),

               array(
              'id'          => 'team_designation',
              'label'       => __( 'Designation', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_team',
              ),

               array(
              'id'          => 'short_team_desc',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_team',
              ),
             array(
              'id'          => 'expand_team_desc',
              'label'       => __( 'Add Expanded Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_team',
              ),

          )
      ),

  array(
        'id'          => 'team_board',
        'label'       => __( 'Board Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'team',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'team_board_image',
              'label'       => __( 'Image', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'upload',
              'section'     => 'team_board',
              ),
              
               array(
              'id'          => 'title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_board',
              ),

               array(
              'id'          => 'team_board_designation',
              'label'       => __( 'Designation', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_board',
              ),

               array(
              'id'          => 'team_board_desc',
              'label'       => __( 'Add Description', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'team_board',
              ),

          )
      ),

    array(
		'id' => 'team_solutions_tab',
		'label' => 'Featured tab',
		'type' => 'tab',
		'section' => 'team'
		), 

      array(        
      'id'          => 'team_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'team',      
      ),

      array(        
      'id'          => 'team_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'team',      
      ),

      array(
        'id'          => 'team_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
	'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'team',
      ),

      
      array(
        'id'          => 'team_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'team',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'team_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'team_solution_values',
              ),
             array(
              'id'          => 'team_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'team_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'team_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'team',      
      ),

  array(
    'id' => 'donate_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'donate'
    ),

  array(
        'id'          => 'donate_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'donate',
      ),

  array(        
      'id'          => 'donate_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'donate',      
      ),
  
  array(        
      'id'          => 'donate_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'donate',      
      ),
  array(        
      'id'          => 'donate_banner_link',        
      'label'       => __( 'Link', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'donate',      
      ),


  array(
    'id' => 'partner_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'partners'
    ),  
  array(
        'id'          => 'partner_banner_image',
        'label'       => __( 'Banner Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'partners',
      ),
  array(        
      'id'          => 'partner_banner_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'partners',      
      ),

  array(        
      'id'          => 'partner_banner_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'partners',      
      ),

 array(
    'id' => 'partners_solutions_tab',
    'label' => 'Featured tab',
    'type' => 'tab',
    'section' => 'partners'
    ), 

      array(        
      'id'          => 'partners_solution_title',        
      'label'       => __( 'Title', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'partners',      
      ),

      array(        
      'id'          => 'partners_solution_desc',        
      'label'       => __( 'Description', 'digitalgreen' ),        
      'type'        => 'text',        
      'section'     => 'partners',      
      ),

      array(
        'id'          => 'partners_solution_image',
        'label'       => __( 'Image', 'digitalgreen' ),
  'desc'        => 'Upload Your Logo',
        'type'        => 'upload',
        'section'     => 'partners',
      ),

      
      array(
        'id'          => 'partners_solution_values',
        'label'       => __( 'Values', 'digitalgreen' ),
    'desc'        => '',
        
        'type'        => 'list-item',
        'section'     => 'partners',
    'settings'    => array(
            //Body Icon details
             array(
              'id'          => 'partners_solution_value',
              'label'       => __( 'Add Value', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'partners_solution_values',
              ),
             array(
              'id'          => 'partners_solution_text',
              'label'       => __( 'Add heading', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'text',
              'section'     => 'partners_solution_values',
              ),
              

          )
      ),

      array(        
      'id'          => 'partners_solution_blog',        
      'label'       => __( 'Featured Blog', 'digitalgreen' ),        
      'type'        => 'custom-post-blog-select',        
      'section'     => 'partners',      
      ),

  array(
    'id' => 'contact_banner_tab',
    'label' => 'Banner',
    'type' => 'tab',
    'section' => 'contact'
    ), 
  array(
        'id'          => 'contact_banner_image',
        'label'       => __( 'Background Image', 'digitalgreen' ),
    'desc'        => 'Upload Your Background',
        'type'        => 'upload',
        'section'     => 'contact',
      ),


   array(
        'id'          => 'contact_title',
        'label'       => __( 'Banner Title', 'digitalgreen' ),
    'desc'        => 'Title',
        'type'        => 'text',
        'section'     => 'contact',
      ),

  array(
        'id'          => 'contact_heading',
        'label'       => __( 'Banner Sub Title', 'digitalgreen' ),
    'desc'        => 'Heading',
        'type'        => 'text',
        'section'     => 'contact',
      ),

  array(
        'id'          => 'contact_desc',
        'label'       => __( 'Banner Description', 'digitalgreen' ),
    'desc'        => 'Description',
        'type'        => 'textarea',
        'section'     => 'contact',
      ),

   array(
    'id' => 'contact_offices_tab',
    'label' => 'Offices',
    'type' => 'tab',
    'section' => 'contact'
    ),


  array(
        'id'          => 'contact_offices',
        'label'       => __( 'Offices Section', 'digitalgreen' ),
    'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'contact',
    'settings'    => array(
            //Body Icon details              
               array(
              'id'          => 'title',
              'label'       => __( 'Add title', 'digitalgreen' ),
              'type'        => 'text',
              'section'     => 'contact_offices',
              ),

               
            //Body Icon details
             array(
              'id'          => 'contact_office',
              'label'       => __( 'Address', 'digitalgreen' ),
              'desc'        => '',
              'std'         => '',
              'type'        => 'textarea',
              'section'     => 'contact_offices',
              ),


          )
      ),

      

	  
		
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}