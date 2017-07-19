<?php /* Template name: Training  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('training'); ?>



 <div class="banner-section">
            <div class="banner-img"><img src="<?php echo esc_url(ot_get_option('training_banner_image')); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('training_banner_title'); ?></h1>
                        <h4 class="dg-header-3 text-white header-img-text-single-line hidden-xs"><?php echo ot_get_option('training_banner_sub_title'); ?></h4>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                           <?php echo ot_get_option('training_banner_desc'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo ot_get_option('training_banner_desc'); ?>
            </h5>
        </div>
        <!-- Our Approach Section -->
        <div class="our-approch">
            <div class="container">
                <div class="section-margin">
                    <div class="title-header">
                        <h1 class="dg-header-1 main-section-title ">Our Approach
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="solution-approach approach-carousel">
                <div class="our-approach-carousel hidden-sm hidden-xs">
                
                                
<?php
      if (function_exists('get_option_tree')){
        $training_approach = ot_get_option( 'training_approach', array() );
        if ( ! empty( $training_approach ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $training_approach as $section ) {
      ?>
                
                  <div class="slider-with-tab <?php if($i==1) echo 'active-tab'; ?>" data-index="<?php echo $i; ?>"><h1 class="dg-header-1"><?php echo $section['training_approach_title']; ?></h1>
                    <p><?php echo $section['training_approach_short_desc']; ?></p>
                  </div>
                  <?php $i++; } } } ?>
            <!--    <div class="slider-with-tab active-tab" data-index="2"><h1 class="dg-header-1">02</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="slider-with-tab" data-index="3"><h1 class="dg-header-1">03</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="slider-with-tab" data-index="4"><h1 class="dg-header-1">270,000</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>  -->  
                </div>
                <div class="approach-content">
                    <div class="container">
                    
                                    <?php
      if (function_exists('get_option_tree')){
        $training_approach = ot_get_option( 'training_approach', array() );
        if ( ! empty( $training_approach ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $training_approach as $section ) {
      ?>
                    
                        <div class="slider-with-tab hidden-lg hidden-md" data-index="<?php echo $i; ?>"><h1 class="dg-header-2"><?php echo $section['training_approach_title']; ?></h1>
                            <p><?php echo $section['training_approach_short_desc']; ?></p>
                        </div>
                        <div class="single-img-container <?php if($i==1) echo'visible-approch'; ?>" data-index="<?php echo $i; ?>">
                            <div class="row">
                              <div class="col-sm-6 right-block">
                                <div class="img-right-part">
                                    <div class="image-green-shadow">
                                        <img src="<?php echo $section['training_approach_image']; ?>" class="img-responsive" alt=""/>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo $section['training_approach_heading']; ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details"><?php echo $section['training_approach_description']; ?>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php $i++; } } } ?>  
                        <!--  <div class="slider-with-tab hidden-lg hidden-md" data-index="2"><h1 class="dg-header-2">02</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="single-img-container visible-approch" data-index="2">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                </div> -->
                      <!--           <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title">Lorem Ipsum
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-with-tab hidden-lg hidden-md" data-index="3"><h1 class="dg-header-2">03</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="single-img-container" data-index="3">
                            <div class="row">
                                <div class="col-sm-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="images/img-2.png" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title">Lorem Ipsum
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-with-tab hidden-lg hidden-md" data-index="4"><h1 class="dg-header-2">04</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="single-img-container" data-index="4">
                            <div class="row">
                                <div class="col-sm-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="images/img-2.png" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title">Lorem Ipsum
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="clearfix solution-coco-welcome solution-single-gray-box section-margin">
                        <div class="clearfix solution-gray-box-white-border solution-welcome-inner">
                            <div class="col-md-6">
                                <div class="solution-gray-box-img">
                                    <img src="<?php echo ot_get_option('training_product_image'); ?>" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="solution-gray-box-content">
                                    <h2 class="dg-header-3"><?php echo ot_get_option('training_product_title'); ?></h2>
                                    <p><?php echo ot_get_option('training_product_desc'); ?></p>
                                    <a href="#" class="btn-google-play"><img src="images/google-play.png" class=" hidden-sm hidden-md hidden-lg"></a>
                                </div>
                            </div>
                        </div>
                    </div>   
                   <div class="coco-images section-margin">
                        <img src="<?php echo ot_get_option('training_product_show_image'); ?>" alt="sample image"/>
                    </div> 
                    <div class="clearfix about-coco">
                        <div class="single-mobile-container section-margin">
                            <div class="clearfix coco-about-blocks">
                            <div class="col-sm-6 col-sm-push-6 coco-mobile-img">
                                    <div class="solution-single-gray-box">
                                        <div class="solution-gray-box-white-border">
                                            <img src="<?php echo ot_get_option('training_what_image'); ?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-sm-6 col-sm-pull-6 coco-mobile-content">
                                    <div class="what-coco-content">
                                        <h3 class="dg-header-2 sub-section-title">
                                            <?php echo ot_get_option('training_what_title'); ?>
                                            <span class="half-squre-before-title"></span>
                                        </h3>
                                        <p class="dg-header-5 text-details"><?php echo ot_get_option('training_what_desc'); ?>
                                        <p>
                                       <a href="<?php echo ot_get_option('training_what_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-mobile-container section-margin">
                            <div class="clearfix coco-about-blocks">
                                <div class="col-sm-6 coco-mobile-img">
                                    <div class="solution-single-gray-box">
                                        <div class="solution-gray-box-white-border">
                                            <img src="<?php echo ot_get_option('training_how_image'); ?>" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1 coco-mobile-content">
                                    <div class="single-mobile-text-content">
                                        <h3 class="dg-header-2 sub-section-title">
                                            <?php echo ot_get_option('training_how_title'); ?>
                                            <span class="half-squre-before-title"></span>
                                        </h3>
                                        <p class="dg-header-5 text-details"><?php echo ot_get_option('training_how_desc'); ?>
                                        <p>
                                        <a href="<?php echo ot_get_option('training_how_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-screenshots big-arrow-slider">
                <div class="custom-class-slideshow text-center">
                    <div class="container"><h1 class="dg-header-2 mobile-slider-main-title"><?php echo ot_get_option('training_screenshots_title'); ?></h1></div>
                    <div id="carousel-mobile-img" class="clearfix">
                    <?php
      if (function_exists('get_option_tree')){
        $training_screenshots = ot_get_option( 'training_screenshots', array() );
        if ( ! empty( $training_screenshots ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $training_screenshots as $section ) {
      ?>
                        <div class="slide-item">
                             <img src="<?php echo $section['training_screenshot_image']; ?>" alt="slide1">
                        </div> 
                        <?php $i++; } } } ?>
                        
                 <!--      <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide2">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide3">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide4">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide5">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide6">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide7">
                        </div>
                        <div class="slide-item">
                             <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/iphone-5.png" alt="slide8">
                        </div>  -->  
                        
                    </div>
                </div>
            </div>

<?php
      if (function_exists('get_option_tree')){ 
    $training_solutions_array = ot_get_option( 'training_solutions_array', array() );
        if ( ! empty( $training_solutions_array ) ) {
?>
            <div class="container section-padding our-solution">
                <div class="activity-details-section">
                    <div class="row custom-class-slideshow">
                        <div class="activity-details clearfix">
<?php 
        
          /* print_r($home_banner); */
          $i=1;
          foreach( $training_solutions_array as $section ) {
            
      ?>

                            <div class="col-sm-3 <?php if($i==4) echo 'col-xs-12';?> activity-blocks">
                                <div class="single-activity-details hover-dark-<?php if($i==1) echo 'pink'; elseif($i==2) echo 'orange'; elseif($i==3) echo 'Purple'; elseif($i==4) echo 'blue'; else echo 'pink';?>">
                                    <div class="image-green-shadow">
                                        <img src="<?php echo $section['training_image']; ?>" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                        <img src="<?php echo $section['title_img']; ?>" alt="Community Videos" class="sol-default-img"/>
                                        <img src="<?php echo $section['title_img_hover']; ?>" alt="Community Videos" class="hover-img"/>
                                        <p class="dg-header-5 text-details"><?php echo $section['training_array_description']; ?> </p>
                                         <a href="<?php echo $section['training_array_link']; ?>" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
<?php $i++; } ?>

                           <!-- <div class="col-sm-3 activity-blocks">
                                <div class="single-activity-details hover-dark-orange">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                            <img src="images/coco-gray.png" alt="CoCo" class="sol-default-img">
                                            <img src="images/coco-orange.png" alt="CoCo" class="hover-img">
                                        </h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="solutions-coco.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 activity-blocks">
                                <div class="single-activity-details hover-dark-Purple">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                            <img src="images/trainning-gray.png" alt="Training Courseware" class="sol-default-img">
                                            <img src="images/trainning-purple.png" alt="Training Courseware" class="hover-img">
                                        </h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                         <a href="case-studies.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12 activity-blocks">
                                <div class="single-activity-details hover-dark-blue">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                            <img src="images/loop.png" alt="Loop" class="sol-default-img">
                                            <img src="images/loop-blue.png" alt="Loop" class="hover-img">
                                        </h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="case-studies.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div> 

