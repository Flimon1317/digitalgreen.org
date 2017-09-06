<?php /* Template name: India  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

</header>

<?php while ( have_posts() ) : the_post(); ?>
    
        <!-- Banner Section -->
        <div class="banner-section">
            <div class="banner-img-normal"><img src="<?php echo get_field('india_banner_image'); ?>" alt="India Banner" class="sub-menu-banner"/></div>
            <div class="banner-text country-banner-txt">
                <div class="container">
                    <div class="country-banner">
                        <div class="row banner-inner">
                            <span class="banner-square"></span>
                            <h1 class="dg-header-1 banner-title"><?php echo get_field('india_banner_heading'); ?></h1>
                            <h4 class="dg-header-3 text-white hidden-xs"><?php echo get_field('india_banner_sub_heading'); ?></h4>
                            <h5 class="dg-header-5 banner-details hidden-xs"><?php echo get_field('india_banner_description'); ?>
                                
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo get_field('india_banner_description'); ?>
            </h5>
        </div>
         <div class="container">
          <?php 
        if( have_rows('india_banner_values') ) 
        {
            ?>
            <div class="black-boxes">
                <div class="row">
<?php 
                                while ( have_rows('india_banner_values') ) 
                                {   
                                    the_row();
                                    ?>

                    <div class="col-sm-4 black-box-blocks">
                        <div class="text-center">
                            <span class="black-box-num"><?php echo get_sub_field('india_banner_value'); ?></span>
                            <p class="text-detail"><?php echo get_sub_field('india_banner_value_title'); ?></p>
                        </div>
                    </div>
<?php } ?>

               <!--     <div class="col-sm-4 black-box-blocks">
                        <div class="text-center">
                            <span class="black-box-num"><?php echo ot_get_option('india_image_value2'); ?></span>
                            <p class="text-detail"><?php echo ot_get_option('india_image_value2_text'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 black-box-blocks">
                        <div class="text-center">
                            <span class="black-box-num"><?php echo ot_get_option('india_image_value3'); ?></span>
                            <p class="text-detail"><?php echo ot_get_option('india_image_value3_text'); ?></p>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php } ?>
        </div>

       <!-- Our Approach Section -->


        <div class="our-approch">
            <div class="container">
                <div class="row section-margin">
                    <div class="title-header">
                        <h1 class="dg-header-1 main-section-title ">Our Approach
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="approach-carousel">
                <div class="our-approach-carousel hidden-sm hidden-xs">
                
       
      <?php $i=1;
                                while ( have_rows('india_approach') ) 
                                {   
                                    the_row();
                                    ?>
                  <div class="slider-with-tab <?php if($i==1) echo 'active-tab'; ?>" data-index="<?php echo $i; ?>"><h1 class="dg-header-1"><?php echo get_sub_field('india_approach_title'); ?></h1>
                    <p><?php echo get_sub_field('india_approach_short_desc'); ?></p>
                  </div>
                  <?php $i++;
                                }
                            ?>
                  
      
      
              
                </div>
                <div class="approach-content">
                    <div class="container">
                    
                     
      <?php $i=1;
                                while ( have_rows('india_approach') ) 
                                {   
                                    the_row();
                                    ?>
                    
                        <div class="slider-with-tab hidden-lg hidden-md" data-index="<?php echo $i; ?>"><h1 class="dg-header-2"><?php echo get_sub_field('india_approach_title'); ?></h1>
                            <p><?php echo get_sub_field('india_approach_short_desc'); ?></p>
                        </div>
                        <div class="single-img-container <?php if($i==1) echo'visible-approch'; ?>" data-index="<?php echo $i; ?>">
                            <div class="row">
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo get_sub_field('india_approach_heading'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details"><?php echo get_sub_field('india_approach_description'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo get_sub_field('india_approach_image'); ?>" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    
                        <?php $i++;
                                }
                            ?>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="single-project-wrapper section-margin">
            <div class="container">
            
            
                <div class="row">
                    <div class="section-header clearfix">
                        <div class="project-inner-wrap">
                            <div class="title-header pull-left">
                                <h1 class="dg-header-1 main-section-title ">Projects
                                    <span class="half-squre-before-title"></span>
                                </h1>
                            </div>
                            <!-- <div class="pull-right">
                               <div class="dropdown-wrapper">
                                    <div class="select-input custom-input-field"><input readonly="true" name="Project" placeholder="Sort By" /></div>
                                    <ul class="dropdown">
                                        <li><a href="#">Present</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">dummy text</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">Present</a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="project-inner-wrap">
                
                <?php
 $the_query = new WP_Query( array('post_type' => 'india'));
                  while ( $the_query->have_posts() ) : $the_query->the_post();
{ 
                    
                    
                    $india_solutions_place = get_post_meta(get_the_ID(),'india_solutions_place', true);
            
                    $india_solutions_duration = get_post_meta(get_the_ID(),'india_solutions_duration', true);
                    
                    
                    
                    $india_partner_type1 = get_post_meta(get_the_ID(),'india_partner_type1', true);

                    $india_partner_type2 = get_post_meta(get_the_ID(),'india_partner_type2', true);

                    $india_solutions = get_post_meta(get_the_ID(),'india_solutions',array());
                    
                    $india_partners1 = get_post_meta(get_the_ID(),'india_partners1',array());

                    $india_partners2 = get_post_meta(get_the_ID(),'india_partners2',array());

                     ?>
                    <div class="single-project-details">
                        <ul class="project-head-list clearfix present-project">
                            <li><?php echo $india_solutions_place;?></li>
                            <li class="hidden-xs"><?php echo $india_solutions_duration;?></li>
                        </ul>
                        <div class="project-details">
                            <h1 class="dg-header-1"><?php the_title(); ?></h1>
                            <p class="dg-header-5 text-detail hidden-xs"><?php the_content(); ?></p>
                            
                        </div>
                        <div class="project-solution">
                            <h3 class="hidden-xs">Solution used</h3>
                            <div class="box-container hidden-xs">
                                <div class="row">
                                <?php          
                        if (isset($india_solutions)){ 
  $i=1;  
                                     foreach($india_solutions[0] as $key => $value){  
                                             ?>
                                    <div class="partner-boxes">
                                        <div class="box <?php if($i==1) echo 'blue'; elseif($i==2) echo 'pink'; elseif($i==3) echo 'orange'; elseif($i==4) echo 'purple'; else echo 'pink';?>">
                                            <div class="box-content">
                                            
                                            <!-- Not Done,should be done by vivek............-->
                                                <img src="<?php echo $value['india_solutions_type1']; ?>" alt="Loop" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <?php  $i++;
                        
                    }
                } ?>
                                     
                                   
                                </div>
                            </div>
                        </div>
                        <div class="partners-section">
                            <a href="#" class="partner-collepse-button hidden-xs" >View Partners &nbsp;
                                <span class="icon icon-up-arrow"></span>
                                <span class="icon icon-down-arrow"></span>
                            </a>
                            <div class="collapse-project">
                                <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                     <?php       
                        if (isset($india_partners1)){   
                                     foreach($india_partners1[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                    <?php echo $value['india_partners1_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div>
                                 <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                    
                                     <?php       
                        if (isset($india_partners2)){   
                                     foreach($india_partners2[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                     <?php echo $value['india_partners2_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                                      
 <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div> 
                               
                            </div>
                        </div>
                    </div>
                     <?php 
}
endwhile; ?>  
                    <div class="text-center"><a href="#" class="learn-more hidden-xs green-bordered-button">Learn More</a></div>
                </div>
            </div>
        </div>

        <div class="country-quote-section">
            <div class="container text-center">
                <div class="custom-class-slideshow">
                    <div class="clearfix country-quote-slider">


       
<?php $i=1;
                                while ( have_rows('india_quote') ) 
                                {   
                                    the_row();
                                    ?>
<?php echo 'hello';
                                
                                    ?>

                        <div class="testimonials-details">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/quate.png">
                            <h2 class="dg-header-3 fontsize-22-title"><?php echo get_sub_field('india_quote_title'); ?></h2>
                            <p class="dg-header-5 text-details">- <?php echo get_sub_field('india_quote_by'); ?></p>
                            <a href="<?php echo get_sub_field('india_quote_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                        </div>
<?php } ?>

                        
                    </div>
                </div>
            </div>
        </div>
        
        <?php endwhile; ?>
        <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
<?php get_footer(); ?>