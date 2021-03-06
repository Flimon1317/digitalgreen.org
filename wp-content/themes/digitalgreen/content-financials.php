<?php /* Template name: Financials  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('globalimpact'); ?>

 <div class="banner-section">
        <div class="banner-img"><img src="<?php echo esc_url(ot_get_option('financial_banner_image')); ?>" class="img-responsive"/></div>
        <div class="banner-text">
            <div class="container text-white">
                <div class="row banner-inner">
                    <span class="banner-square"></span>
                    <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('financial_banner_title'); ?></h1>
                    <h4 class="dg-header-3 text-white header-img-text-single-line hidden-xs"><?php echo ot_get_option('financial_heading'); ?></h4>
                    <h5 class="dg-header-5 banner-details hidden-xs">
                        <?php echo ot_get_option('financial_description'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
        <h5 class="dg-header-5 banner-details">
            <?php echo ot_get_option('financial_description'); ?>
        </h5>
    </div>
    <!-- Global Immpact Section -->
    <div class="global-impact-sec">
        <div class="container">
            <div class="row">
                <div class="section-header container-sectionH">
                    <div class="title-row">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title "><?php echo ot_get_option('title_speaks'); ?>
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gray-boxes-container">
        <div class="container">
            <div class="case-study-boxes">
            <?php
      if (function_exists('get_option_tree')){
        $financials_financial = ot_get_option( 'financials_financial', array() );
        if ( ! empty( $financials_financial ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $financials_financial as $section ) {
      ?>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title"><?php echo $section['financial_title']; ?>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="<?php echo $section['financial_link']; ?>" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white"><?php echo $section['financial_area']; ?></h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link"><?php echo $section['financial_value']; ?></h1>
                                    <h4 class=" text-white"><?php echo $section['financial_desc']; ?></h4>
                                </div>
                                <p>
                                    <a href="<?php echo $section['financial_attach']; ?>" target="_blank" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
 <?php } } } ?>
               <!--  <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <b><a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <b><a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title">Lesson learned from locally produced videos </h2>
                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <b><a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hover-card-details hidden-xs">
                            <div class="hover-card-text-content">
                                <h3 class="dg-header-3 text-white">Ethiopia</h3>
                                <div class="count-globel-impact-stat text-center">
                                    <h1 class="dg-header-1 forward-redirection-green-link">120,000</h1>
                                    <h4 class=" text-white">Global impact stat</h4>
                                </div>
                                <p>
                                    <a href="#" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="text-center">
                <!-- for desktop -->
                <a href="#" class="hidden-xs">
                    <button class="green-bordered-button">Load More</button>
                </a>
                <!-- for mobile -->
                <a class="news-collepse-button hidden-sm hidden-md hidden-lg load-more-btn-link" role="button" data-toggle="collapse" href="#">Load More &nbsp;
                <span class="icon icon-down-arrow"></span>
                </a>
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
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('financial_solution_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('financial_solution_desc'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                   <?php
      if (function_exists('get_option_tree')){
        $financial_solution_values = ot_get_option( 'financial_solution_values', array() );
        if ( ! empty( $financial_solution_values ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $financial_solution_values as $section ) {
            
      ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo $section['financial_solution_value']; ?></h1>
                                        <h4 class="dg-header-5"><?php echo $section['financial_solution_text']; ?></h4>
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
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('financial_solution_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('financial_solution_desc'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo ot_get_option('financial_solution_image'); ?>">
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

$blog_id=ot_get_option('financial_solution_blog');
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
 