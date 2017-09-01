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


$title = "Press Kit"; 
include 'header.php'; ?>
</header>

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
                        <h1 class="dg-header-1 main-section-title ">Latest Press Kit
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
            <div class="row resources-append">
<?php
         $terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        

 
 $the_query = new WP_Query( array('post_type' => 'resources','posts_per_page'=>'4','paged'=> 1,'tax_query' => array(array ('taxonomy' => 'list_resources','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    $resources_attach = get_post_meta(get_the_ID(),'resources_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $resources_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );

                    ?>

                <div class="col-lg-3 news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php if($resources_attach!="") echo $resources_attach; else the_permalink(); ?>" class="news-hover"  target="_blank">
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
<?php endwhile; 
$i++;
}

?>

               
           </div>
           <a class="green-bordered-button load-more">Load more</a>
        </div>
    </div>
    <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>


<?php get_footer(); ?>

 <script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {

    $('body').on('click', '.load-more', function() {
        var data = {

            'action': 'load_resources_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };

        $.post(ajaxurl, data, function(response) {
            $('.resources-append').append(response);
            page++;
            
        });
    });
});
</script> 


