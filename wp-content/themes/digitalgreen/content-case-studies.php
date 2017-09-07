<?php /* Template name: Case Studies  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$title = "Case Studies"; 
include 'header.php'; ?>

</header>

<div class="banner-section">
        <div class="banner-img-normal"><img src="<?php echo get_field('case_study_banner_image'); ?>" 
            class="sub-menu-banner w3-image"/></div>
        <div class="banner-text">
            <div class="container text-white">
                <div class="row banner-inner">
                    <span class="banner-square"></span>
                    <h1 class="dg-header-1 banner-title"><?php echo get_field('case_study_banner_title'); ?></h1>
                    <h4 class="dg-header-3 text-white hidden-xs"><?php echo get_field('case_study_banner_heading'); ?></h4>
                    <h5 class="dg-header-5 banner-details"> <?php echo get_field('case_study_banner_description'); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
        <h5 class="dg-header-5 banner-details">
            <?php echo get_field('case_study_banner_description'); ?>
        </h5>
    </div>
    <!-- Global Immpact Section -->
    <div class="Global-impact-sec">
        <div class="container section-header container-sectionH">
            <div class="title-row row">
                <div class="title-header">
                    <h1 class="dg-header-1 main-section-title "><?php echo get_field('case_study_casestudies_heading'); ?>
                        <span class="half-squre-before-title"></span>
                    </h1>
                </div>
                <div class="cat-search-wrap pull-right">
                        <div class="search-category hidden-xs">
                            <form method="get" role="search"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="custom-input-field">
                
          </div>
                </form>
                    </div>
                    <div class="dropdown-wrapper">
                                <div class="select-input custom-input-field"><input readonly="true" name="Project" placeholder="Sort By" id="case-studies-filter-field"/></div>
                                <ul class="dropdown case-studies-dropdown" id="category-dropdown">
                                    <li><a href="#" id="-1">Show All</a></li>
                                <?php

            $terms = get_terms( array('taxonomy' => 'list_case_studies','hide_empty' => false));
            $i=1;
            foreach ( $terms as $term ) { 
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            ?>
                                    <li><a href="#" id="<?php echo $termname; ?>"><?php echo $term->name; ?></a></li>
                                
    <?php $i++; } ?>

                                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gray-boxes-container">
        <div class="container">

            <!-- Desktop -->
            <div class="row custom case-studies-div" id="items-div">

 <?php $i=1;
                                while ( have_rows('case_study_casestudies') ) 
                                {   
                                    the_row();
                                    ?>

                <div class="col-lg-4 col-md-8 col-sm-4 col-sm-offset-2 col-xs-4" data-category="<?php echo get_sub_field('case_study_taxonomy')->name; ?>" style="display:none;">
                    <div class="single-boxes-card">
                        <div class="gray-boxes">
                            <div class="box-inner-white-border">
                                <div class="gray-boxes-text-content">
                                    <h2 class="card-title"><?php echo get_sub_field('case_study_casestudies_title'); ?> - <?php echo get_sub_field('case_study_taxonomy')->name; ?></h2>

                                    <p class="hidden-sm hidden-md hidden-lg ">
                                        <a href="<?php echo get_sub_field('case_study_casestudies_file'); ?>" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo get_sub_field('case_study_casestudies_file'); ?>" target="_blank" class="forward-redirection-green-link">
                            <div class="hover-card-details hidden-xs">
                                <div class="hover-card-text-content">
                                    <h5 class="dg-header-6 text-white"><?php echo get_sub_field('case_study_casestudies_place'); ?></h5>
                                    <div class="count-globel-impact-stat text-center">
                                        <h1 class="dg-header-1 forward-redirection-green-link"><?php echo get_sub_field('case_study_casestudies_value'); ?></h1>
                                        <h4 class=" text-white"><?php echo get_sub_field('case_study_casestudies_description'); ?></h4>
                                    </div>
                                   <p>
                                        <?php if(get_sub_field('case_study_casestudies_file') == '') { ?>
                                                        <a href="<?php echo get_sub_field('case_study_casestudies_link'); ?>" target="_blank" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                                        <?php } 

                                                    else { ?>
                                                    <a href="<?php echo get_sub_field('case_study_casestudies_file'); ?>" target="_blank" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                                    <?php } ?>
                                        <!-- <a href="<?php echo get_sub_field('case_study_casestudies_file'); ?>" target="_blank" class="forward-redirection-green-link">Learn More <i class="on-hover-arrow-left" aria-hidden="true"></i></a> -->
                                    </p> 
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
<?php $i++; }  ?>

            </div>

            <!-- Mobile -->


            <div class="text-center">
                <!-- for desktop -->
                <a href="#" class="hidden-xs">
                    <button class="green-bordered-button load-more load-more-documents">Load More</button>
                </a>
                <!-- for mobile -->
                <a class="news-collepse-button hidden-sm hidden-md hidden-lg load-more-btn-link load-more load-more-documents" role="button" data-toggle="collapse" href="#">Load More &nbsp;
                <span class="icon icon-down-arrow"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="stats-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="stats-right">
                            <div class="our-solution-stats">
                                <div class="row full-row clearfix">
                                    <div class="full-col col-sm-7">
                                        <div class="our-solution-wrap">
                                            <a href="<?php echo get_field('case_study_featured_link'); ?>">
                                                <div class="our-solution-box">
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo get_field('case_study_featured_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color"><?php echo get_field('case_study_featured_description'); ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="full-col col-sm-5 solution-img-wrap hidden-xs">
                                        <div class="our-solution-img">
                                            <img src="<?php echo get_field('case_study_featured_image'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php 

$blog_id=get_field('case_study_featured_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>

                            <div class="work-block row clearfix">
                                <div class="work-inner-block col-sm-7 hidden-xs">
                                    <div class="blog-post-img-box" style="background: #3d3d3f;"></div>
                                        <div class="blog-post-img-text">
                                            <h4 class="dg-header-4 text-white"><?php echo $blog_title; ?></h4>
                                               <a href="<?php echo $blog_permalink; ?>" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
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
                        <div class="custom-class-slideshow stats-slider-wrap">
                            <div class="stats-values stat-slider">
 <?php $i=1;
                                while ( have_rows('case_study_featured_values') ) 
                                {   
                                    the_row();
                                    ?>

                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-1"><?php echo get_sub_field('case_study_featured_value'); ?></h1>
                                    <h4 class="dg-header-5"><?php echo get_sub_field('case_study_featured_value_desc'); ?></h4>
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
                </div>
            </div>
        </div>
     <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>


<?php get_footer(); ?>
 

<script type="text/javascript">
    $(document).ready(function(){
        if(jQuery(window).width() < 767){
            jQuery('#items-div').removeClass('custom');
            // jQuery('#items-div').removeClass('hidden-xs');
            // jQuery('#items-div').removeClass('hidden-md');
            // jQuery('#items-div').removeClass('hidden-sm');
        }
    });
</script>
