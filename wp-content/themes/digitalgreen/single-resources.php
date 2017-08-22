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

<?php $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true); ?>
<?php $resources_by = get_post_meta(get_the_ID(),'resources_by', true); ?>
<?php $resources_blog_image = get_post_meta(get_the_ID(),'resources_blog_image', true); ?>
<?php $resources_description= get_post_meta(get_the_ID(),'resources_description', true); ?>

 <div class="banner-section news-banner">
        <div class="container">
            <div class="row">
                <div class="news-single text-center">
                    <span class="tag-text">Project that matter</span>
                    <h1 class="dg-header-2 banner-title"><?php the_title(); ?></h1>
                    <span class="author-name">By: <?php echo $resources_by; ?></span>
                    <div class="share-section">
                        <span class="text-share"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This</span>
                        <ul class="social-icon-share clearfix">
                            <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="banner-img">
                    <figure>
                        <img src="<?php echo $resources_blog_image; ?>" alt="resources"/>
                        
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="news-page-content page-content">
        <div class="container">
        <?php echo $resources_description; ?>
         <!--   <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet. Vivamus elementum nulla elit, in interdum leo imperdiet eu. Duis odio elit, laoreet eget ligula ac, vehicula vehicula turpis. Pellentesque tincidunt nisl non nunc venenatis luctus. Vestibulum vestibulum tellus orci, id venenatis elit fermentum ut. Nullam euismod magna nec purus tristique, non ultricies ex auctor.</p>
                <p>Etiam sit amet sollicitudin turpis, quis varius quam. Nulla dui quam, ultricies vel metus blandit, lacinia finibus felis. Duis sed risus blandit, laoreet tortor egestas, cursus mauris. Suspendisse finibus lacus quis dolor pulvinar, sit amet ullamcorper orci lobortis. Cras auctor risus et arcu faucibus, vitae ullamcorper velit tempor. Sed ac lorem dolor. In tincidunt gravida lorem, mollis rhoncus felis sagittis sed. Praesent eu tellus volutpat odio congue aliquet. Pellentesque ut faucibus nulla.</p>
                <p>Curabitur fermentum ornare lacinia. Vivamus nisl purus, venenatis eu bibendum sed, maximus vel sapien. Aenean interdum pharetra libero, quis eleifend purus venenatis ac. Suspendisse vel dignissim mi, et tempor lacus. Suspendisse viverra porta laoreet. Nam varius tellus et ex sollicitudin, ac faucibus nisi ullamcorper.</p>
                <h3>Heading Goes here</h3>
                <p>Phasellus malesuada nisl vel mauris placerat sagittis. Donec tempor nisl ante, nec finibus tellus vestibulum a. Nulla volutpat orci et ex ullamcorper, ac elementum mauris vehicula. Nam a gravida turpis, eget ultricies nisi. Curabitur eu diam justo. Curabitur in est efficitur, bibendum nisi ut, varius sapien. In turpis ipsum, dignissim nec turpis at, mattis rutrum sapien. Nulla quis enim ac nibh vulputate ornare. Nullam tincidunt nec mauris vitae suscipit.</p>
                <figure class="pull-left">
                    <img src="images/news-single-img.jpg" alt="news"/>
                    <figcaption class="img-caption">Optional caption for image goes here can break on to two lines</figcaption>
                </figure>
                <p> Nulla eros sem, varius ut turpis non, sollicitudin gravida nibh. Vivamus ultrices in metus eget laoreet. Praesent tempor tellus a efficitur volutpat. Morbi eu massa at orci mollis tempus.</p>
                <p>Donec risus velit, tempor ac condimentum at, volutpat vitae odio. Vestibulum rhoncus vestibulum neque vitae euismod. Pellentesque eget dictum ligula. Fusce at ex laoreet, efficitur erat ut, posuere tortor. Nulla hendrerit tellus nec tortor gravida, vel varius ligula ornare. Maecenas a congue enim, nec feugiat tortor. Nullam purus neque, vehicula non tortor sed, ultricies blandit enim. Quisque tincidunt porta tellus, non tristique nisl pellentesque nec. In mollis maximus vehicula. Nullam neque diam, rutrum quis sagittis ac, volutpat ac ipsum. Morbi sit amet viverra ante. Morbi varius metus nec lorem ornare mollis. Sed sodales mauris eget lacus feugiat, eget imperdiet ante maximus.</p>
                <br/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet. Vivamus elementum nulla elit, in interdum leo imperdiet eu. Duis odio elit, laoreet eget ligula ac, vehicula vehicula turpis. Pellentesque tincidunt nisl non nunc venenatis luctus. Vestibulum vestibulum tellus orci, id venenatis elit fermentum ut. Nullam euismod magna nec purus tristique, non ultricies ex auctor.</p>
                <p>Etiam sit amet sollicitudin turpis, quis varius quam. Nulla dui quam, ultricies vel metus blandit, lacinia finibus felis. Duis sed risus blandit, laoreet tortor egestas, cursus mauris. Suspendisse finibus lacus quis dolor pulvinar, sit amet ullamcorper orci lobortis. Cras auctor risus et arcu faucibus, vitae ullamcorper velit tempor. Sed ac lorem dolor. In tincidunt gravida lorem, mollis rhoncus felis sagittis sed. Praesent eu tellus volutpat odio congue aliquet. Pellentesque ut faucibus nulla.</p>
                <div class="video">
                    <img src="images/video-img.jpeg" alt="video"/>
                    <a href="#" class="watch-link" tabindex="0"><span><i class="fa fa-chevron-right"></i></span> Watch This Video</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet. Vivamus elementum nulla elit, in interdum leo imperdiet eu. Duis odio elit, laoreet eget ligula ac, vehicula vehicula turpis. Pellentesque tincidunt nisl non nunc venenatis luctus. Vestibulum vestibulum tellus orci, id venenatis elit fermentum ut. Nullam euismod magna nec purus tristique, non ultricies ex auctor.</p>
                <p>Etiam sit amet sollicitudin turpis, quis varius quam. Nulla dui quam, ultricies vel metus blandit, lacinia finibus felis. Duis sed risus blandit, laoreet tortor egestas, cursus mauris. Suspendisse finibus lacus quis dolor pulvinar, sit amet ullamcorper orci lobortis. Cras auctor risus et arcu faucibus, vitae ullamcorper velit tempor. Sed ac lorem dolor. In tincidunt gravida lorem, mollis rhoncus felis sagittis sed. Praesent eu tellus volutpat odio congue aliquet. Pellentesque ut faucibus nulla.</p>
            </div>
        </div>
        <div class="full-banner">
            <img src="images/img-full-banner.jpeg" alt="banner"/>
            <div class="full-banner-cont">
                <div class="full-banner-inner">
                    <h2 class="dg-header-1">Heading Goes Here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet.</p>
                    <a href="#" class="green-bordered-button learn-more">Learn More</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet. Vivamus elementum nulla elit, in interdum leo imperdiet eu. Duis odio elit, laoreet eget ligula ac, vehicula vehicula turpis. Pellentesque tincidunt nisl non nunc venenatis luctus. Vestibulum vestibulum tellus orci, id venenatis elit fermentum ut. Nullam euismod magna nec purus tristique, non ultricies ex auctor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet.</p>
                <p>Etiam sit amet sollicitudin turpis, quis varius quam. Nulla dui quam, ultricies vel metus blandit, lacinia finibus felis. Duis sed risus blandit, laoreet tortor egestas, cursus mauris. Suspendisse finibus lacus quis dolor pulvinar, sit amet ullamcorper orci lobortis. Cras auctor risus et arcu faucibus, vitae ullamcorper velit tempor. Sed ac lorem dolor. In tincidunt gravida lorem, mollis rhoncus felis sagittis sed. Praesent eu tellus volutpat odio congue aliquet. Pellentesque ut faucibus nulla.</p>
                <div class="news-images clearfix">
                    <div class="col-sm-7">
                        <figure>
                            <img src="images/news1.jpg" alt="news1"/>
                            <figcaption class="img-caption">Optional caption for image goes here can break on to two lines</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-5">
                        <figure>
                            <img src="images/news2.jpg" alt="news2"/>
                            <figcaption class="img-caption">Optional caption for image goes here can break on to two lines</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-5">
                         <figure>
                            <img src="images/news2.jpg" alt="news2"/>
                            <figcaption class="img-caption">Optional caption for image goes here can break on to two lines</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-7">
                        <figure>
                            <img src="images/news1.jpg" alt="news1"/>
                            <figcaption class="img-caption">Optional caption for image goes here can break on to two lines</figcaption>
                        </figure>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet. Vivamus elementum nulla elit, in interdum leo imperdiet eu. Duis odio elit, laoreet eget ligula ac, vehicula vehicula turpis. Pellentesque tincidunt nisl non nunc venenatis luctus. Vestibulum vestibulum tellus orci, id venenatis elit fermentum ut. Nullam euismod magna nec purus tristique, non ultricies ex auctor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam risus felis, varius vel sollicitudin vitae, tincidunt et sapien. Fusce tincidunt orci eget neque malesuada, nec molestie enim laoreet.</p>
                <p>Etiam sit amet sollicitudin turpis, quis varius quam. Nulla dui quam, ultricies vel metus blandit, lacinia finibus felis. Duis sed risus blandit, laoreet tortor egestas, cursus mauris. Suspendisse finibus lacus quis dolor pulvinar, sit amet ullamcorper orci lobortis. Cras auctor risus et arcu faucibus, vitae ullamcorper velit tempor. Sed ac lorem dolor. In tincidunt gravida lorem, mollis rhoncus felis sagittis sed. Praesent eu tellus volutpat odio congue aliquet. Pellentesque ut faucibus nulla.</p>
            </div>-->
        </div>
    </div>
    <div class="gray-boxes-container section-margin">
        <div class="container news-container">
             <div class="title-header news-title-header text-left">
                <h1 class="dg-header-1 main-section-title ">Related resources
                    <span class="half-squre-before-title"></span>
                </h1>
            </div>
            <div class="row">
                
<?php 

$terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        $the_query = new WP_query(array( 'post_type=resources&posts_per_page=4','tax_query' => array(array ('taxonomy' => 'list_resources','field' => 'slug','terms' => $term->slug))));
        
        if ($the_query->have_posts()) {
           $i=1;
           while ( $the_query->have_posts() && $i < 3 ) : $the_query->the_post();
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $resources_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );
                    ?>

                <div class="news-list  purple-cat">
                    <a href="<?php the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'resources image')); ?>
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
    
    