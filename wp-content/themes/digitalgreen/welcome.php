<?php
/**
 * Template name: Home Page
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('home'); ?>

   <div class="home-page">
        <div class="wrapper">
            <div class="header-slider">
                <ul class="" id="fullpage">
                    <li class="slide-single section" id="slide1">
                        <img src="<?php echo esc_url(ot_get_option('home_banner1')); ?>" class="w3-image" height=50vh width="50vw"/>
                        <div class="slider-text slider-1">
                            <div class="slider-1-text">
                                <h2 class="slider-title">
                                    <span class="banner-square"></span>
                                    <?php echo ot_get_option('home_banner1_text'); ?>
                                </h2>
                            </div>
                            <div class="slider-next-btn">
                                <a href="#" class="slider-next mobile-size-next-btn">Next</a>
                            </div>
                        </div>
                    </li>
                    <li class="slide-single section" id="slide2">
                        <img src="" data-src="<?php echo esc_url(ot_get_option('home_banner2')); ?>" height="100vh" width="100vw"/>
                        <div class="slider-text slider-2">
                            <div class="slider-2-text">
                                <h2 class="slider-title">
                                    <span class="banner-square"></span>
                                    <?php echo ot_get_option('home_banner2_text'); ?>
                                </h2>
                            </div>
                            <div class="slider-next-btn">
                                <a href="#" class="slider-next mobile-size-next-btn">Next</a>
                            </div>
                        </div>
                    </li>
                    <li class="slide-single section" id="slide3"><img src="" data-src="<?php echo esc_url(ot_get_option('home_banner3')); ?>" height="100vh" width="100vw"/>
                        <div class="slider-text slider-3">
                            <div class="slider-3-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="text-center">
                                            <h2 class="slider-title slider-3-text">
                                            <?php echo ot_get_option('home_banner3_text'); ?>
                                        </h2>
                                        </div>
                                    </div>
                                    <div class="third-slider-text-details hidden-xs hidden-sm hidden-md">
                                        <div class="row">
<?php
      if (function_exists('get_option_tree')){
        $home_banner3_array = ot_get_option( 'home_banner3_array', array() );
        if ( ! empty( $home_banner3_array ) ) {
          /* print_r($home_banner3_array); */
          $i=1;
          foreach( $home_banner3_array as $section ) {
            
      ?>

                                            <div class="col-sm-4">
                                                <div class="slider-<?php if($i==1) echo 'india'; elseif($i==2) echo 'ethopia'; elseif($i==3) echo 'global'; else echo 'global'; ?>-box-details">
                                                    <h4 class="dg-header-4 green-arrow">
                                                    <?php echo $section['title']; ?>
                                                </h4>
                                                    <h2 class="dg-header-2 text-white"><?php echo $section['home_banner3_value']; ?></h2>
                                                    <h5 class="dg-header-5 text-white">
                                                <?php echo $section['home_banner3_desc']; ?>
                                                </h5>
                                                </div>
                                            </div>
<?php $i++; } } } ?>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- </div> -->
            </div>
            <div class="container section-padding our-solution animate-section">
                <div class="activity-details-section">
                    <div class="title-header clearfix">
                        <div class="col-sm-5">
                            <h1 class="dg-header-1 main-section-title"><?php echo ot_get_option('solutions_title'); ?>
                                <span class="half-squre-before-title"></span>
                            </h1>
                            <a href="solutions" class="green-arrow hidden-xs">View More<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-sm-6">
                            <p class="dg-header-5 dg-header-5 text-details"><?php echo ot_get_option('solutions_description'); ?>
                            <p>
                            <a href="solutions" class="green-arrow xs-size-btn-show hidden-sm hidden-md hidden-lg">View More<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                        
                    <div class="row custom-class-slideshow">
                        <div class="activity-details clearfix">
