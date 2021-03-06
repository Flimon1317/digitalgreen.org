<?php /* Template name: News Resource  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('globalimpact'); ?>

<!-- Banner Section -->
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
                    <div class="banner-img"><img src="<?php echo $section['resources_banner_image']; ?>" class="img-responsive"/></div>
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
           while ( $the_query->have_posts() ) : $the_query->the_post();
          $news_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $news_short_desc = get_post_meta(get_the_ID(),'news_short_desc', true);
                    ?>
        
                            <div class="news-list">
                                <a href="<?php the_permalink(); ?>" class="news-hover">
                                    <div class="news-image">
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                                        <span class="news-cat"><?php echo $term->name; ?></span>
                                    </div>
                                    <span class="date"><?php echo $news_date; ?></span>
                                    <div class="info">
                                        <h3 class="title"><?php the_title(); ?></h3>
                            <p class="description"><?php echo $news_short_desc; ?></p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
<?php
          endwhile; 
        } 
        wp_reset_query();
}
        ?>

                          <!--  <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img-2.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat pur">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
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
           while ( $the_query->have_posts() ) : $the_query->the_post();
          $blogs_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true);
                    ?>
                            <div class="news-list">
                                <a href="<?php the_permalink(); ?>" class="news-hover">
                                    <div class="news-image">
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                                        <span class="news-cat"><?php echo $term->name; ?></span>
                                    </div>
                                    <span class="date"><?php echo $blog_date; ?></span>
                                    <div class="info">
                                        <h3 class="title"><?php the_title(); ?></h3>
                                        <p class="description"><?php echo $blogs_short_desc; ?></p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                           <?php
          endwhile; 
        }
        wp_reset_query();
}
        ?> 
                           <!-- <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img-2.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat pur">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="common-news-sections">
                    <div class="section-header container-sectionH clearfix">
                        <div class="title-header">
                            <h1 class="dg-header-1 main-section-title ">Resources
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
           while ( $the_query->have_posts() ) : $the_query->the_post();
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    ?>
                            <div class="news-list">
                                <a href="<?php the_permalink(); ?>" class="news-hover">
                                    <div class="news-image">
                                     <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                                        <span class="news-cat"><?php echo $term->name; ?></span>
                                    </div>
                                    <span class="date"><?php echo $resources_date; ?> </span>
                                    <div class="info">
                                        <h3 class="title"><?php the_title(); ?></h3>
                                        <p class="description"><?php echo $resources_short_desc; ?></p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
 <?php
          endwhile; 
        }
        wp_reset_query();
}
        ?> 


                        <!--    <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img-2.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat pur">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div>
                            <div class="news-list">
                                <a href="#" class="news-hover">
                                    <div class="news-image">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images//img1.png" alt="news image 1" />
                                        <span class="news-cat">Category</span>
                                    </div>
                                    <span class="date">March 24th, 2017</span>
                                    <div class="info">
                                        <h3 class="title">Digital Classrooms for Farmers</h3>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum leo at nibh vehicula elementum vel semper massa.</p>
                                    </div>
                                    <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
 