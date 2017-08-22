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
       
  </header>     
       <!-- Banner Section -->
        <div class="banner-section">
            <div class="banner-img"><img src="<?php echo ot_get_option('careers_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('careers_banner_title'); ?></h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                             <?php echo ot_get_option('careers_banner_desc'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
              <?php echo ot_get_option('careers_banner_desc'); ?>
            </h5>
        </div>
        <div class="container section-margin gray-box-tabbing-sec">
            <div class="row">
                <div class="title-header">
                    <h1 class="dg-header-1 main-section-title ">Current Openings
                        <span class="half-squre-before-title"></span>
                    </h1>
                </div>
                <?php
        $terms = get_terms("list_careers",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
                <div class="gray-box-tabbing work-gray-box-tabbing" id="<?php echo $term->name; ?>">
                    <div class="country-with-opening">
                        <h2><?php echo $term->name; ?></h2>
                        <div class="custom-class-slideshow">

                            <div class="gray-box-row work-with-cards-wrap">
                                <div class="gray-box row">
                                
                  <?php $j=1;
 $the_query = new WP_Query( array('post_type' => 'careers','tax_query' => array(array ('taxonomy' => 'list_careers','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $job_description = get_post_meta(get_the_ID(),'job_description', true);
          $job_location = get_post_meta(get_the_ID(),'job_location', true);
          $job_key_responsibilities = get_post_meta(get_the_ID(),'job_key_responsibilities', true);
          $job_source = get_post_meta(get_the_ID(),'job_source', true);

        ?>               
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="<?php echo $termname; ?><?php echo $j; ?>">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4"><?php the_title(); ?></h4>
                                                <span><?php echo $job_location; ?></span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="<?php echo $termname; ?><?php echo $j; ?>">
                                            <h3>Name of partner goes here</h3>
                                            <div class="opening-details">
                                                 <?php the_content(); ?>
                                                
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>

                                        </div>
                                    </div>
                                      <?php $j++; endwhile; ?>
                                 <!--   <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="code2">
                                        <div class="work-with-cards">
                                            <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                            <span>San Francisco, California, USA.</span>
                                        </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="code2">
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                
                            </div>
                        </div>
                    </div> 
                </div>
                            
<?php $i++; } ?>  
           <!--       <div class="gray-box-tabbing work-gray-box-tabbing" id="india">
                    <div class="country-with-opening">
                        <h2>India</h2>
                        <div class="custom-class-slideshow">

                            <div class="gray-box-row work-with-cards-wrap">
                                <div class="gray-box row">
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="code3">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                                <span>San Francisco, California, USA.</span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="code3">
                                            <h3>Name of partner goes here</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                                                <h4 class="dg-header-4">Education Qualification</h4>
                                                <ul class="opening-details-points">
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique</li>
                                                </ul>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="code4">
                                        <div class="work-with-cards">
                                            <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                            <span>San Francisco, California, USA.</span>
                                        </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="code4">
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> -->

               <!-- <div class="gray-box-tabbing work-gray-box-tabbing" id="ethiopia">
                    <div class="country-with-opening">
                        <h2>Ethiopia</h2>
                        <div class="custom-class-slideshow">
                            <div class="gray-box-row work-with-cards-wrap">
                                <div class="gray-box row">
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="ethiopia1">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                                <span>San Francisco, California, USA.</span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="ethiopia1">
                                            <h3>Lorem ipsum dolor sit amet</h3>
                                            <div class="opening-details">
                                                <p>Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="ethiopia2">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                                <span>San Francisco, California, USA.</span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="ethiopia2">
                                            <h3>Name of partner goes here</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="ethiopia3">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                                <span>San Francisco, California, USA.</span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="ethiopia3">
                                            <h3>Name of partner goes here</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray-box-wrap">
                                        <div class="gray-box-title" data-code="ethiopia4">
                                            <div class="work-with-cards">
                                                <h4 class="dg-header-4">Senior Program Manager - Monitoring, Evaluation and Learning</h4>
                                                <span>San Francisco, California, USA.</span>
                                            </div>
                                        </div>
                                        <div class="current-opening-disc container" data-code="ethiopia4">
                                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                            <div class="opening-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus.</p>
                                                <a href="#" class="learn-more green-bordered-button">Apply Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> -->
 
               <!-- <div class="opening-discription">
                    <div class="current-opening-disc" data-code="code5">
                        <h3>Senior Program Manager - Monitoring, Evaluation and Learning.</h3>
                        <div class="opening-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                        </div>
                        <div class="opening-keys">
                            <div class="opening-key-block opening-block">
                                <h4>Key Responsibilities</h4>
                                <ul class="opening-inner-block">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                            <div class="opening-key-block opening-block">
                                <h4>Qualification and Skills</h4>
                                <ul class="opening-inner-block">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                             <div class="opening-details opening-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="current-opening-disc" data-code="code6">
                        <h3>Senior Program Manager - Monitoring, Evaluation and Learning.</h3>
                        <div class="opening-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                        </div>
                        <div class="opening-keys">
                            <div class="opening-key-block opening-block">
                                <h4>Key Responsibilities</h4>
                                <ul class="opening-inner-block">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                            <div class="opening-key-block opening-block">
                                <h4>Qualification and Skills</h4>
                                <ul class="opening-inner-block">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                             <div class="opening-details opening-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur, ex sit amet auctor tristique, eros libero eleifend mi, ac sollicitudin nulla turpis ut mauris. Sed imperdiet nibh ac sollicitudin venenatis. Cras tincidunt sem eu leo aliquam, eget suscipit sem interdum. Suspendisse potenti. Aenean ac lacinia ex, at euismod erat. Donec nec eros id arcu convallis convallis sed nec mi. Nulla ac molestie lacus. Vestibulum pulvinar ornare felis ut hendrerit. Maecenas condimentum, lectus id tempus lacinia, mi sem condimentum nunc, nec lobortis tortor justo quis neque. Vestibulum tempor, nulla in bibendum iaculis, eros leo pulvinar tellus, nec ultricies tortor risus et lacus. Nullam a magna quam. Aliquam erat volutpat. In ac diam id erat efficitur dignissim.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>  
        </div>
        <div class="our-team-wrap clearfix section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 team-head-left">
                        <div class="title-header">
                            <h2 class="dg-header-1 main-section-title "><?php echo ot_get_option('careers_offer_title'); ?>
                                <span class="half-squre-before-title"></span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1 team-head-right">
                        <P><?php echo ot_get_option('careers_offer_desc'); ?></P>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="project-block">
            <div class="container">
                <div class="row">
                    <div class="single-img-container">
                        <div class="col-md-6 right-block">
                            <div class="img-right-part">
                                <div class="image-green-shadow">
                                    <img src="<?php echo ot_get_option('careers_community_image'); ?>" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 left-block">
                            <div class="row img-details">
                                <div class="single-img">
                                    <div class="side-gray-border">
                                        <span class="tag-text">Project that matter</span>
                                        <h3 class="dg-header-2 sub-section-title"><?php echo ot_get_option('careers_community_title'); ?>
                                            <span class="half-squre-before-title"></span>
                                        </h3>
                                        <div class="single-img-content">
                                            <p class="dg-header-5 text-details"><?php echo ot_get_option('careers_community_desc'); ?>
                                            </p>
                                        </div>
                                        <a href="<?php echo ot_get_option('careers_community_link'); ?>" class="green-bordered-button learn-more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
            <div class="team-section section-margin">
                <div class="container">
                    <div class="text-center section-title">
                        <h2><?php echo ot_get_option('careers_team_heading'); ?></h2>
                        <span class="sub-title"><?php echo ot_get_option('careers_team_desc'); ?></span>
                    </div>
                    <div class="custom-class-slideshow">
                        <div class="row team-slider clearfix">
                        <?php
      if (function_exists('get_option_tree')){
        $careers_team_team = ot_get_option( 'careers_team_team', array() );
        if ( ! empty( $careers_team_team ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $careers_team_team as $section ) {
      ?>
                            <div class="col-sm-6">
                                <div class="team-blocks clearfix">
                                    <div class="team-pic col-sm-5"> 
                                        <img src="<?php echo $section['team_image']; ?>" alt=""/>
                                    </div>
                                    <div class="team-block-cont col-sm-7">
                                        <h3><?php echo $section['title']; ?></h3>
                                        <p><?php echo $section['team_description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } } } ?>
                            
                        <!--    <div class="col-sm-6">
                                <div class="team-blocks clearfix">
                                    <div class="team-pic col-sm-5">
                                        <img src="images/img-team-block.jpg" alt=""/>
                                    </div>
                                    <div class="team-block-cont col-sm-7">
                                        <h3>Team title goes here</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="team-blocks clearfix">
                                    <div class="team-pic col-sm-5">
                                        <img src="images/img-team-block.jpg" alt=""/>
                                    </div>
                                    <div class="team-block-cont col-sm-7">
                                        <h3>Team title goes here</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="team-blocks clearfix">
                                    <div class="team-pic col-sm-5">
                                        <img src="images/img-team-block.jpg" alt=""/>
                                    </div>
                                    <div class="team-block-cont col-sm-7">
                                        <h3>Team title goes here</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique nisi ut congue vehicula.Lorem ipsum dolor sit</p>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
                <div class="stats-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="stats-right">
                            <div class="our-solution-stats">
                                <div class="row full-row clearfix">
                                    <div class="full-col col-sm-7">
                                        <div class="our-solution-wrap">
                                            <div class="our-solution-box">
                                                <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('careers_solution_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                                </h3>
                                                <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('careers_solution_desc'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="full-col col-sm-5 solution-img-wrap hidden-xs">
                                        <div class="our-solution-img">
                                            <img src="<?php echo ot_get_option('careers_solution_image'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php 

$blog_id=ot_get_option('careers_solution_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>

                            <div class="work-block row clearfix">
                                <div class="work-inner-block col-sm-7 hidden-sm hidden-xs">
                                    <div class="blog-post-img-box" style="background: url(<?php echo $blog_image; ?>) 0 0 no-repeat;">
                                        <div class="blog-post-img-text">
                                            <h4 class="dg-header-4 text-white"><?php echo $blog_title; ?></h4>
                                               <a href="<?php echo $blog_permalink; ?>" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-inner-block col-md-5  green-squre-box-title">
                                    <a href="<?php echo esc_url(site_url()); ?>/careers" class="green-squre-box">
                                       <h2 class="dg-header-2"><span class="green-arrow">Work <br> With Us<i class="on-hover-arrow-left on-hover-big-aerrow-left""></i></span></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-class-slideshow stats-slider-wrap">
                            <div class="stats-values stat-slider">
 <?php
      if (function_exists('get_option_tree')){
        $careers_solution_values = ot_get_option( 'careers_solution_values', array() );
        if ( ! empty( $careers_solution_values ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $careers_solution_values as $section ) {
            
      ?>

                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-1"><?php echo $section['careers_solution_value']; ?></h1>
                                    <h4 class="dg-header-5"><?php echo $section['careers_solution_text']; ?></h4>
                                </div>
<?php } } } ?>

                               <!-- <div class="count-global-stat text-center">
                                    <h1 class="dg-header-2">270,000</h1>
                                    <h4 class="dg-header-5">Global impact stat</h4>
                                </div>
                                <div class="count-global-stat text-center">
                                    <h1 class="dg-header-2">1 Million</h1>
                                    <h4 class="dg-header-5">Global impact stat</h4>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
    
    <?php get_footer(); ?>
    
       
    
    