<?php
      if (function_exists('get_option_tree')){
        $solutions_array = ot_get_option( 'solutions_array', array() );
        if ( ! empty( $solutions_array ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $solutions_array as $section ) {
            
      ?>

                            <div class="col-sm-3 <?php if($i==4) echo 'col-xs-12';?>activity-blocks">
                                <a href="<?php echo $section['solutions_array_link']; ?>" >
                                <div class="single-activity-details hover-dark-<?php if($i==1) echo 'pink'; elseif($i==2) echo 'orange'; elseif($i==3) echo 'Purple'; elseif($i==4) echo 'blue'; else echo 'pink';?>">
                                    <div class="image-green-shadow">
                                        <img src="<?php echo $section['solutions_image']; ?>" class="img-responsive">
                                    </div>
                                    <div class="our-solution-block">
                                        <h2 class="dg-header-4 fontsize-20-title"><span class="hidden-sm hidden-md hidden-lg mobile-half-squre-before-title"></span> 
                                        <img src="<?php echo $section['title_img']; ?>" alt="Community Videos" class="sol-default-img"/>
                                        <img src="<?php echo $section['title_img_hover']; ?>" alt="Community Videos" class="hover-img"/>
                                        </h2>
                                        <p class="dg-header-5 text-details"><?php echo $section['solutions_array_description']; ?> </p>
                                         <a href="<?php echo $section['solutions_array_link']; ?>" class="green-bordered-button learn-more">Learn more</a>
                                    </div>
                                </div>
                                </a>
                            </div>
<?php $i++; } } } ?>

                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="innovation-lab-section animate-section">
                <div class="container-fluid innovation-lab-wrap">
                    <div class="left-block">
                        <div class="gray-bgcolor-part">
                            <div class="all-side-border">
                                <h1 class="dg-header-1 main-section-title"><?php echo ot_get_option('innovation_title'); ?>
                                    <span class="half-squre-before-title"></span>
                                </h1>
                                <p class="dg-header-5 text-details"><?php echo ot_get_option('innovation_description'); ?></p>
                                <a href="innovation" class="green-bordered-button learn-more">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-block">
                        <div class="testimonials-background-part" style="background-image: url(<?php echo esc_url(ot_get_option('innovation_image')); ?>);">
                            <div class="testimonials-box-div">
                                <div class="testimonials-details text-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/quate.png">
                                    <h2 class="dg-header-3 fontsize-22-title text-white"><?php echo ot_get_option('innovation_quote'); ?></h2>
                                    <p class="dg-header-5 text-details">- <?php echo ot_get_option('innovation_quoter'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-section big-arrow-slider animate-section">
                <div class="container">
                    <div class='col-sm-12'>
                        <h4 class="dg-header-2 default-title text-center"><?php echo ot_get_option('award_title'); ?></h4>
                        <div class="custom-class-slideshow award-logos-sec">
                        <ul id="logo_slider" class="clearfix">
<?php
      if (function_exists('get_option_tree')){
        $awards_home = ot_get_option( 'awards_home', array() );
        if ( ! empty( $awards_home ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $awards_home as $section ) {
            
      ?>

                            <li data-index="<?php echo $i; ?>">
                                <div class="awards-logo"><img src="<?php echo $section['awards_image']; ?>" /></div>
                                <div class="logo-details hidden-lg hidden-md hidden-sm" data-index="<?php echo $i; ?>">
                                    <span class="triangle-up"></span>
                                    <h4 class="dg-header-4"><?php echo $section['awards_description']; ?></h4>
                                    <p class="dg-header-5 text-details"><?php echo $section['awards_description']; ?></p>
                                    <a href="<?php echo $section['awards_link']; ?>" class="green-arrow">Read More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                </div>
                            </li>
<?php $i++; } } } ?>

                           
                        </ul>


                        <div class="award-content hidden-xs">
<?php
      if (function_exists('get_option_tree')){
        $awards_home = ot_get_option( 'awards_home', array() );
        if ( ! empty( $awards_home ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $awards_home as $section ) {
            
      ?>

                         <div class="logo-details" data-index="<?php echo $i; ?>">
                                <h4 class="dg-header-4"><?php echo $section['title']; ?></h4>
                                <p class="dg-header-5 text-details"><?php echo $section['awards_description']; ?></p>
                                <a href="<?php echo $section['awards_link']; ?>" class="green-arrow">Read More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                            </div>
<?php $i++; } } } ?>
                         
                        </div>
                        </div>
                </div>
            </div>
    </div>
     <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
<?php get_footer(); ?>


       
     <script type="text/javascript">
        $(document).ready(function() {
            var isSlider = true;
            
            var slideHeight = jQuery('.header-slider').outerHeight();

            var options = {
                navigation: true,
                scrollOverflow: true,
                slidesNavigation: true,
                slidesNavPosition: 'bottom',
                navigationPosition: 'right',
                afterLoad: function(anchorLink, index){
                    // jQuery('.mega-dropdown-menu').removeClass('disable-submenu');
                    jQuery('body').addClass('fullpage-loaded');
                    if(index == 3){
                        jQuery('body, html').css({'overflow': 'visible'});
                        if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
                            $.fn.fullpage.destroy('all');
                            jQuery('.header-slider').css('pointer-events', 'none');
                            jQuery('.slide-single').removeClass('active');
                            jQuery('#fullpage').addClass('active').find('#slide2').addClass('active');
                        } else {
                            $.fn.fullpage.setAllowScrolling(false);
                            jQuery('.header-slider').css('pointer-events', 'none');
                        }
                        jQuery(window).scrollTop(10);
                    }

                    
                    if(jQuery(window).scrollTop() < slideHeight || jQuery(window).scrollTop() == 0){
                        $('header').removeClass('set-to-fixed');
                    }
                },
                onLeave: function(index, nextIndex, direction){
                    // jQuery('.mega-dropdown-menu').addClass('disable-submenu');
                    jQuery('.home-page-search .search-input').css('top', '-152px')
                },
                afterRender: function(){
                    jQuery('.header-slider').css({'pointer-events':'auto',});
                    jQuery('.header-slider').css('-webkit-pointer-events', 'auto');
                    $('#fp-nav').fadeIn();
                    jQuery(window).scrollTop(0);
                }
            };
            $('#fullpage').fullpage(options);


            jQuery('.slide-single .slider-next').click(function(e) {
                $.fn.fullpage.moveSectionDown();
            });

            if(jQuery('.fp-section:first-child').hasClass('active')){
                setTimeout(function(){
                    jQuery('body').addClass('fullpage-loaded');
                }, 1000);
            }
        });
    </script>