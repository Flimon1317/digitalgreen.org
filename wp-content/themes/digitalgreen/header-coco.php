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
<html>
    <head>
        <title>Digital Green - Solutions COCO</title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css" type="text/css">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css" type="text/css" />
    </head>
    
        <body class="solution-coco">
        <header class="inner-pageh clearfix">
            <nav class="navbar navbar-default navbar-background clearfix">
                <div class="navbar-header">
                    <button class="navbar-toggle green-bordered-button collapsed" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <i class="fa fa-bars menu-icon" aria-hidden="true"></i>
                        <i class="fa fa-times cross-icon" aria-hidden="true"></i>
                    </button>
                    <a class="navbar-brand header-logo" href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gray-digital-logo.png" class="img-responsive"></a>
                </div>
                <div class="navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav page-menu">
                        <li class="dropdown mega-dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/global-impact" class="dropdown-toggle">Global Impact     <span class="pull-right">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span>
                            </a>
                            <!-- mobile-sub-menu -->
                            <ul class="mega-dropdown-menu ">
                            <li> <a href="#">Global Impact </a></li>
                                <?php
      if (function_exists('get_option_tree')){
        $global_impact = ot_get_option( 'global_impact', array() );
        if ( ! empty( $global_impact ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $global_impact as $section ) {
      ?>

                                <li><a href="<?php echo $section['global_link']; ?>"><?php   echo $section['title']; ?></a></li>
       <?php $i++; } } } ?>
                            </ul>
                            <!-- desktop-sub-menu -->
                            
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/solutions" class="dropdown-toggle">Solution
                                <span class="pull-right">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span>
                            </a>
                            <ul class="mega-dropdown-menu">
                            <li> <a href="#">Solution</a></li>
                                 <?php
      if (function_exists('get_option_tree')){
        $solution_impact = ot_get_option( 'solution_impact', array() );
        if ( ! empty( $solution_impact ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $solution_impact as $section ) {
      ?>
      <li><a href="<?php  echo $section['solution_link']; ?>"><?php  echo $section['title']; ?></a></li>
       <?php $i++; } } } ?>
                            </ul>
                            
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/about-us" class="dropdown-toggle">About Us
                                <span class="pull-right">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span>
                            </a>
                            <ul class="mega-dropdown-menu">
                            <li> <a href="#">About Us</a></li>
                                <?php
      if (function_exists('get_option_tree')){
        $about_impact = ot_get_option( 'about_impact', array() );
        if ( ! empty( $about_impact ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $about_impact as $section ) {
      ?>
                                <li><a href="<?php echo  $section['about_link']; ?>"><?php echo $section['title']; ?></a></li>
       <?php $i++; } } } ?>
                            </ul>
                            
                        </li>
                        <li class="mega-dropdown">
                            <a href="<?php echo esc_url(site_url()); ?>/newsresource" class="dropdown-toggle" data-toggle="dropdown">News</a>
                        </li>
                        <li class="mega-dropdown hidden-sm hidden-xs">
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
                            <a href="careers" class="dropdown-toggle header-right-button" data-toggle="dropdown">
                                <button class="green-bordered-button with-bottom-cut">Work With Us</button>
                            </a>
                        </li>
                        <!-- for mobile search and button -->
                        <li class="dropdown mobile-size-search">
                            <input type="text" placeholder="Search">
                            <span class="mobile-search-icon"><a href="#" class="green-arrow"><i class="icon icon-search" aria-hidden="true"></i></a></span>
                        </li>
                        <li class="dropdown mobile-size-button">
                            <a href="careers">
                                <button class="btn">Work With Us</button>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>

        </header>
            
