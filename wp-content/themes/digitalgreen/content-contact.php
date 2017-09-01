<?php /* Template name: Contact Us  */ ?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$title = "Contact Us"; 
include 'header-globalimpact.php'; ?>
</header>
<div class="banner-section">
            <div class="banner-img"><img src="<?php echo get_field('contact_banner_image'); ?>" class="img-responsive"/></div>
            <div class="banner-text">
                <div class="container text-white">
                    <div class="row banner-inner">
                        <span class="banner-square"></span>
                        <h1 class="dg-header-1 banner-title"><?php echo get_field('contact_banner_heading'); ?></h1>
                       
                        <h5 class="dg-header-5 banner-details hidden-xs">
                        <?php echo get_field('contact_banner_description'); ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-banner-text hidden-lg hidden-md hidden-sm">
            <h5 class="dg-header-5 banner-details">
                <?php echo get_field('contact_banner_description'); ?>
            </h5>
        </div>
        <div class="contact-section">
            <div class="contact-form">
                <div class="container section-padding">
                    <form class="form-conatct" onsubmit="return submitContact()" id="form-conatct" action="" method="POST">
                        <h1 class="dg-header-1 main-section-title">To get in touch, email us at...
                            <span class="half-squre-before-title"></span>
                        </h1>
                        <ul class="contact-inner-wrap">
                            <li class="clearfix"><label for="name">Name:</label><input type="text" name="name" id="name_val" class="contact-inp">
                            <span class="validation-error" id="name_val">Please enter your name.</span></li>
                            <li class="clearfix"><label for="email">Email:</label><input type="email" name="email_val" id="email_val" class="contact-inp">
                            <span class="validation-error" id="email_val">Please enter your email address.</span></li>
                            <li class="clearfix"><label for="feedback">Feedback:</label><textarea name="feedback" id="feedback_val" class="contact-inp"></textarea>
                            <span class="validation-error" id="feedback_val">Please enter feedback.</span></li>
                        </ul>
                        <div class="green-bordered-button  with-bottom-cut learn-more">
                            <input type="submit" value="Submit" onclick="" />
                           <!-- <button type="submit" class="green-bordered-button with-bottom-cut">Submit</button> -->
                        </div>
                    </form>
                </div>
            </div>
<?php         if( have_rows('contact_offices') )
        {
            ?>
 
            <section id="offices" class="section-padding">
                <div class="container">
                    <h3 class="dg-header-2 sub-section-title">Our Offices
                        <span class="half-squre-before-title"></span>
                    </h3>
                    <div class="address-wrapper">
                     
 
      <?php
                                while ( have_rows('contact_offices') )
                                {  
                                    the_row();
                                    ?>
                        <div class="address-block">
                            <h3><?php echo get_sub_field('contact_office_address_title'); ?></h3>
                            <ul class="address-lines">
                                   <?php echo get_sub_field('contact_office_address'); ?>
                            </ul>
                        </div>
      <?php
                                }
                            ?>
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
<?php
        }
    ?>
 
        </div>
       
       
<?php  get_footer(); ?>
 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 
    <script>
      function submitContact(){
      var state="true";
            if($("#name").val()==""){
                document.getElementById("name_val").style.display="block";
             
                state=false;
            }
            if($("#email_val").val()==""){
                document.getElementById("email_val").style.display="block";
             
                state=false;
            }if($("#feedback").val()==""){
                document.getElementById("feedback_val").style.display="block";
             
                state=false;
            }
 
          $.ajax({
            type: 'post',
            url: '/mail/mail.php',
            data: $('form').serialize(),
            success: function () {
              $(".main-section-title").text("Feed Back Sent Successfully");
              $('#form-conatct').trigger('reset');
            }
          });
          return false;
}
     
    </script>
