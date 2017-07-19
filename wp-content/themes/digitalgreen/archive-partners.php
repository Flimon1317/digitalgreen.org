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
        <div class="banner-section">
            <div class="banner-img"><img src=" <?php echo ot_get_option('partner_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('partner_banner_title'); ?></h1>
                        
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo ot_get_option('partner_banner_desc'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo ot_get_option('partner_banner_desc'); ?>
            </h5>
        </div>
        <div class="container section-margin gray-box-tabbing-sec partner-tabbing">
            <div class="title-header">
                <h2 class="dg-header-2 main-section-title ">Title about your partners
                    <span class="half-squre-before-title"></span>
                </h2>
            </div>
            <div class="partner-top-tabbing">
                <ul class="tab-list clearfix">
<?php
        
                $terms = get_terms("list_partners",array( 'parent' => 0 ));
                $i=1;
                foreach ( $terms as $term ) { 
                $termname = strtolower($term->name);
                $termname = str_replace(' ', '-', $termname);
                $children = get_terms( "list_partners", array('parent' => $term->term_id));
                
                    ?>

                    <li data-index="<?php echo $i; ?>" <?php if($i==2) echo 'class="active"'; ?> ><?php echo $term->name; ?></li>
                    <!--<li data-index="2" class="active">Country Partners</li>
                    <li data-index="3">Technology Partners</li> -->
<?php $i++; } ?>

                </ul>
                <div class="tab-list-options">

<?php $j=1;
 $root_terms = get_terms("list_partners",array( 'parent' => 0 ));
                $i=1;
                foreach ( $root_terms as $root_term ) { 
?>
                    <ul class="tab-options-list clearfix" data-id="<?php echo $j?>" style="display: block;">
 <?php
 
$children = get_terms( "list_partners", array('parent' => $root_term->term_id ));
                    foreach ( $children as $child ) {
                        $termname = strtolower($child->name);
                        $termname = str_replace(' ', '-', $termname);

                        ?>

                        <li><a href="#" data-id="<?php echo $child->term_id; ?>"><?php echo $child->name; ?> (<?php echo $root_term->term_id?>)</a></li>

                        <?php } ?>
                       <!-- <li><a href="#" data-id="ethiopia">Ethiopia</a></li>
                        <li><a href="#" data-id="kenya">Kenya</a></li>
                        <li><a href="#" data-id="ghana">Ghana</a></li>
                        <li><a href="#" data-id="niger">Niger</a></li>
                        <li><a href="#" data-id="tanzania">Tanzania</a></li>
                        <li><a href="#" data-id="afghanistan">Afghanistan</a></li> -->
                    </ul>
                    <?php $j++;}?>
                </div>
            </div>

            
            <?php $j=1;
 $root_terms = get_terms("list_partners",array( 'parent' => 0 ));
                $i=1;
                foreach ( $root_terms as $root_term ) { 
                    
                    
?>
            <div class="partners-container country-partner active"  data-index="<?php echo $j?>">
            
            <?php 
            $children = get_terms( "list_partners", array('parent' => $root_term->term_id ));
                    foreach ( $children as $child ) {
                        $termname = strtolower($child->name);
                        $termname = str_replace(' ', '-', $termname);
            ?>
                <div class="gray-box-tabbing" id="<?php echo $child->term_id?>">
                    <div class="country-with-opening">
                        <h2><?php echo $termname?></h2>
                        <div class="custom-class-slideshow">

                            <div class="gray-box-row">
                                <div class="gray-box row">
                                    
                                    <?php 
                                    $k=1;
$the_query = new WP_Query( array('post_type' => 'partners','tax_query' => array(array ('taxonomy' => 'list_partners','field' => 'slug','terms' => $term->slug))));

                    while ( $the_query->have_posts() ) : $the_query->the_post();

$portfolio_heading_text = get_post_meta(get_the_ID(),'portfolio_heading_text', true);
$portfolio_url= get_post_meta(get_the_ID(),'portfolio_url', true);
                                    ?>
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="<?php echo $termname?>_<?php echo $k?>">
                                            <img src="" alt="Logo Goes here"/>
                                            <a href="#" class="gray-box-read"><span>Read More <i class="icon icon-down-arrow down-arrow"></i></span></a>
                                        </div>
                                        <div class="current-opening-disc container" data-code="<?php echo $termname?>_<?php echo $k?>">
                                            <h3><?php the_title();?></h3>
                                            <div class="opening-details">
                                                <p><?php the_content();?></p>
                                                <a href="#" class="green-arrow learn-more">Visit Website <i class="on-hover-arrow-left"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $k++; endwhile;?>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <?php }?>
                 </div>
             <?php $j++;}?>   
      
        </div>

        <div class="stats-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 work-inner-block">
                        <div class="row our-solution-stats hidden-sm hidden-md hidden-lg">
                            <div class="col-sm-7">
                                <div class="our-solution-wrap">
                                    <div class="our-solution-box">
                                        <h3 class="dg-header-2 sub-section-title on-hover-title-color">Our Solutions <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                        </h3>
                                        <p class="dg-header-5 on-hover-title-color">We engage withand empower rural communities to produce participatory localized videos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- for-Desktop-size-count-globel-impact-stat -->
                        <div class="custom-class-slideshow stats-slider-wrap">
                            <div class="stats-values stat-slider">
                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-1">80%</h1>
                                    <h4 class="dg-header-5">Global impact stat</h4>
                                </div>
                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-2">270,000</h1>
                                    <h4 class="dg-header-5">Global impact stat</h4>
                                </div>
                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-2">1 Million</h1>
                                    <h4 class="dg-header-5">Global impact stat</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="stats-right">
                            <div class="our-solution-stats hidden-xs">
                                <div class="row full-row">
                                    <div class="col-sm-7 full-col">
                                        <div class="our-solution-wrap">
                                            <div class="our-solution-box">
                                                <h3 class="dg-header-2 sub-section-title on-hover-title-color">Our Solutions <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 on-hover-title-color">We engage withand empower rural communities to produce participatory localized videos.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 full-col solution-img-wrap">
                                        <div class="our-solution-img">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-2.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row work-block clearfix">
                                <div class="work-inner-block col-sm-5  green-squre-box-title">
                                    <a href="<?php echo esc_url(site_url()); ?>/careers" class="green-squre-box">
                                       <h2 class="dg-header-2"><span class="green-arrow">Work <br> With Us<i class="on-hover-arrow-left on-hover-big-aerrow-left""></i></span></h2>
                                    </a>
                                </div>
                                <div class="work-inner-block col-sm-7 hidden-xs">
                                    <div class="blog-post-img-box">
                                        <div class="blog-post-img-text">
                                            <h4 class="dg-header-4 text-white">Title of the blog post goes hear</h4>
                                               <a href="#" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
 
<?php get_footer(); ?>

 
       <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
        <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.min.js"></script>
        <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>