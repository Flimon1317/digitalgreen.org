<?php /* Template name: About us  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$title = "About Us"; 
include 'header.php'; ?>


        <div id="sticky-anchor"></div>
        <div class="page-sub-menu clearfix hidden-xs" id="sticky">                
            <div class="container">
                    <div class="row">
                        <ul class="sub-menu-title">
                            <li class="activemenu">
                                <a href="#our_team">Team</a> 
                            </li>
                            <li>
                                <a href="#history">Journey</a></li>
                            <li>
                                <a href="#partners">Partners</a>
                            </li>
                            <!-- <li>
                                <a href="#documents">Documents</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <!-- Banner Section -->
        <div class="banner-section-sub-menu">
            <div class="banner-img"><img src="<?php echo get_field('about_us_banner_image'); ?>" class="sub-menu-banner w3-image" /></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('about_us_banner_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-page">
            <div class="container">
                <div class="row">
                    <div class="our-team-wrap clearfix section-margin">
                        <div class="col-sm-5 team-head-left">
                            <div class="title-header">
                                <h2 class="dg-header-3 main-section-title ">
                               <?php echo get_field('about_us_about_heading'); ?>
                                    <span class="half-squre-before-title"></span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1 team-head-right">
                            <?php echo get_field('about_us_about_description'); ?>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="founder-msg-slideshow single-img-container clearfix">
                <div class="container">
                    <div class="row founder-section clearfix">
                        <div class="col-md-6 right-block">
                            <img src="<?php echo get_field('about_us_video_image'); ?>" id="watch-link-image" class="img-responsive">
                            <!-- <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a> -->
                            <a href="#" data-url="<?php echo get_field('about_us_video_link'); ?>" class="watch-link"
                            data-toggle="modal" data-target="#videoModal"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>

                        </div>
                        <div class="col-md-6 left-block">
                            <div class="row img-details">
                                <div class="single-img">
                                    <div class="side-gray-border">
                                        <h3 class="dg-header-2 sub-section-title"><?php echo get_field('about_us_video_title'); ?>
                                        </h3>
                                        <div class="single-img-content hidden-sm hidden-xs">
                                            <p class="dg-header-5"><?php echo get_field('about_us_video_description'); ?>
                                            </p>
                                        </div>
                                        <!-- <a href="<?php echo get_field('about_us_video_link'); ?>" class="green-bordered-button learn-more">Learn More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="our_team" class="container our-team-section clearfix">
                <div class="title-header section-margin ">
                    <h2 class="dg-header-1 main-section-title ">Our Team<span class="half-squre-before-title"></span></h2>
                    <a href="<?php echo esc_url(site_url()); ?>/team" target="_blank" class="green-arrow">View Team Bios<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                </div>
                <div class="custom-class-slideshow clearfix">
                    <div class="activity-details row our-teams-details clearfix">
 <?php
      if (function_exists('get_option_tree')){
        $team_team = ot_get_option( 'team_team', array() );
        if ( ! empty( $team_team ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $team_team as $section ) {
      ?>                   
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo $section['team_image']; ?>" alt="Team Image"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title redirect-team-member"><a href="<?php echo esc_url(site_url()); ?>/team#<?php echo 'team'; ?><?php echo $i; ?>"><?php echo $section['title']; ?></a></h2>
                                    <h3 class="text-details"><?php echo $section['team_designation']; ?></h3>
                                </div>
                            </div>
                        </div>
<?php $i++;} } } ?>

<!-- <?php
      if (function_exists('get_option_tree')){
        $team_board = ot_get_option( 'team_board', array() );
        if ( ! empty( $team_board ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $team_board as $section ) {
      ?>

                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo $section['team_board_image']; ?>" alt="Board member"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#"><?php echo $section['title']; ?> </a></h2>
                                    <h3 class="text-details"><?php echo $section['team_board_designation']; ?></h3>
                                </div>
                            </div>
                        </div>
<?php } } } ?> -->

                    <!--    <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Neeta Vinay</a></h2>
                                    <h3 class="text-details">Chief Financial Officer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Saureen Shah</a></h2>
                                    <h3 class="text-details">Chief Technology Officer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Rikin Gandhi</a></h2>
                                    <h3 class="text-details">Chief Executive Officer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Vinay Kumar</a></h2>
                                    <h3 class="text-details">Regional Direction - Asia and Global Initiatives</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Neeta Vinay</a></h2>
                                    <h3 class="text-details">Chief Financial Officer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 team-item">
                            <div class="single-activity-details">
                                <div class="member-img-wrap">
                                    <div class="image-green-shadow member-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="Rikin Gandhi"/>
                                    </div>
                                </div>
                                <div class="our-solution-block">
                                    <h2 class="fontsize-20-title"><a href="#">Saureen Shah</a></h2>
                                    <h3 class="text-details">Chief Technology Officer</h3>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="team-history-wrap section-margin">
                <div id="history" class="container clearfix">
                    <div class="title-header section-margin ">
                        <h2 class="dg-header-2 text-center">The Journey of Digital Green</h2>
                    </div>
                    <div class="clearfix timeline-info-slider">

      <?php $i=1;
                                while ( have_rows('about_us_history_section') ) 
                                {   
                                    the_row();
                                    ?>

                        <div class="timeline-info">
                            <div class="left-block">
                               <div class="img-right-part">
                                   <div class="image-green-shadow"> 
                                       <img src="<?php echo get_sub_field('about_us_history_image'); ?>" class="img-responsive">
                                       
                                       <!-- <a href="#" data-url="<?php echo get_sub_field('about_us_watch_video_link'); ?>" class="watch-link"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a> -->
                                   </div>
                               </div>
                            </div>
                            <div class="right-block">
                               <div class="side-gray-border">
                                   <h3 class="dg-header-3 sub-section-title"><?php echo get_sub_field('about_us_history_title'); ?> <?php echo get_sub_field('about_us_history_year'); ?>
                                   </h3>
                                   <p class="dg-header-5 text-details"><?php echo get_sub_field('about_us_history_description'); ?>
                                   </p>
                                   <!-- <a href="<?php echo get_sub_field('about_us_history_link'); ?>" class="green-bordered-button learn-more">Learn More</a> -->

                               </div>
                            </div>
                        </div>  
<?php $i++; }  ?>

                        <!--<div class="timeline-info">
                            <div class="left-block">
                               <div class="img-right-part">
                                   <div class="image-green-shadow">
                                       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png" class="img-responsive">
                                       <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>
                                   </div>
                               </div>
                            </div>
                            <div class="right-block">
                               <div class="side-gray-border">
                                   <h3 class="dg-header-3 sub-section-title">Community Videos 2003
                                   </h3>
                                   <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.
                                   </p>
                                   <a href="community.html" class="green-bordered-button learn-more">Learn More</a>
                               </div>
                            </div>
                        </div>
                        <div class="timeline-info">
                            <div class="left-block">
                               <div class="img-right-part">
                                   <div class="image-green-shadow">
                                       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png" class="img-responsive">
                                       <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>
                                   </div>
                               </div>
                            </div>
                            <div class="right-block">
                               <div class="side-gray-border">
                                   <h3 class="dg-header-3 sub-section-title">Community Videos 2005
                                   </h3>
                                   <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.
                                   </p>
                                   <a href="community.html" class="green-bordered-button learn-more">Learn More</a>
                               </div>
                            </div>
                        </div>
                        <div class="timeline-info">
                            <div class="left-block">
                               <div class="img-right-part">
                                   <div class="image-green-shadow">
                                       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png" class="img-responsive">
                                       <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>
                                   </div>
                               </div>
                            </div>
                            <div class="right-block">
                               <div class="side-gray-border">
                                   <h3 class="dg-header-3 sub-section-title">Community Videos  2008
                                   </h3>
                                   <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.
                                   </p>
                                   <a href="community.html" class="green-bordered-button learn-more">Learn More</a>
                               </div>
                            </div>
                        </div>
                        <div class="timeline-info">
                            <div class="left-block">
                               <div class="img-right-part">
                                   <div class="image-green-shadow">
                                       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png" class="img-responsive">
                                       <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>
                                   </div>
                               </div>
                            </div>
                            <div class="right-block">
                               <div class="side-gray-border">
                                   <h3 class="dg-header-3 sub-section-title">Community Videos  2010
                                   </h3>
                                   <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.
                                   </p>
                                   <a href="community.html" class="green-bordered-button learn-more">Learn More</a>
                               </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="timeline-dates-container">
                        <div class="timeline-dates-slider">
<?php $i=1;
                                while ( have_rows('about_us_history_section') ) 
                                {   
                                    the_row();
                                    ?>

                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date"><?php echo get_sub_field('about_us_history_year'); ?></p>
                                </div>
                            </div>
<?php $i++; } ?>


                         <!--   <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2003</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2005</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2008</p>
                                </div>
                            </div>

                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2010</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2013</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2015</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2017</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2019</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2021</p>
                                </div>
                            </div>
                            <div class="timeline-date">
                                <div class="date-wrap">
                                    <p class="date">2023</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="dg-partners-wrapper">
                <div id="partners" class="container">
                    <div class="row section-margin ">
                        <div class="col-sm-6">
                            <div class="row title-header">
                                <h2 class="dg-header-3 main-section-title ">
                                    <?php echo get_field('about_us_partners_title'); ?>
                                    <span class="half-squre-before-title"></span>
                                </h2>
                                <div class="partner-content">
                                   <p> <?php echo get_field('about_us_partners_descripton'); ?></p>
                                    <a href="<?php echo get_field('about_us_partners_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 custom-class-slideshow col-sm-offset-1">
                           <div class="row partners-slider">
                               <?php $i=1;
                                while ( have_rows('about_us_partners') ) 
                                {   
                                    the_row();
                                    ?>

                           <div class="col-sm-6 partners-logo"><img src="<?php echo get_sub_field('about_us_partners_image'); ?>" /></div> 
<?php }  ?>
                              <!-- <div class="col-sm-6 partners-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" /></div> 
                               <div class="col-sm-6 partners-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" /></div>  
                               <div class="col-sm-6 partners-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" /></div> 
                               <div class="col-sm-6 partners-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" /></div> 
                               <div class="col-sm-6 partners-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" /></div>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="career-link-wrapper clearfix">
                <div class="left-block">
                    <img src="<?php echo get_field('about_us_careers_image'); ?>" class="img-responsive">
                </div>
                <div class="right-block">
                    <div class="career-link">
                        <div class="side-gray-border">
                            <h3 class="dg-header-1 sub-section-title"><?php echo get_field('about_us_careers_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i>
                               <span class="half-squre-before-title"></span>
                           </h3>
                           <a href="<?php echo get_field('about_us_careers_link'); ?>" class="green-bordered-button learn-more">View Careers</a>
                        </div>
                    </div>
                </div>
            </div>
 <?php 
        if( have_rows('about_us_financials_section') ) 
        {
            ?>
            <div id="documents" class="features-list-wrapper">
                <div class="features-blocks">
                    <div class="row clearfix features-list">
 <?php $i=1;
                                while ( have_rows('about_us_financials_section') ) 
                                {   
                                    the_row();
                                    ?> 

                        <div class="col-md-4">
                            <div class="features-item">
                                <h2 class="dg-header-3"><?php echo get_sub_field('about_us_financials_title'); ?></h2>
                                <p class="dg-header-5 text-details"><?php echo get_sub_field('about_us_financials_description'); ?></p>
                                <p><a href="<?php echo get_sub_field('about_us_financials_link'); ?>" class="green-arrow">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></p>
                            </div>
                        </div>

<?php } ?>

                       <!-- <div class="col-md-4">
                            <div class="features-item">
                                <h2 class="dg-header-3">Annual Report</h2>
                                <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula. Praesent nisi ligula, tincidunt a accumsan in, posuere eget justo. Suspendisse potenti.</p>
                                <p><a href="#" class="green-arrow">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="features-item">
                                <h2 class="dg-header-3">Press - Press Kit</h2>
                                <p class="dg-header-5 text-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula. Praesent nisi ligula, tincidunt a accumsan in, posuere eget justo. Suspendisse potenti.</p>
                                <p><a href="#" class="green-arrow">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a></p>
                            </div>
                        </div> -->
                    </div>
               </div>
            </div>
<?php }  ?>
        </div>
         <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>



<?php get_footer(); ?>

<script type="text/javascript">
    $(document).ready(function(){
        var img = jQuery('#watch-link-image');
        var video_link = "<?php echo get_field('about_us_video_link'); ?>";
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        var match = video_link.match(regExp);
        var video_id;

        if (match && match[2].length == 11) 
                video_id = match[2];
        img.attr('src', "https://img.youtube.com/vi/"+video_id+"/maxresdefault.jpg");
    });
</script>

<!-- <div id="my-modal">
    <div class="modal-lg">
            <div class="modal-content">
                    <a href="#" class="close-video">X</a>
                    <iframe class="video-player" id="iframeYoutube" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
            </div>
    </div>
</div> -->


<!-- Video Modal -->
<div class="modal videoModal" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe
            src=""
            id="iframeYoutube"
            class="embed-responsive-item video-player"
            webkitallowfullscreen mozallowfullscreen allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
 