<?php } } ?>   
            <div class="stats-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 work-inner-block">
                            <div class="row our-solution-stats hidden-md hidden-lg">
                                <div class="col-md-7">
                                    <div class="our-solution-wrap">
                                        <div class="our-solution-box">
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('training_solution_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('training_solution_desc'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                   <?php
      if (function_exists('get_option_tree')){
        $training_solution_values = ot_get_option( 'training_solution_values', array() );
        if ( ! empty( $training_solution_values ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $training_solution_values as $section ) {
            
      ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo $section['training_solution_value']; ?></h1>
                                        <h4 class="dg-header-5"><?php echo $section['training_solution_text']; ?></h4>
                                    </div>
<?php } } } ?>

                                   <!-- <div class="count-global-stat text-center">
                                        <h1 class="dg-header-2">270,000</h1>
                                        <h4 class="dg-header-5">Global impact stat</h4>
                                    </div>
                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-2">1 Million</h1>
                                        <h4 class="dg-header-5">Global impact stat</h4>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="stats-right">
                                <div class="our-solution-stats hidden-sm hidden-xs">
                                    <div class="row full-row">
                                        <div class="col-md-7 full-col">
                                            <div class="our-solution-wrap">
                                                <div class="our-solution-box">
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('training_solution_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('training_solution_desc'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo ot_get_option('training_solution_image'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row work-block clearfix">
                                    <div class="work-inner-block col-md-5  green-squre-box-title">
                                        <a href="<?php echo esc_url(site_url()); ?>/careers" class="green-squre-box">
                                           <h2 class="dg-header-2"><span class="green-arrow">Work <br> With Us<i class="on-hover-arrow-left on-hover-big-aerrow-left""></i></span></h2>
                                        </a>
                                    </div>

<?php 

$blog_id=ot_get_option('training_solution_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>


                                    <div class="col-sm-7 work-inner-block hidden-sm hidden-xs">
                                        <div class="blog-post-img-box"  style="background: url(<?php echo $blog_image; ?>) 0 0 no-repeat;">
                                            <div class="blog-post-img-text">
                                                <h4 class="dg-header-4 text-white"><?php echo $blog_title; ?></h4>
                                                <a href="<?php echo $blog_permalink; ?>" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
       
      

<?php get_footer(); ?>
 