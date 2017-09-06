<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title>Digital Green</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<body>
    <header class="<?php if(is_front_page()) echo 'page-menu-container header-home'; else echo 'inner-pageh clearfix custom-header'; ?>" >
        <nav class="navbar navbar-default <?php if(is_front_page()) echo 'navbar-background-home'; else echo 'navbar-background';  ?> nav-down">
            <div class="navbar-header">
                <button class="navbar-toggle green-bordered-button collapsed" type="button">
                    <i class="fa fa-bars menu-icon" aria-hidden="true"></i>
                    <i class="fa fa-times cross-icon" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand header-logo hidden-xs" href="<?php echo esc_url(site_url()); ?>">
                    <?php if(is_front_page()){ ?>
                        <img src="<?php echo esc_url(ot_get_option('header_logo')); ?>" alt="Digital Green" class="white-logo"/>
                    <?php } ?>
                    <img <?php if(is_front_page()) echo 'style="display:none;"'; ?> src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gray-digital-logo.png" alt="Digital Green" class="gray-logo"/>
                </a>
                <a class="navbar-brand header-logo hidden-lg hidden-md hidden-sm" href="<?php echo esc_url(site_url()); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gray-digital-logo.png" class="img-responsive">
                </a>
            </div>
            <div class="navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav page-menu">
                        <li class="dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/global-impact" class="dropdown-toggle">Global Impact</a>
                            <span class="pull-right">
                                <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                            </span>
                            <!-- mobile-sub-menu -->
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo esc_url(site_url()); ?>/global-impact">Global Impact</a></li>
                                <?php
                                      if (function_exists('get_option_tree')){
                                        $global_impact = ot_get_option( 'global_impact', array() );
                                        if ( ! empty( $global_impact ) ) {
                                          /* print_r($home_banner); */
                                          
                                          foreach( $global_impact as $section ) {
                                      ?>
                                            <li><a href="<?php echo $section['global_link']; ?>"><?php echo $section['title']; ?></a></li>
                                       <?php } } } 
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/solutions" class="dropdown-toggle">Solutions</a>
                            <span class="pull-right">
                                <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                            </span>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo esc_url(site_url()); ?>/solutions">Solutions</a></li>
                                 <?php
                                      if (function_exists('get_option_tree')){
                                        $solution_impact = ot_get_option( 'solution_impact', array() );
                                        if ( ! empty( $solution_impact ) ) {
                                          /* print_r($home_banner); */
                                          
                                          foreach( $solution_impact as $section ) {
                                      ?>
                                            <li><a href="<?php echo $section['solution_link']; ?>"><?php echo $section['title']; ?></a></li>
                                       <?php } } } 
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/about-us" class="dropdown-toggle">About Us</a>
                            <span class="pull-right">
                                <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                            </span>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo esc_url(site_url()); ?>/about-us">About Us</a></li>
                                <?php
                                      if (function_exists('get_option_tree')){
                                        $about_impact = ot_get_option( 'about_impact', array() );
                                        if ( ! empty( $about_impact ) ) {
                                          /* print_r($home_banner); */
                                          
                                          foreach( $about_impact as $section ) {
                                      ?>
                                            <li><a href="<?php echo $section['about_link']; ?>"><?php echo $section['title']; ?></a></li>
                                       <?php } } } 
                                ?>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/newsresource" class="dropdown-toggle">News</a>
                            <span class="pull-right">
                                <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                            </span>
                            <!-- mobile-sub-menu -->
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo esc_url(site_url()); ?>/newsresource">News</a></li>
                                <?php
                                      if (function_exists('get_option_tree')){
                                        $news = ot_get_option( 'news', array() );
                                        if ( ! empty( $news ) ) {
                                          /* print_r($home_banner); */
                                          
                                          foreach( $news as $section ) {
                                      ?>
                                         <li><a href="<?php echo $section['news_link']; ?>"><?php echo $section['title']; ?></a></li>
                                       <?php } } } 
                                ?>
                            </ul>
                            
                        </li>

                        <!-- <li class="dropdown mega-dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/newsresource" class="dropdown-toggle" data-toggle="dropdown" onclick="redirect_link('<?php echo esc_url(site_url()); ?>/newsresource')">News</a>
                        </li> -->
                        <li class="dropdown mega-dropdown hidden-sm hidden-xs hidden-md hidden-lg">
                            <div class="home-page-search">
                                <div class="search-button">
                                    <i class="icon icon-search" aria-hidden="true"></i>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                    <span class="text-right search-submit-button"><a href="#" class="green-arrow"><i class="on-hover-arrow-left" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown link-donate">
                            <a href="<?php echo esc_url(site_url()); ?>/donate"><span class="green-arrow">Donate</span></a>
                        </li>
                        <li class="dropdown btn-work-with">
                            <a href="<?php echo esc_url(site_url()); ?>/careers" class="dropdown-toggle header-right-button" data-toggle="dropdown">
                                <button onclick="redirect_link('<?php echo esc_url(site_url()); ?>/careers')" class="green-bordered-button with-bottom-cut">Work With Us</button>
                            </a>
                        </li>
                        <!-- for mobile search and button -->
                        <!-- <li class="dropdown mobile-size-search">
                            <input type="text" placeholder="Search">
                            <span class="mobile-search-icon"><a href="#" class="green-arrow"><i class="icon icon-search" aria-hidden="true"></i></a></span>
                        </li> -->
                        <li class="dropdown mobile-size-button">
                            <a href="<?php echo esc_url(site_url()); ?>/careers">
                                <button onclick="redirect_link('<?php echo esc_url(site_url()); ?>/careers')" class="btn">Work With Us</button>
                            </a>
                        </li>
                    </ul>
                </div>
            <!-- /.nav-collapse -->
        </nav>
        <!-- </div> -->
        <script type="text/javascript">
            function redirect_link(url) {
                window.location.href = url;
            }
        </script>
    <?php if(is_front_page()){ ?>
        </header>
    <?php } ?>

   