<?php /* Template name: Solutions  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$title = "Our Solutions"; 
include 'header.php'; ?>


            <div id="sticky-anchor"></div>
            <div class="page-sub-menu clearfix hidden-xs" id="sticky">
                <div class="container">
                    <div class="row">
                        <ul class="sub-menu-title">
<?php $i=1;
                                while ( have_rows('solutions_section') ) 
                                {   
                                    the_row();
                                    ?>

                            <li <?php if($i==1) echo 'class="activemenu"' ?>>
                                <a href="#section<?php echo $i; ?>"><?php echo get_sub_field('solutions_section_title'); ?></a>
                            </li>
<?php $i++; } ?>
                        </ul>
                    </div>
                </div>
            </div>
            </header>
        <!-- Banner Section -->
        <div class="banner-section-sub-menu">
            <div class="banner-img"><img src="<?php echo get_field('solutions_banner_image'); ?>" class="sub-menu-banner"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('solutions_banner_title'); ?></h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo get_field('solutions_banner_heading'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo get_field('solutions_banner_heading'); ?>
            </h5>
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
                                while ( have_rows('solutions_approach_section') ) 
                                {   
                                    the_row();
                                    ?>
                  <div class="slider-with-tab <?php if($i==1) echo 'active-tab'; ?>" data-index="<?php echo $i; ?>"><h1 class="dg-header-1"><?php echo get_sub_field('solutions_approach_title'); ?></h1>
                    <p><?php echo get_sub_field('solutions_approach_short_description'); ?></p>
                  </div>
                  
      <?php $i++; } ?>
      
              <!--  <div class="slider-with-tab active-tab" data-index="2"><h1 class="dg-header-1">02</h1>
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
                    
                     <?php $i=1;
                                while ( have_rows('solutions_approach_section') ) 
                                {   
                                    the_row();
                                    ?>
                    
                        <div class="slider-with-tab hidden-lg hidden-md" data-index="<?php echo $i; ?>"><h1 class="dg-header-2"><?php echo get_sub_field('solutions_approach_title'); ?></h1>
                            <p><?php echo get_sub_field('solutions_approach_short_description'); ?></p>
                        </div>
                        <div class="single-img-container <?php if($i==1) echo'visible-approch'; ?>" data-index="<?php echo $i; ?>">
                            <div class="row">
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo get_sub_field('solutions_approach_heading'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <div class="single-img-content">
                                                    <p class="dg-header-5 text-details"><?php echo get_sub_field('solutions_approach_description'); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo get_sub_field('solutions_approach_image'); ?>" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php $i++; } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="solutions-section global-impact-sec">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title "><?php echo get_field('solutions_section_about_heading'); ?>
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                    </div>
                    <div class="custom-class-slideshow global-impact-blocks">
                        <div class="globalimp-list">

<?php $i=1;
                                while ( have_rows('solutions_section') ) 
                                {   
                                    the_row();
                                    ?>

                            <div class="single-img-container" id="section<?php echo $i; ?>">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 right-block">
                                            <div class="img-right-part">
                                                <div class="image-green-shadow">
                                                    <img src="<?php echo get_sub_field('solutions_section_image'); ?>" class="img-responsive">
<?php 
        if( have_rows('solutions_section_values') ) 
        {
            ?>
                    <!-- Hide stats -->
                                                    <div class="number-count-div text-center">
                                                        <?php 
                                while ( have_rows('solutions_section_values') ) 
                                {   
                                    the_row();
                                    ?>                       
                                                        <p><span class="count-num"><?php echo get_sub_field('solutions_section_value'); ?></span> <?php echo get_sub_field('solutions_section_value_description'); ?></p>
       <?php } ?> 
                                                    </div> 
                                                    <?php } ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 left-block">
                                            <div class="row img-details">
                                                <div class="single-img">
                                                    <div class="side-gray-border">
                                                        <h3 class="dg-header-2 sub-section-title"><?php echo get_sub_field('solutions_section_title'); ?>
                                                            <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <div class="single-img-content">
                                                            <p class="dg-header-5 text-details"><?php echo get_sub_field('solutions_section_description'); ?>
                                                            </p>
                                                        </div>
                                                        <a href="<?php echo get_sub_field('solutions_section_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
<?php 
        if( have_rows('solutions_solutions_section') ) 
        {
            ?>  
             <div class="container section-padding our-solution">
                <div class="activity-details-section">
                    <div class="row custom-class-slideshow">
                        <div class="activity-details clearfix">
<?php $i=1;
                                while ( have_rows('solutions_solutions_section') ) 
                                {   
                                    the_row();
                                    ?>

                            <div class="col-sm-3 <?php if($i==4) echo 'col-xs-12';?> activity-blocks">
                            <div class="single-activity-details hover-dark-<?php if($i==1) echo 'pink'; elseif($i==2) echo 'orange'; elseif($i==3) echo 'Purple'; elseif($i==4) echo 'blue'; else echo 'pink';?>">
                                    <div class="image-green-shadow">
                                        <img src="<?php echo get_sub_field('solutions_solutions_image'); ?>" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                        <img src="<?php echo get_sub_field('solutions_solutions_title_image'); ?>" alt="Community Videos" class="sol-default-img"/>
                                        <img src="<?php echo get_sub_field('solutions_solutions_title_hover_image'); ?>" alt="Community Videos" class="hover-img"/>
                                        </h2>
                                        <p class="dg-header-5 text-details"><?php echo get_sub_field('solutions_solutions_description'); ?> </p>
                                         <a href="<?php echo get_sub_field('solutions_solutions_link'); ?>" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
<?php $i++; } ?> 

                            
                        </div>
                    </div>
                </div>
            </div>  
<?php }  ?>
            <div class="stats-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 work-inner-block">
                            <div class="row our-solution-stats hidden-md hidden-lg">
                                <div class="col-md-7">
                                    <div class="our-solution-wrap">
                                        <div class="our-solution-box">
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('solutions_featured_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo get_field('solutions_featured_description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                   <?php $i=1;
                                while ( have_rows('solutions_featured_values') ) 
                                {   
                                    the_row();
                                    ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo get_sub_field('solutions_featured_value'); ?></h1>
                                        <h4 class="dg-header-5"><?php echo get_sub_field('solutions_featured_value_desc'); ?></h4>
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
                                                <a href="<?php echo get_field('solutions_featured_link'); ?>">
                                                    <div class="our-solution-box">
                                                        <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('solutions_featured_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                        </h3>
                                                        <p class="dg-header-5 on-hover-title-color"><?php echo get_field('solutions_featured_description'); ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo get_field('solutions_featured_image'); ?>">
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

$blog_id=get_field('solutions_featured_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>


                                    <div class="col-sm-7 work-inner-block hidden-sm hidden-xs">
                                        <div class="blog-post-img-box"  style="background: #3d3d3f;"></div>
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