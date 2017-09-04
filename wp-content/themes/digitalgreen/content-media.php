<?php /* Template name: Media */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$title = "Media"; 
include 'header-globalimpact.php'; ?>
</header>

!-- Banner Section -->
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
            <!-- <div class="banner-section">
                <div class="top-banner-section">
                    <div class="banner-img"><img src="images/global-impact1.png" class="img-responsive"/></div>
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
                    <div class="banner-img"><img src="images/global-impact1.png" class="img-responsive"/></div>
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
            </div>-->
        </div>
    </div>
    <div class="news-sec">
        <div class="container">
            <div class="section-header container-sectionH news-section-header">
                <div class="row">
                
                    <div class="title-header news-title-header pull-left">
                        <h1 class="dg-header-1 main-section-title ">Latest Media
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
                        <div class="dropdown-wrapper">
                            <div class="select-input custom-input-field"><input readonly="true" name="Project" placeholder="Sort By" /></div>
                            <ul class="dropdown" id="category-dropdown">
                            
        <?php
        $terms = get_terms("list_news",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
                                <li><a href="#" id="<?php echo $term->description; ?><?php echo $i; ?>"><?php echo $term->name; ?></a></li>
                               <!--  <li><a href="#" id="category-2">Lorem Ipsum</a></li>
                                <li><a href="#" id="category-3">dummy text</a></li>
                                <li><a href="#" id="category-4">Lorem Ipsum</a></li>
                                <li><a href="#" id="category-5">Present</a></li>  -->
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
            <div class="row news-section news-append">
            <?php
        $terms = get_terms("list_news",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        

 
                $the_query = new WP_Query( array('post_type' => 'news','posts_per_page'=>'4','paged'=> 1,'orderby' => 'publish_date','order' => 'ASC','tax_query' => array(array ('taxonomy' => 'list_news','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $news_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $news_short_desc = get_post_meta(get_the_ID(),'news_short_desc', true);
                    $news_attach = get_post_meta(get_the_ID(),'news_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $news_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                 ?>
 
                
                <div class="col-lg-3 news-list" data-category="<?php echo $term->description; ?><?php echo $i; ?>">

          
                
                    <!-- <a href="<?php if($news_attach!="") echo $news_attach; else the_permalink(); ?>" class="news-hover" target="_blank"> -->
                    <a href="<?php if($news_attach!="") echo $news_attach; else the_permalink(); ?>" class="news-hover" target="_blank">
                        <div class="news-image">
                        
                             <!-- <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?> -->
                            <!-- <span class="news-cat"><?php echo $term->name; ?></span> -->
                        </div>
                        <span class="date"><?php echo $news_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a> 
                </div>
                <?php endwhile;  ?>
                <?php 
$i++;
}

?>
        
           </div>
            <div class="text-center">
                <a class="green-bordered-button load-more">Load more</a>
            </div>
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

            'action': 'load_news_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };

        $.post(ajaxurl, data, function(response) {
            $('.news-append').append(response);
            page++;
            
        });
    });
});
</script> 