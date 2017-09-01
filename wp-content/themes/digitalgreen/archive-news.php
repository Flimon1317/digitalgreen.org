<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$title = "News"; 
include 'header-globalimpact.php'; ?>
</header>

 <<!-- Banner Section -->
    <div class="custom-class-slideshow banner-slideshow-wrapper">
        <div class="banner-slideshow">
<?php
      if (function_exists('get_option_tree')){
        $banner_resources_image = ot_get_option( 'banner_resources_image', array() );
        if ( ! empty( $banner_resources_image ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $banner_resources_image as $section ) {
      ?>

            <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img-normal"><img src="<?php echo $section['resources_banner_image']; ?>" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs"><?php echo $section['resources_banner_category']; ?></span>
                                <h4 class="dg-header-3 text-white header-img-text-single-line"><?php echo $section['resources_banner_heading']; ?></h4>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    <?php echo $section['resources_banner_description']; ?>
                                </h5>
                                <a href="<?php echo $section['resources_banner_link']; ?>" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                        <?php echo $section['resources_banner_description']; ?>
                    </h5>
                    <a href="<?php echo $section['resources_banner_link']; ?>" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div>
<?php } } } ?>

        <!--    <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//global-impact1.png" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs">Category</span>
                                <h4 class="dg-header-3 text-white header-img-text-single-line">Loop - Mobile App Makes Farm to Market Linkages Easy</h4>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel rutrum faucibus dolor.
                                </h5>
                                <a href="#" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                        Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel rutrum faucibus dolor.
                    </h5>
                    <a href="#" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div>
             <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//global-impact1.png" class="img-responsive"/></div>
                    <div class="banner-text">
                        <div class="container text-white">
                            <div class="row banner-inner">
                                <span class="banner-square"></span>
                                <span class="category-text hidden-xs">Category</span>
                                <h4 class="dg-header-3 text-white header-img-text-single-line">Loop - Mobile App Makes Farm to Market Linkages Easy</h4>
                                <h5 class="dg-header-5 banner-details hidden-xs">
                                    Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel rutrum faucibus dolor.
                                </h5>
                                <a href="#" class="green-arrow hidden-xs">Read More<i class="on-hover-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                    <h5 class="dg-header-5 banner-details">
                        Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Vivamus sagittis lacus vel rutrum faucibus dolor.
                    </h5>
                    <a href="#" class="green-arrow">Read More<i class="on-hover-arrow-left"></i></a>
                </div>
            </div> -->
        </div>
    </div>

    

    <!-- News Post Section -->
    <div class="news-post-wrapper">
        <div class="container">
            <div class="row">
                <div class="common-news-sections">
                    <div class="section-header container-sectionH clearfix">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title ">Blogs
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                        <a href="<?php echo esc_url(site_url()); ?>/blogs" class="green-arrow">View More<i class="on-hover-arrow-left"></i></a>
                    </div>
                    <div class="gray-boxes-container clearfix">
                        <div class="news-resource-container clearfix">

                        <?php 
        $terms = get_terms("list_blogs",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        $the_query = new WP_query(array( 'post_type=blogs&posts_per_page=4','tax_query' => array(array ('taxonomy' => 'list_blogs','field' => 'slug','terms' => $term->slug))));

        if ($the_query->have_posts()) {
           $i=1;
           while ( $the_query->have_posts() && $i < 5 ) : $the_query->the_post();
          $blogs_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true);
                    $blogs_attach = get_post_meta(get_the_ID(),'blogs_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $blogs_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                    ?>
                            <div class="news-list">
                                <a href="<?php if($blogs_attach!="") echo $blogs_attach; else the_permalink(); ?>" class="news-hover" target="_blank">
                                    <div class="news-image">
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                                        <span class="news-cat"><?php echo $term->name; ?></span>
                                    </div>
                                    <span class="date"><?php echo $blog_date; ?></span>
                                    <div class="info">
                                         <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                           <?php $i++;
          endwhile; 
        }
        wp_reset_query();
}
        ?> 
                        </div>
                    </div>
                </div>
                

                <div class="common-news-sections">
                    <div class="section-header container-sectionH clearfix">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title ">Press Kit
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                        <a href="<?php echo esc_url(site_url()); ?>/resources" class="green-arrow">View More<i class="on-hover-arrow-left"></i></a>
                    </div>
                    <div class="gray-boxes-container clearfix">
                        <div class="news-resource-container clearfix">

<?php 

$terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        $the_query = new WP_query(array( 'post_type=resources&posts_per_page=4','tax_query' => array(array ('taxonomy' => 'list_resources','field' => 'slug','terms' => $term->slug))));
        
        if ($the_query->have_posts()) {
           $i=1;
           while ( $the_query->have_posts() && $i < 5 ) : $the_query->the_post();
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    $resources_attach = get_post_meta(get_the_ID(),'resources_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $resources_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                    ?>
                            <div class="news-list">
                                <a href="<?php if($resources_attach!="") echo $resources_attach; else the_permalink(); ?>" class="news-hover" target="_blank">
                                    <div class="news-image">
                                     <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                                        <span class="news-cat"><?php echo $term->name; ?></span>
                                    </div>
                                    <span class="date"><?php echo $resources_date; ?> </span>
                                    <div class="info">
                                         <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
 <?php $i++;
          endwhile; 
        }
        wp_reset_query();
}
        ?> 
                        </div>
                    </div>
                </div>
                <div class="common-news-sections">
                    <div class="section-header container-sectionH clearfix">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title ">News
                                <span class="half-squre-before-title"></span>
                            </h1>
                        </div>
                        <a href="news" class="green-arrow">View More<i class="on-hover-arrow-left"></i></a>
                    </div>
                    <div class="gray-boxes-container clearfix">
                        <div class="news-resource-container clearfix">

                        <?php 
$terms = get_terms("list_news",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        $the_query = new WP_query(array( 'post_type=news&posts_per_page=4','tax_query' => array(array ('taxonomy' => 'list_news','field' => 'slug','terms' => $term->slug))));



        
        if ($the_query->have_posts()) {
            $i=1;
           while ( $the_query->have_posts() && $i < 5 ) : $the_query->the_post();
          $news_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $news_short_desc = get_post_meta(get_the_ID(),'news_short_desc', true);
                    $news_attach = get_post_meta(get_the_ID(),'news_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $news_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                    ?>
        
                            <div class="news-list">
                                <a href="<?php if($news_attach!="") echo $news_attach; else the_permalink(); ?>" class="news-hover" target="_blank">
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
<?php $i++;
          endwhile; 
        } 
        wp_reset_query();
}
        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>

 

