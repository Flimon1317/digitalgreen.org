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

get_header('globalimpact'); ?>

   <!-- Banner Section -->
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
                    <div class="banner-img"><img src="<?php echo $section['resources1_banner_image']; ?>" class="img-responsive"/></div>
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
                        <h1 class="dg-header-1 main-section-title ">Latest News
                            <span class="half-squre-before-title"></span>
                        </h1>
                    </div>
                    <div class="cat-search-wrap pull-right">
                        <div class="search-category hidden-xs">
                            <form>
                                <div class="custom-input-field">
                                    <input type="text" name="search" class="custom-inp" placeholder="Search">
                                    <input type="submit" value="" name="">
                                </div>
                            </form>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="select-input custom-input-field"><input readonly="true" name="Project" placeholder="Sort By" /></div>
                            <ul class="dropdown" id="category-dropdown">
                            <?php
        $terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
                                <li><a href="#" id="<?php echo $termname; ?>"><?php echo $term->name; ?></a></li>
                               <!-- <li><a href="#" id="category-2">Lorem Ipsum</a></li>
                                <li><a href="#" id="category-3">dummy text</a></li>
                                <li><a href="#" id="category-4">Lorem Ipsum</a></li>
                                <li><a href="#" id="category-5">Present</a></li> -->
<?php $i++; } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gray-boxes-container">
        <div class="container news-container">
            <div class="row">
<?php
        $terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        

 
 $the_query = new WP_Query( array('post_type' => 'resources','tax_query' => array(array ('taxonomy' => 'list_resources','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    ?>

                <div class="news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $resources_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p class="description"><?php echo $resources_short_desc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a>
                </div> 
<?php endwhile; 
$i++;
}

?>

               <!-- <div class="news-list  purple-cat" data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png" alt="news image 1" />
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
                <div class="news-list  grey-cat" data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list darkgreen-cat"  data-category="category-4">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-4">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-4">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-4">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-1">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-2">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-3">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
                <div class="news-list"  data-category="category-4">
                    <a href="#" class="news-hover">
                        <div class="news-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img1.png" alt="news image 1" />
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
           <a href="case-studies.html" class="green-bordered-button load-more">Load more</a>
        </div>
    </div>
    <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>


<?php get_footer(); ?>

 


