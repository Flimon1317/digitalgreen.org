<?php /* Template name: Global Initiatives  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('globalimpact'); ?>

 <div class="page-sub-menu clearfix hidden-xs">
                <div class="container">
                    <div class="row">
                        <ul class="sub-menu-title">
                        <?php $i=1;
                                while ( have_rows('global_initiatives_sections') ) 
                                {   
                                    the_row();
                                    ?>
                            <li >
                                <a href="#section<?php echo $i; ?>"><?php echo get_sub_field('global_initiatives_section_title'); ?></a>
                            </li>
                            <?php $i++; } ?>
                           <!-- <li>
                                <a href="#ethiopia"><?php echo ot_get_option('global_ethopia_title'); ?></a></li>
                            <li>
                                <a href="#global-initiatives"><?php echo ot_get_option('global_global_title'); ?></a>
                            </li> -->
                            
                        </ul>
                    </div>
                </div>
            </div>
        </header>
 <div class="banner-section-sub-menu">
            <div class="banner-img"><img src="<?php echo get_field('global_initiatives_banner_image'); ?>" class="sub-menu-banner w3-image"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('global_initiatives_banner_image_title'); ?></h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                             <?php echo get_field('global_initiatives_banner_image_description'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo get_field('global_initiatives_banner_image_description'); ?>
            </h5>
        </div>
        <!-- Global Immpact Section -->
        <div class="global-impact-sec">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title "><?php echo get_field('global_initiatives_about_heading'); ?>
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                    </div>
                
                    <div class="custom-class-slideshow">
                        <div class="globalimp-list">
<?php $i=1;
                                while ( have_rows('global_initiatives_sections') ) 
                                {   
                                    the_row();
                                    ?>


                            <div class="single-img-container" id="section<?php echo $i; ?>">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 right-block">
                                            <div class="img-right-part">
                                                <div class="image-green-shadow">
                                                    <img src="<?php echo get_sub_field('global_initiatives_section_image'); ?>" class="img-responsive">
                                                    <div class="number-count-div text-center">
                                
      <?php 
                                while ( have_rows('global_initiatives_section_values') ) 
                                {   
                                    the_row();
                                    ?>                    
                                                        <p><span class="count-num"><?php echo get_sub_field('global_initiatives_section_value'); ?></span> <?php echo get_sub_field('global_initiatives_section_value_desc'); ?></p>
       <?php  } ?>                                                 
                                                       <!--  <p><span class="count-num">5,000</span> Purus Elit Quam</p>
                                                        <p><span class="count-num">40</span> Egestas Tristique</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 left-block">
                                            <div class="row img-details">
                                                <div class="single-img">
                                                    <div class="side-gray-border">
                                                        <h3 class="dg-header-2 sub-section-title"><?php echo get_sub_field('global_initiatives_section_title'); ?>
                                                            <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <div class="single-img-content">
                                                            <p class="dg-header-5 text-details"><?php echo get_sub_field('global_initiatives_section_description'); ?>
                                                            </p>
                                                        </div>
                                                        <a href="<?php echo get_sub_field('global_initiatives_section_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php $i++; } ?> 
                         <!--   <div class="single-img-container" id="ethiopia">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 right-block">
                                            <div class="img-right-part">
                                                <div class="image-green-shadow">
                                                    <img src="<?php echo ot_get_option('global_ethopia_image'); ?>" class="img-responsive">
                                                    <div class="number-count-div text-center">
                                                        <?php
      if (function_exists('get_option_tree')){
        $global_ethopia_image_value1 = ot_get_option( 'global_ethopia_image_value1', array() );
        if ( ! empty( $global_ethopia_image_value1 ) ) {
          
          $i=1;
          foreach( $global_ethopia_image_value1 as $section ) {
      ?>                        
                                                        <p><?php echo $section['global_ethopia_value']; ?></p>
       <?php } } } ?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 left-block">
                                            <div class="row img-details">
                                                <div class="single-img">
                                                    <div class="side-gray-border">
                                                        <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('global_ethopia_title'); ?>
                                                            <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <div class="single-img-content">
                                                            <p class="dg-header-5 text-details"><?php echo ot_get_option('global_ethopia_desc'); ?>
                                                            </p>
                                                        </div>
                                                        <a href="<?php echo ot_get_option('global_ethopia_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-img-container" id="global-initiatives">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 right-block">
                                            <div class="img-right-part">
                                                <div class="image-green-shadow">
                                                    <img src="<?php echo ot_get_option('global_global_image'); ?>" class="img-responsive">
                                                    <div class="number-count-div text-center">
                                                         <?php
      if (function_exists('get_option_tree')){
        $global_global_image_value1 = ot_get_option( 'global_global_image_value1', array() );
        if ( ! empty( $global_global_image_value1 ) ) {
          
          $i=1;
          foreach( $global_global_image_value1 as $section ) {
      ?>                        
                                                        <p><?php echo $section['global_global_value']; ?></p>
       <?php } } } ?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 left-block">
                                            <div class="row img-details">
                                                <div class="single-img">
                                                    <div class="side-gray-border">
                                                        <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('global_global_title'); ?>
                                                            <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <div class="single-img-content">
                                                            <p class="dg-header-5 text-details"><?php echo ot_get_option('global_global_desc'); ?>
                                                            </p>
                                                        </div>
                                                        <a href="<?php echo ot_get_option('global_global_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="stats-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 work-inner-block">
                            <div class="row our-solution-stats hidden-md hidden-lg">
                                <div class="col-md-7">
                                    <div class="our-solution-wrap">
                                        <div class="our-solution-box">
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('global_initiatives_solutions_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo get_field('global_initiatives_solutions_description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                  
      <?php $i=1;
                                while ( have_rows('global_initiatives_solutions_values') ) 
                                {   
                                    the_row();
                                    ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo get_sub_field('global_initiatives_solutions_value'); ?></h1>
                                        <h4 class="dg-header-5"><?php echo get_sub_field('global_initiatives_solutions_value_desc'); ?></h4>
                                    </div>
<?php }  ?>

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
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('global_initiatives_solutions_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color"><?php echo get_field('global_initiatives_solutions_description'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo get_field('global_initiatives_solutions_image'); ?>">
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

$blog_id= get_field('global_initiatives_featured_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>


                                    <div class="col-sm-7 work-inner-block hidden-sm hidden-xs">
                                        <div class="blog-post-img-box"  style="background: url(<?php echo $blog_image; ?>) 0 0 no-repeat;"></div>
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
         <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>


<?php get_footer(); ?>
 
