<?php /* Template name: Innovation  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('globalimpact'); ?>

        </header>
        <!-- Banner Section -->
        <div class="banner-section">
            <div class="banner-img-normal"><img src="<?php echo get_field('innovation_banner_image'); ?>" class="sub-menu-banner w3-image"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('innovation_banner_heading'); ?></</h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo get_field('innovation_banner_description'); ?></
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo get_field('innovation_banner_description'); ?>
            </h5>
        </div>
       
     

        
        <div class="solutions-section">
            <div class="container">
                <div class="section-header">
                    <div class="title-header">
                        <h1 class="dg-header-1 main-section-title "><?php echo get_field('innovation_about_heading'); ?>
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="custom-class-slideshow global-impact-blocks hidden-xs hidden-sm">
                <div class="globalimp-list">
<?php $i=1;
                                while ( have_rows('innovation_sections') ) 
                                {   
                                    the_row();
                                    ?>

                    <div class="single-img-container" id="community-videos">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                             <img src="<?php echo get_sub_field('innovation_section_image'); ?>" class="img-responsive">
                                            <!-- <div class="number-count-div text-center">
                                                <?php 
                                while ( have_rows('innovation_section_values') ) 
                                {   
                                    the_row();
                                    ?>  

                                                <p><span class="count-num"><?php echo get_sub_field('innovation_section_value'); ?></span> <?php echo get_sub_field('innovation_section_values_desc'); ?></p>
<?php }  ?>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 left-block">
                                            <div class="row img-details">
                                                <div class="single-img">
                                                    <div class="side-gray-border">
                                                        <h3 class="dg-header-2 sub-section-title"><?php echo get_sub_field('innovation_section_title'); ?>
                                                            <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <div class="single-img-content">
                                                            <p class="dg-header-5 text-details"><?php echo get_sub_field('innovation_section_description'); ?>
                                                            </p>
                                                        </div>
                                                        <?php if($i > 3) { ?>
                                                        <a href="<?php echo get_sub_field('innovation_section_link'); ?>" class="green-bordered-button learn-more" target="_blank">Explore Now</a>
                                                        <?php } 

                                                    else { ?>
                                                    <a class="blank-bordered-button"></a>
                                                    <?php } ?>

                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php $i++; } ?> 
                   <!--<div class="single-img-container" id="coco">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo ot_get_option('innovation_section2_image'); ?>" class="img-responsive">
                                            <div class="number-count-div text-center">
<?php
      if (function_exists('get_option_tree')){
        $innovation_section2_image_value1 = ot_get_option( 'innovation_section2_image_value1', array() );
        if ( ! empty( $innovation_section2_image_value1 ) ) {
          
          $i=1;
          foreach( $innovation_section2_image_value1 as $section ) {
      ?>  

                                                <p><?php echo $section['innovation_section2_value1']; ?></p>
<?php } } } ?> 

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('innovation_section2_title'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 text-details"><?php echo ot_get_option('innovation_section2_desc'); ?>
                                                </p>
                                                <a href="<?php echo ot_get_option('innovation_section2_link'); ?>" class="green-bordered-button learn-more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-img-container" id="training-courseware">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo ot_get_option('innovation_section3_image'); ?>" class="img-responsive">
                                            <div class="number-count-div text-center">
                                                <?php
      if (function_exists('get_option_tree')){
        $innovation_section3_image_value1 = ot_get_option( 'innovation_section3_image_value1', array() );
        if ( ! empty( $innovation_section3_image_value1 ) ) {
          
          $i=1;
          foreach( $innovation_section3_image_value1 as $section ) {
      ?>  

                                                <p><?php echo $section['innovation_section3_value1']; ?></p>
<?php } } } ?> 
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('innovation_section3_title'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 text-details"><?php echo ot_get_option('innovation_section3_desc'); ?>
                                                </p>
                                                <a href="<?php echo ot_get_option('innovation_section2_link'); ?>" class="green-bordered-button learn-more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-img-container" id="loop">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo ot_get_option('innovation_section4_image'); ?>" class="img-responsive">
                                            <div class="number-count-div text-center">
                                                <?php
      if (function_exists('get_option_tree')){
        $innovation_section4_image_value1 = ot_get_option( 'innovation_section4_image_value1', array() );
        if ( ! empty( $innovation_section4_image_value1 ) ) {
          
          $i=1;
          foreach( $innovation_section4_image_value1 as $section ) {
      ?>  

                                                <p><?php echo $section['innovation_section4_value1']; ?></p>
<?php } } } ?> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('innovation_section4_title'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 text-details"><?php echo ot_get_option('innovation_section4_desc'); ?>
                                                </p>
                                                <a href="<?php echo ot_get_option('innovation_section4_link'); ?>" class="green-bordered-button learn-more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('innovation_featured_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo get_field('innovation_featured_description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                    <?php $i=1;
                                while ( have_rows('innovation_featured_values') ) 
                                {   
                                    the_row();
                                    ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo get_sub_field('innovation_featured_value'); ?></h1>
                                        <h4 class="dg-header-5"><?php echo get_sub_field('innovation_featured_value_desc'); ?></h4>
                                    </div>
<?php } ?>

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
                                                <a href="<?php echo esc_url(site_url()); ?>/solutions">
                                                    <div class="our-solution-box">
                                                        <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('innovation_featured_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <p class="dg-header-5 on-hover-title-color"><?php echo get_field('innovation_featured_description'); ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo get_field('innovation_featured_image'); ?>">
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

$blog_id=get_field('innovation_featured_blog');
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
 