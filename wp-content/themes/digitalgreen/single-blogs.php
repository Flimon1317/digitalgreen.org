 <?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('globalimpact'); ?>
</header>

<?php $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true); ?>
<?php $blogs_by = get_post_meta(get_the_ID(),'blogs_by', true); ?>
<?php $blogs_blog_image = get_post_meta(get_the_ID(),'blogs_blog_image', true); ?>
<?php $blogs_description= get_post_meta(get_the_ID(),'blogs_description', true); ?>
 <div class="banner-section news-banner">
 <?php while ( have_posts() ) : the_post(); ?>

        <div class="container">
            <div class="row">
                <div class="news-single text-center">
                    <span class="tag-text">Project that matter</span>
                    <h1 class="dg-header-2 banner-title"><?php the_title(); ?></h1>
                    <span class="author-name">By: <?php echo $blogs_by; ?></span>
                    <div class="share-section">
                        <span class="text-share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This</span>
                        <ul class="social-icon-share clearfix">
                            <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon icon-linkedin"></i></a></li>
                            <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="banner-img blog-banner">
                    <figure>
                        <img src="<?php echo $blogs_blog_image; ?>" alt="blogs"/>
                        
                    </figure>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php  the_content(); ?>
                </div>
            </div>
        </div>
<?php endwhile; ?>
    <div class="gray-boxes-container section-margin">
        <div class="container news-container">
             <div class="title-header news-title-header text-left">
                <h1 class="dg-header-1 main-section-title ">Related blogs
                    <span class="half-squre-before-title"></span>
                </h1>
            </div>
            <div class="row">
                
<?php 

$terms = get_terms("list_blogs",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        $the_query = new WP_query(array( 'post_type=blogs&posts_per_page=4','tax_query' => array(array ('taxonomy' => 'list_blogs','field' => 'slug','terms' => $term->slug))));
        
        if ($the_query->have_posts()) {
           $i=1;
           while ( $the_query->have_posts() && $i < 4 ) : $the_query->the_post();
          $blogs_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $blogs_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                    ?>

                <div class="news-list  purple-cat">
                    <a href="<?php the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'blogs image')); ?>
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
<?php $i++;
          endwhile; 
        }
        wp_reset_query();
    }
        ?> 

                
           </div>
        </div>
    </div>

     <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
     
    <?php get_footer(); ?>
    
    