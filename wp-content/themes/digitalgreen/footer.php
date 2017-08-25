<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<footer class="dg-footer clearfix animation-section">
        <div class="main-footer clearfix">
            <div class="container clearfix">
                <div class="footer-top">
                    <div class="row clearfix">
                        <div class="col-sm-6 footer-blocks">
                            <div class="connect-footer">
                                <h4 class="footer-section-title text-details">Connect
                                <span class="pull-right hidden-sm hidden-md hidden-lg">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span></h4>
                                <ul class="footer-list text-details">
                                    
                                    <li><a href="<?php echo esc_url(site_url()); ?>/contact">Contact Us</a></li>
                                    <li>
                                         <ul class="social-icon">
                                            <li><a href="<?php echo ot_get_option('footer_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_linkedIn'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_google+'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_flickr'); ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="<?php echo ot_get_option('footer_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        
<!--                                                 <a href="#"><i class="icon icon-facebook"></i></a>
                                                <span class="social-tooltip">Facebook</span> -->
                                        </ul>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                        <div class="col-sm-3 footer-blocks">
                            <div class="connect-footer">
                                <h4 class="footer-section-title text-details">Quick Links
                                <span class="pull-right hidden-sm hidden-md hidden-lg">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span></h4>
                                <ul class="footer-list dg-header-5 text-details">
                                    <li><a href="<?php echo esc_url(site_url()); ?>/global-impact">Global Impact</a></li>
                                    <li><a href="<?php echo esc_url(site_url()); ?>/solutions">Solution</a></li>
                                    <li><a href="<?php echo esc_url(site_url()); ?>/careers">Work With Us</a></li>
                                    <li><a href="<?php echo esc_url(site_url()); ?>/partners">Financials</a></li>
                                    <li><a href="<?php echo esc_url(site_url()); ?>/newsresource">Resources &amp; Publications</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 footer-blocks">
                            <div class="connect-footer">
                                <h4 class="footer-section-title text-details">Newletter Sign Up
                                 <span class="pull-right hidden-sm hidden-md hidden-lg">
                                    <i class="icon icon-up-arrow up-arrow" aria-hidden="true"></i>
                                    <i class="icon icon-down-arrow down-arrow" aria-hidden="true"></i>
                                </span></h4>


                                <form id="signup" method="post" action="/digitalgreen.org/mail/action.php">
                                    <div class="footer-list dg-header-5 text-details">
                                        <div class="inp-wrapper"><input class="footer-input-box" type="text" placeholder="Full Name" name="fname" id="fname">
                                        <!-- <span class="error-msg">Your Full Name Required</span>  --></div>
                                        <div class="inp-wrapper"><input class="footer-input-box" type="text" placeholder="Email Address" name="email" id="email_id">
                                        <!-- <span class="error-msg">Your Email Is Required</span> --></div>
                                        <p>
                                        <input name="submit" type="submit" class="green-arrow btn btn-link" id="mc-embedded-subscribe"><i class="on-hover-arrow-left"></i></p>
                                    </div>
                                </form>
                                <div id="response"></div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row copyright-part clearfix">
                        <div class="col-sm-6">
                            <p>&copy;<?php echo date('Y'); ?> Digital Green. All rights reserved. <span class="text-white">Privacy Policy</span></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-right">Site designed & developed by <a href="http://codebele.com" target="_blank"><span class="text-white">CodeBele</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

	

<?php wp_footer(); ?>

    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fullPage.min.js"></script>
    <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.min.js"></script>
    <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
    <script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.ba-throttle-debounce.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            // jQuery Validation
            $("#signup").validate({
                // if valid, post data via AJAX
                submitHandler: function(form) {
                    $.post("/digitalgreen.org/mail/action.php", { fname: $("#fname").val(), email: $("#email_id").val() }, function(data) {
                        $('#response').html(data);
                    });
                },
                // all fields are required
                rules: {
                    fname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                        
                    }
                }
            });
        });
    </script>

    

</body>
</html>
