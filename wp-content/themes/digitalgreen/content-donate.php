<?php /* Template name: Donate  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$title = "Donate"; 
include 'header-globalimpact.php'; ?>
</header>

 <!-- Banner Section -->
            
        <div class="banner-section">
            <div class="banner-img"><img src="<?php echo get_field('donate_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('donate_banner_heading'); ?></h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo get_field('donate_banner_description'); ?>
                        </h5>
                        <a href="<?php echo get_field('donate_banner_link'); ?>" target="_blank">
                            <button class="green-bordered-button with-bottom-cut btn-donate">Donate</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                <h5 class="dg-header-5 banner-details">
                    <?php echo get_field('donate_banner_description'); ?>
                </h5>
            </div>


        <div class="donate-sec">
            <div class="container">
                <div class="row">
                    
                    <div class="section-header">
                        <div class="lower-desc--header">
                            <h5 class="dg-header-5 banner-details hidden-xs"><?php echo get_field('donate_banner_lower_desc'); ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="section-header">
                        <div class="lower-desc--header">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>  

<?php  get_footer('donate'); ?>
 