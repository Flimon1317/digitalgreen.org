<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('globalimpact'); ?>
</header>

    
    <?php if(isset($_GET['post_type']) && ($_GET['post_type'] == 'news')){ ?>
    <div class="custom-class-slideshow banner-slideshow-wrapper">
        <div class="banner-slideshow">
        
        <?php
      if (function_exists('get_option_tree')){
        $banner_news_image = ot_get_option( 'banner_news_image', array() );
        if ( ! empty( $banner_news_image ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $banner_news_image as $section ) {
      ?>
            <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img-normal"><img src="<?php echo $section['news_banner_image']; ?>" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs"><?php echo $section['news_banner_category']; ?></span>
                                <h4 class="dg-header-3 text-white header-img-text-single-line"><?php echo $section['news_banner_heading']; ?></h4>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    <?php echo $section['news_banner_description']; ?>
                                </h5>
                                <a href="<?php echo $section['news_banner_link']; ?>" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                         <?php echo $section['news_banner_description']; ?>
                    </h5>
                    <a href="<?php echo $section['news_banner_link']; ?>" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div>
 <?php } } } ?>
        </div>
    </div>
    <div class="news-sec">
        <div class="container">
            <div class="section-header container-sectionH news-section-header">
                <div class="row">
                
                    <div class="title-header news-title-header pull-left">
                        <h1 class="dg-header-1 main-section-title "><?php printf( __( 'Search Results for: %s', 'News' ), get_search_query() ); ?>
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                    <div class="cat-search-wrap pull-right">
                        <div class="search-category hidden-xs">
                            <form method="get" role="search"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="custom-input-field">
                  <input id="search" type="text" placeholder="Search keywords" class="custom-inp" name="s"/>
          <input type="hidden" name="post_type" value="news" />
          <input type="submit" value="" name="">
          </div>
                </form>
                        </div>
                        
                    </div>
                    </div>
            </div>
        </div>
    </div>
                    
    <?php } elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'blogs')){ ?>
    <div class="custom-class-slideshow banner-slideshow-wrapper">
        <div class="banner-slideshow">
<?php
      if (function_exists('get_option_tree')){
        $banner_blogs_image = ot_get_option( 'banner_blogs_image', array() );
        if ( ! empty( $banner_blogs_image ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $banner_blogs_image as $section ) {
      ?>

            <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img"><img src="<?php echo $section['blogs_banner_image']; ?>" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs"><?php echo $section['blogs_banner_category']; ?></span>
                                <h1 class="dg-header-1 text-white header-img-text-single-line"><?php echo $section['blogs_banner_heading']; ?></h1>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    <?php echo $section['blogs_banner_description']; ?>
                                </h5>
                               <a href="<?php echo $section['blogs_banner_link']; ?>" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                        <?php echo $section['blogs_banner_description']; ?>
                    </h5>
                    <a href="<?php echo $section['blogs_banner_link']; ?>" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div>

<?php } } } ?>

            
             
        </div>
    </div>
    <div class="news-sec">
        <div class="container">
            <div class="section-header container-sectionH news-section-header">
                <div class="row">
                    <div class="title-header news-title-header pull-left">
                        <h1 class="dg-header-1 main-section-title "><?php printf( __( 'Search Results for: %s', 'Blogs' ), get_search_query() ); ?>
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                    <div class="cat-search-wrap pull-right">
                        <div class="search-category hidden-xs">
                            <form method="get" role="search"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="custom-input-field">
                  <input id="search" type="text" placeholder="Search keywords" class="custom-inp" name="s"/>
          <input type="hidden" name="post_type" value="blogs" />
          <input type="submit" value="" name="">
          </div>
                </form>
                        </div>
                        
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <?php } elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'resources')){ ?>
    <div class="custom-class-slideshow banner-slideshow-wrapper">
        <div class="banner-slideshow">
<?php
      if (function_exists('get_option_tree')){
        $banner_resources1_image = ot_get_option( 'banner_resources1_image', array() );
        if ( ! empty( $banner_resources1_image ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $banner_resources1_image as $section ) {
      ?>

            <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img-normal"><img src="<?php echo $section['resources1_banner_image']; ?>" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs"><?php echo $section['resources1_banner_category']; ?></span>
                                
                                <h1 class="dg-header-1 text-white header-img-text-single-line"><?php echo $section['resources1_banner_heading']; ?></h1>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    <?php echo $section['resources1_banner_description']; ?>
                                </h5>
                               <a href="<?php echo $section['resources1_banner_link']; ?>" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                        <?php echo $section['resources1_banner_description']; ?>
                    </h5>
                    <a href="<?php echo $section['resources1_banner_link']; ?>" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div>
<?php } } } ?>

            
             
        </div>
    </div>
    <div class="news-sec">
        <div class="container">
            <div class="section-header container-sectionH news-section-header">
                <div class="row">
                    <div class="title-header news-title-header pull-left">
                        <h1 class="dg-header-1 main-section-title ">Latest Resources
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                    <div class="cat-search-wrap pull-right">
                        <div class="search-category hidden-xs">
                            <form method="get" role="search"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="custom-input-field">
                  <input id="search" type="text" placeholder="Search keywords" class="custom-inp" name="s"/>
          <input type="hidden" name="post_type" value="resources" />
          <input type="submit" value="" name="">
          </div>
                </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
    <?php if ( have_posts() ) : ?>

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>
      <?php 
      if(isset($_GET['post_type']) && ($_GET['post_type'] == 'news')){
        $news_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $news_short_desc = get_post_meta(get_the_ID(),'news_short_desc', true);
                    $news_attach = get_post_meta(get_the_ID(),'news_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $news_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
      ?>
      <div class="news-list" data-category="<?php echo $term->description; ?><?php echo $i; ?>">

          
                
                    <a href="<?php if($news_attach!="") echo $news_attach; else the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                        
                             <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $news_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a> 
                </div>
      <?php 
      } elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'blogs')){ 
          $blogs_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true);
                    $blogs_attach = get_post_meta(get_the_ID(),'blogs_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $blogs_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
          ?>
          <!----Loop-->
<div class="news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php if($blogs_attach!="") echo $blogs_attach; else the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $blogs_date; ?></span>
                        <div class="info">
                           <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a>
                </div> 
            <!--Loop End-->
          <?php
      }
      
      elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'resources')){ 
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    $resources_attach = get_post_meta(get_the_ID(),'resources_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $resources_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );

                    ?>

                <div class="news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php if($resources_attach!="") echo $resources_attach; else the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $resources_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a>
                </div> 
            <!--Loop End-->
          <?php
      }
      ?>
        <?php

      // End the loop.
      endwhile;

      

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
    <?php if(isset($_GET['post_type']) && ($_GET['post_type'] == 'news')){?>
    </ul>
    <?php
    // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
        'next_text'          => __( 'Next page', 'twentyfifteen' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
      ) );
    ?>
    </div>
    </div>
    </div>
    <?php } elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'blogs')){ ?>
    </div>
    </div>
    </div>
    <?php } elseif(isset($_GET['post_type']) && ($_GET['post_type'] == 'resources')){ ?>
    </div>
    </div>
    </div>
    <?php } ?>
  </main>
  <!-- .site-main -->
  

<?php get_footer(); ?>
