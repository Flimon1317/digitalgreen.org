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
            <div class="banner-img"><img src="<?php echo esc_url(ot_get_option('innovation_banner_image')); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('innovation_banner_title'); ?></</h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo ot_get_option('innovation_banner_desc'); ?></
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo ot_get_option('innovation_banner_desc'); ?>
            </h5>
        </div>
       
     

        
        <div class="solutions-section">
            <div class="container">
                <div class="section-header">
                    <div class="title-header">
                        <h1 class="dg-header-1 main-section-title ">Title that speaks to your global impact
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="custom-class-slideshow global-impact-blocks hidden-xs hidden-sm">
                <div class="globalimp-list">
                    <div class="single-img-container" id="community-videos">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo ot_get_option('innovation_section1_image'); ?>" class="img-responsive">
                                            <div class="number-count-div text-center">
                                                <p><?php echo ot_get_option('innovation_section1_image_value1'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section1_image_value2'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section1_image_value3'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 left-block">
                                    <div class="row img-details">
                                        <div class="single-img">
                                            <div class="side-gray-border">
                                                <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('innovation_section1_title'); ?>
                                                    <span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 text-details"><?php echo ot_get_option('innovation_section1_desc'); ?>
                                                </p>
                                                <a href="<?php echo ot_get_option('innovation_section1_link'); ?>" class="green-bordered-button learn-more">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-img-container" id="coco">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 right-block">
                                    <div class="img-right-part">
                                        <div class="image-green-shadow">
                                            <img src="<?php echo ot_get_option('innovation_section2_image'); ?>" class="img-responsive">
                                            <div class="number-count-div text-center">
                                                <p><?php echo ot_get_option('innovation_section2_image_value1'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section2_image_value2'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section2_image_value3'); ?></p>
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
                                                <p><?php echo ot_get_option('innovation_section3_image_value1'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section3_image_value2'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section3_image_value3'); ?></p>
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
                                                <p><?php echo ot_get_option('innovation_section4_image_value1'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section4_image_value2'); ?></p>
                                                <p><?php echo ot_get_option('innovation_section4_image_value3'); ?></p>
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
                    </div>
                </div>
            </div>
          <!--  <div class="container our-solution">
                <div class="activity-details-section">
                    <div class="row custom-class-slideshow">
                        <div class="activity-details">
                            <div class="col-sm-3">
                                <div class="single-activity-details hover-dark-pink">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> Community Videos</h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        <a href="solutions-coco.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-activity-details hover-dark-orange">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> Coco</h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="solutions-coco.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="single-activity-details hover-dark-Purple">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> Training Courseware</h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="solutions-coco.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="single-activity-details hover-dark-blue">
                                    <div class="image-green-shadow">
                                        <img src="images/img1.png" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> Loop</h2>
                                        <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="solutions-coco.html" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
             <div class="stats-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="stats-right">
                                <div class="our-solution-stats hidden-xs">
                                    <div class="row full-row">
                                        <div class="col-sm-7 full-col">
                                            <div class="our-solution-wrap">
                                                <div class="our-solution-box">
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color">Our Solutions <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color">We engage withand empower rural communities to produce participatory localized videos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row work-block clearfix">
                                    <div class="work-inner-block col-sm-7 hidden-xs">
                                        <div class="blog-post-img-box">
                                            <div class="blog-post-img-text">
                                                <h4 class="dg-header-4 text-white">Title of the blog post goes hear</h4>
                                                <a href="#" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="work-inner-block col-sm-5  green-squre-box-title">
                                        <a href="<?php echo esc_url(site_url()); ?>/careers" class="green-squre-box">
                                           <h2 class="dg-header-2"><span class="green-arrow">Work <br> With Us<i class="on-hover-arrow-left on-hover-big-aerrow-left""></i></span></h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row our-solution-stats hidden-sm hidden-md hidden-lg">
                                <div class="col-sm-7">
                                    <div class="our-solution-wrap">
                                        <div class="our-solution-box">
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color">Our Solutions <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color">We engage withand empower rural communities to produce participatory localized videos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1">80%</h1>
                                        <h4 class="dg-header-5">Global impact stat</h4>
                                    </div>
                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-2">270,000</h1>
                                        <h4 class="dg-header-5">Global impact stat</h4>
                                    </div>
                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-2">1 Million</h1>
                                        <h4 class="dg-header-5">Global impact stat</h4>
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
 