<?php /* Template name: Contact Us  */ ?>
<?php 
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('globalimpact'); ?>
<div class="banner-section">
            <div class="banner-img"><img src="<?php echo ot_get_option('contact_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo ot_get_option('contact_title'); ?></h1>
                        <h4 class="dg-header-3 text-white hidden-xs"><?php echo ot_get_option('contact_heading'); ?></h4>
                        <h5 class="dg-header-5 banner-details hidden-xs">
                        <?php echo ot_get_option('contact_desc'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo ot_get_option('contact_desc'); ?>
            </h5>
        </div>
        <div class="contact-section">
            <div class="contact-form">
                <div class="container section-padding">
                    <form class="form-conatct" id="form-conatct" action="mail/contact.php" method="POST">
                        <h1 class="dg-header-1 main-section-title">To get in touch, email us at...
                            <span class="half-squre-before-title"></span>
                        </h1>
                        <ul class="contact-inner-wrap">
                            <li class="clearfix"><label for="name">Name:</label><input type="text" name="name" id="name" class="contact-inp">
                            <span class="validation-error">Please enter your name.</span></li>
                            <li class="clearfix"><label for="email">Email:</label><input type="email" name="email" id="email" class="contact-inp">
                            <span class="validation-error">Please enter your email address.</span></li>
                            <li class="clearfix"><label for="feedback">Feedback:</label><textarea name="feedback" id="feedback" class="contact-inp"></textarea>
                            <span class="validation-error">Please enter feedback.</span></li>
                        </ul>
                        <div class="green-bordered-button  with-bottom-cut learn-more">
                            <input type="submit" value="Submit"/>
                           <!-- <button type="submit" class="green-bordered-button with-bottom-cut">Submit</button> -->
                        </div>
                    </form>
                </div>
            </div>
            <section id="offices" class="section-padding">
                <div class="container">
                    <h3 class="dg-header-2 sub-section-title">Our Offices
                        <span class="half-squre-before-title"></span>
                    </h3>
                    <div class="address-wrapper">
                      <?php
      if (function_exists('get_option_tree')){
        $contact_offices = ot_get_option( 'contact_offices', array() );
        if ( ! empty( $contact_offices ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $contact_offices as $section ) {
      ?>
                        <div class="address-block">
                            <h3><?php echo $section['title']; ?></h3>
                            <ul class="address-lines">
                                   <?php echo $section['contact_office']; ?>
                            </ul>
                        </div> 
     <?php } } } ?> 
                       <!--  <div class="address-block">
                            <h3>Digital Green Foundation (Berkeley)</h3>
                            <ul class="address-lines">
                                <li>2342 Shattuck Ave., #151</li>
                                <li>Berkeley</li>
                                <li>CA 94704</li>
                                <li>United States of America</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Digital Green Trust (Bangalore)</h3>
                            <ul class="address-lines">
                                <li>Flat No. T4, 4th Floor</li>
                                <li>#33 Race Course Road</li>
                                <li>Swiss Complex</li>
                                <li>Bangalore - 560001</li>
                                <li>Karnataka, India</li>
                                <li>+91 80 41527080</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Head Office (Delhi)</h3>
                            <ul class="address-lines">
                                <li>S-26 to 28, 3rd Floor,</li>
                                <li>Green Park Extension Market,</li>
                                <li>New Delhi - 110016</li>
                                <li>India</li>
                                <li>+91 11 41881037</li>
                                <li>+91 11 41881038</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Washington DC, USA</h3>
                            <ul class="address-lines">
                                <li>641 S St. NW, 3rd Floor</li>
                                <li>Washington</li>
                                <li>DC 20001</li>
                                <li>United States of America</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Ethiopia</h3>
                            <ul class="address-lines">
                                <li>Waryt Building</li>
                                <li>Subcity - Yeka</li>
                                <li>Wereda - 07</li>
                                <li>House No: 934/01</li>
                                <li>Haile G/Silassie Avenue,</li>
                                <li>Addis Ababa, Ethiopia</li>
                                <li>+251 116 672960</li>
                            </ul>                                 
                        </div>
                        <div class="address-block">
                            <h3>Andhra Pradesh &amp; Telangana</h3>
                            <ul class="address-lines">
                                <li>House No. 8-2-672\1\C\A\1</li>
                                <li>135 Ave 2, Road No 13</li>
                                <li>Banjara Hills</li>
                                <li>Hyderabad - 500034</li>
                                <li>Andhra Pradesh, India</li>
                                <li>+91 40 66664958</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Bihar</h3>
                            <ul class="address-lines">
                                <li>46, 2nd floor</li>
                                <li>A.N. Path</li>
                                <li>North Sri Krishna Puri</li>
                                <li>Boring Road</li>
                                <li>Patna - 800013</li>
                                <li>Bihar, India</li>
                                <li>+91 612 2571950</li>
                            </ul>
                        </div>
                        <div class="address-block">
                            <h3>Odisha</h3>
                            <ul class="address-lines">
                                <li>Plot No - N3/18</li>
                                <li>Ranjita Appartment</li>
                                <li>Flat No-401</li>
                                <li>IRC Village</li>
                                <li>Bhubaneswar - 751015</li>
                                <li>Odisha, India</li>
                                <li>+91 674 6009800</li>
                            </ul>
                        </div> 
                        <div class="address-block">
                            <h3>Jharkhand</h3>
                            <ul class="address-lines">
                                <li>268/c, 1st floor,</li>
                                <li>Road no: 1/B, Ashok Nagar,</li>
                                <li>Argoda, Ranchi - 834002</li>
                                <li>Jharkhand, India</li>
                                <li>+91 651 2245817</li>
                            </ul>
                        </div> -->
                    </div> 
                </div>
             </section>
        </div>
        
        
<?php  get_footer(); ?>
