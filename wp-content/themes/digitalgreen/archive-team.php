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
            <div class="banner-img"><img src="<?php echo ot_get_option('team_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('team_banner_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="our-team-section">
            <div class="container">
                <div class="row">
                    <div class="our-team-wrap clearfix section-margin">
                        <div class="col-sm-5 team-head-left">
                            <div class="title-header">
                                <h2 class="dg-header-3 main-section-title "><?php echo ot_get_option('team_about_title'); ?>
                                    <span class="half-squre-before-title"></span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1 team-head-right">
                            <P><?php echo ot_get_option('team_about_desc'); ?></P>
                        </div>
                    </div>
                    <div class="our-team-list section-margin">
                        <div class="col-md-3 hidden-xs">
                            <ul class="filter-tab row">
                             <?php
        
                $terms = get_terms("list_team",array( 'parent' => 0 ));
                $i=1;
                foreach ( $terms as $term ) { 
                $termname = strtolower($term->name);
                $termname = str_replace(' ', '-', $termname);
                $children = get_terms( "list_team", array('parent' => $term->term_id));
                
                    ?>
                                <li class="main-tab">
                                
                                    <div class="main-tab-txt <?php if($i==1) echo 'active-tab'; ?>"><?php echo $term->name; ?></div>
                                    <ul class="sub-tab-list">
                                        <?php if($term->name=='Team') echo '<li><a href="#" data-index="1" class="active-link" >Executive Leadership</a></li>'; ?>
                                     <?php if($term->name=='Board') echo '<li><a href="#" data-index="2" >Executive Leadership</a></li>'; ?>
                                        <li>
                                        <?php

                    foreach ( $children as $child ) {
                        $termname = strtolower($child->name);
                        $termname = str_replace(' ', '-', $termname);
                        $childrens = get_terms( "list_team", array('parent' => $child->term_id));

                        ?> 
                                            <div class="tab-acc "><?php echo $child->name; ?></div>
                                            
                    
                                            <ul class="child-sub-list sub-tab-list">
                                            <?php
                                            $j=1;
                    foreach ( $childrens as $child1 ) {
                        $termname = strtolower($child1->name);
                        $termname = str_replace(' ', '-', $termname);
                        

                        ?> 
                                                <li><a href="#" data-index="<?php echo $child1->description; ?><?php echo $j; ?>"><?php echo $child1->name; ?></a></li>
                                                <?php $j=$j+1;
                    }
                    ?>
                                            </ul>
                                            <?php $i++; } ?>
                                        </li>
                                         
                                    </ul>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            <div class="row filter-details" data-index="1">
                                <div class="main-tab-txt active-tab hidden-sm hidden-md hidden-lg">Executive Leadership</div>
                                <div class="team-list">
                                  <?php
      if (function_exists('get_option_tree')){
        $team_team = ot_get_option( 'team_team', array() );
        if ( ! empty( $team_team ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $team_team as $section ) {
      ?>
                                
                                <div class="team-member clearfix" id="<?php echo 'team'; ?><?php echo $i; ?>">
                                        <div class="member-img-wrap">
                                            <div class="image-green-shadow member-img">
                                                <img src="<?php echo $section['team_image']; ?>" alt="Rikin Gandhi"/>
                                            </div>
                                        </div>
                                        <div class="member-details">
                                            <h2><a href="#"><?php echo $section['title']; ?></a></h2>
                                            <span class="member-designation"><?php echo $section['team_designation']; ?></span>
                                            <div class="member-intro">
                                                <div class="member-content">
                                                <p><?php echo $section['short_team_desc']; ?> </p>
                                                </div>
                                        
                                            <a href="#" class="link-read read-load-link">Read More <span class="icon icon-down-arrow"></span></a>
                                       </div> 
                                    </div>
                                </div>
                                    <?php $i++; } } } ?>
                                </div>
                            </div>
<div class="filter-details" data-index="2">
                                <div class="main-tab-txt active-tab hidden-sm hidden-md hidden-lg">Executive Leadership</div>
                                <div class="team-list">
                                  <?php
      if (function_exists('get_option_tree')){
        $team_board = ot_get_option( 'team_board', array() );
        if ( ! empty( $team_board ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $team_board as $section ) {
      ?>
                                
                                    <div class="team-member clearfix" id="<?php echo 'team'; ?><?php echo $i; ?>">
                                        <div class="member-img-wrap">
                                            <div class="image-green-shadow member-img">
                                                <img src="<?php echo $section['team_board_image']; ?>" alt="Rikin Gandhi"/>
                                            </div>
                                        </div>
                                        <div class="member-details">
                                            <h2><a href="#"><?php echo $section['title']; ?></a></h2>
                                            <span class="member-designation"><?php echo $section['team_board_designation']; ?></span>
                                            <div class="member-intro">
                                                <div class="member-content"><p><?php echo $section['team_board_desc']; ?> </p></div>
                                                <a href="#" class="link-read read-load-link">Read More <span class="icon icon-down-arrow"></span></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php } } } ?>
                                </div>
                            </div>

                            
 <?php
                $terms = get_terms("list_team",array( 'parent' => 0 ));
                foreach ( $terms as $term ) { 
                $termname = strtolower($term->name);
                $termname = str_replace(' ', '-', $termname);
                $children = get_terms( "list_team", array('parent' => $term->term_id));
                

                foreach ( $children as $child ) {
                        $termname = strtolower($child->name);
                        $termname = str_replace(' ', '-', $termname);
                        $childrens = get_terms( "list_team", array('parent' => $child->term_id));
                        $j=1;
                        foreach ( $childrens as $child1 ) {
                        $termname = strtolower($child1->name);
                        $termname = str_replace(' ', '-', $termname);
                        $the_query = new WP_Query( array('post_type' => 'team','tax_query' => array(array ('taxonomy' => 'list_team','field' => 'slug','terms' => $child1->slug))));
                        ?>
                       
                            <div class="filter-details" data-index="<?php echo $child1->description; ?><?php echo $j; ?>">
                                <div class="main-tab-txt hidden-sm hidden-md hidden-lg"><?php echo $child1->name; ?></div>
 <?php
                        while ( $the_query->have_posts() ) : $the_query->the_post();
 $team_image = get_post_meta(get_the_ID(),'team_image', true);
 $team_desc= get_post_meta(get_the_ID(),'team_desc', true); 
  $team_tech_team = get_post_meta(get_the_ID(),'team_tech_team',array()); 
  $team_program_team = get_post_meta(get_the_ID(),'team_program_team',array()); 
  $team_admin_team = get_post_meta(get_the_ID(),'team_admin_team',array()); 
?>


                                <div class="team-list">
                                    <h2 class="dg-header-1 main-section-title "><?php the_title(); ?>
                                    <span class="half-squre-before-title hidden-xs"></span>
                                    </h2>
                                    <div class="team-content">
                                        <p><?php the_content(); ?></p>
                                        <div class="team-img"><img src="<?php echo $team_image; ?>" alt="Team Ethiopia"/></div>
                                    </div>
                                    <?php           if (isset($team_program_team)){ ?>
                                    <div class="teams-section">
                                    <?php

 $temp_i=1;foreach($team_program_team[0] as $key => $value){

if($temp_i==1) { ?>
                                        <h2 class="dg-header-2 main-section-title">Program Team</h2>
                                        
<?php } $temp_i++; ?>

                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title"><?php echo $value['title'];?></h3>
                                                <span class="designation"><?php echo $value['team_designation'];?></span>
                                            </div>
<?php } ?>

                                           <!-- <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div> -->
                                        
                                    </div>
                                    <?php } ?>
                                    <?php           if (isset($team_tech_team)){ ?>
                                    <div class="teams-section clearfix">
                                       
                                        
<?php

 $temp_i=1;foreach($team_tech_team[0] as $key => $value){

if($temp_i==1) {  ?>

                                      <h2 class="dg-header-2 main-section-title">Technology Team</h2>
<?php } $temp_i++; ?>


                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title"><?php echo $value['title'];?></h3>
                                                <span class="designation"><?php echo $value['team_designation'];?></span>
                                            </div>
<?php } ?>

                                          <!--  <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div> -->
                                        
                                    </div> 
                                    <?php } ?>
                                    <?php           if (isset($team_admin_team)){ ?>
                                     <div class="teams-section clearfix">
<?php

 $temp_i=1;foreach($team_admin_team[0] as $key => $value){

if ($temp_i==1) { ?>

                                        <h2 class="dg-header-2 main-section-title">Admin/Finance/HR Team</h2>
                                       
<?php } $temp_i++; ?>

                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title"><?php echo $value['title'];?></h3>
                                                <span class="designation"><?php echo $value['team_designation'];?></span>
                                            </div>
<?php } ?>

                                           <!-- <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div> -->
                                        
                                    </div>
                                    <?php } ?>
                                </div>
<?php
                        endwhile;
                        ?>

                            </div>
                            

<?php $j=$j+1; } } } ?>
                          <!--  <div class="filter-details" data-index="3">
                                <div class="main-tab-txt hidden-sm hidden-md hidden-lg">Ethiopia</div>
                                <div class="team-list">
                                    <h2 class="dg-header-1 main-section-title ">Ethiopia
                                    <span class="half-squre-before-title hidden-xs"></span>
                                    </h2>
                                    <div class="team-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ipsum magna, eleifend quis ultricies ac, faucibus quis enim. Duis cursus magna sit amet ante dictum rhoncus. Nulla non dolor id enim ultrices vehicula ut non tellus. Integer rutrum dolor eu lorem hendrerit, sit amet malesuada nulla interdum. Praesent fringilla at velit id rhoncus. Suspendisse et blandit ipsum. Phasellus orci tortor, vestibulum sed risus sit amet, egestas varius orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ipsum magna, eleifend quis ultricies ac, faucibus quis enim. Duis cursus magna sit amet ante dictum rhoncus. Nulla non dolor id enim ultrices vehicula ut non tellus. Integer rutrum dolor eu lorem hendrerit, sit amet malesuada nulla interdum. Praesent fringilla at velit id rhoncus. Suspendisse et blandit ipsum. Phasellus orci tortor, vestibulum sed risus sit amet, egestas varius orci.</p>
                                        <div class="team-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-team.jpg" alt="Team Ethiopia"/></div>
                                    </div>
                                    <div class="teams-section">
                                        <h2 class="dg-header-2 main-section-title">Program Team</h2>
                                        <div class="list-diff-team clearfix">
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lakshmi Nyer</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teams-section clearfix">
                                        <h2 class="dg-header-2 main-section-title">Technology Team</h2>
                                        <div class="list-diff-team clearfix">
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lakshmi Nyer</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="teams-section clearfix">
                                        <h2 class="dg-header-2 main-section-title">Admin/Finance/HR Team</h2>
                                        <div class="list-diff-team clearfix">
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lakshmi Nyer</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Chimdo Anchala</h3>
                                                <span class="designation">Project Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Program Manager</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                            <div class="team-block">
                                                <h3 class="dg-header-3 main-section-title">Lorem ipsum dolor</h3>
                                                <span class="designation">Country Director</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="filter-details">
                                <div class="main-tab-txt hidden-sm hidden-md hidden-lg">United state</div>
                            </div>
                            <div class="filter-details">
                                <div class="main-tab-txt hidden-sm hidden-md hidden-lg">Board</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="stats-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 work-inner-block">
                            <div class="row our-solution-stats hidden-md hidden-lg">
                                <div class="col-md-7">
                                    <div class="our-solution-wrap">
                                        <div class="our-solution-box">
                                            <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('team_solution_title'); ?><i class="grey-arrow-right hidden-xs" aria-hidden="true"></i><span class="half-squre-before-title"></span>
                                            </h3>
                                            <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('team_solution_desc'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- for-Desktop-size-count-globel-impact-stat -->
                            <div class="custom-class-slideshow stats-slider-wrap">
                                <div class="stats-values stat-slider">
                                   <?php
      if (function_exists('get_option_tree')){
        $team_solution_values = ot_get_option( 'team_solution_values', array() );
        if ( ! empty( $team_solution_values ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $team_solution_values as $section ) {
            
      ?>

                                    <div class="count-global-stat text-center">
                                        <h1 class="dg-header-1"><?php echo $section['team_solution_value']; ?></h1>
                                        <h4 class="dg-header-5"><?php echo $section['team_solution_text']; ?></h4>
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
                        <div class="col-md-9">
                            <div class="stats-right">
                                <div class="our-solution-stats hidden-sm hidden-xs">
                                    <div class="row full-row">
                                        <div class="col-md-7 full-col">
                                            <div class="our-solution-wrap">
                                                <div class="our-solution-box">
                                                    <h3 class="dg-header-2 sub-section-title on-hover-title-color"><?php echo ot_get_option('team_solution_title'); ?> <i class="grey-arrow-right hidden-xs" aria-hidden="true"></i> <span class="half-squre-before-title"></span>
                                                    </h3>
                                                    <p class="dg-header-5 on-hover-title-color"><?php echo ot_get_option('team_solution_desc'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 full-col solution-img-wrap">
                                            <div class="our-solution-img">
                                                <img src="<?php echo ot_get_option('team_solution_image'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row work-block clearfix">
                                    <div class="work-inner-block col-md-5  green-squre-box-title">
                                        <a href="<?php echo esc_url(site_url()); ?>/careers" class="green-squre-box">
                                           <h2 class="dg-header-2"><span class="green-arrow">Work <br> With Us<i class="on-hover-arrow-left on-hover-big-aerrow-left""></i></span></h2>
                                        </a>
                                    </div>

<?php 

$blog_id=ot_get_option('team_solution_blog');
$auth = get_post($blog_id); // gets author from post
$blog_title = get_the_title($blog_id);

$blog_image = $auth->blogs_blog_image;

$blog_permalink = get_the_permalink($blog_id);


?>


                                    <div class="col-sm-7 work-inner-block hidden-sm hidden-xs">
                                        <div class="blog-post-img-box"  style="background: url(<?php echo $blog_image; ?>) 0 0 no-repeat;"></div>
                                            <div class="blog-post-img-text">
                                                <h4 class="dg-header-4 text-white"><?php echo $blog_title; ?></h4>
                                                <a href="<?php echo $blog_permalink; ?>" class="green-arrow link-read-post">Read This Post<i class="on-hover-arrow-left" aria-hidden="true"></i></a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <a href="#" class="scroll-top hidden-xs"><i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i></a>
     
<?php get_footer('team'); ?>        
