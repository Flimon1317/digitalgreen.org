<?php /* Template name: Donate  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('donate'); ?>

 <!-- Banner Section -->
            
        <div class="banner-section">
            <div class="banner-img"><img src="<?php echo ot_get_option('donate_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('donate_banner_title'); ?></h1>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                            <?php echo ot_get_option('donate_banner_desc'); ?>
                        </h5>
                        <a href="<?php echo ot_get_option('donate_banner_link'); ?>">
                            <button class="green-bordered-button with-bottom-cut btn-donate">Donate</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
                <h5 class="dg-header-5 banner-details">
                    <?php echo ot_get_option('donate_banner_desc'); ?>
                </h5>
            </div>

<?php  get_footer(); ?>
 