<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$telephone = get_field('telephone', 'options');
$address = get_field('address', 'options');
$gurl = get_field('gurl', 'options');
$gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
$mapcode = get_field('gmap_code', $thisID);
?>

<section class="page-banner">
  <div class="bnr-btm-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/bnr-btm-sketch.png');"></div>
  <div class="pg-banner-bg-black"></div>
  <div class="pg-banner-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/contact-banner-bg.jpg');">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pg-banner-cntlr">
          <div class="pg-bnr-desc">
            <h1 class="fl-h1 pg-bnr-title">Contact us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-forn-con-cntlr">
          <div class="contect-form-block clearfix">
            <div class="contact-form-lft">
              <div class="contact-form-info-cntlr">
                <div class="contact-form-info">
                  <div class="cntct-tel cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></i>
                    <a href="tel:+971567372727"><i><img src="<?php echo THEME_URI; ?>/assets/images/whatsapp-icon.png" alt=""></i><span>+971 56 737 2727</span></a>
                  </div>
                  <div class="cntct-mail cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></i>
                    <a href="mailto:booking@abracing.com">booking@abracing.com</a>
                  </div>
                  <div class="cntct-addres cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/location-icon.png" alt=""></i>
                    <a href="#">Jumeirah Fish Market, <br>Jumeirah 1, <br>Jumeirah - Dubai</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-form-rgt">
              <div class="contact-form-dsc-wrp">
                <div class="cntct-form-heading">
                  <h2 class="fl-h4 cntct-form-title">Get in touch. We'd love to <br>hear from you.</h2>
                </div>
                <div class="contact-form-wrp clearfix">
                  <div class="wpforms-container">
                    <div class="wpforms-form needs-validation novalidate">
                      <div class="wpforms-field-container">
                        <div class="wpforms-field">
                          <input type="text" name="name" placeholder="Your name" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field">
                          <input type="text" name="text" placeholder="Phone" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field">
                          <input type="email" name="text" placeholder="Email" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field wpforms-field-textarea">
                          <textarea name="message" placeholder="What you want to book?"></textarea>
                        </div>
                      </div>
                      <div class="wpforms-submit-container">
                        <button type="submit" name="submit" class="wpforms-submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>

<section class="contact-google-map-sec-wrp">
  <div class="contact-google-map-wrp">
    <div class="contact-google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.7960321817786!2d55.24188235109613!3d25.210100137283245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43f513e396bb%3A0xbc839d24ff3740f8!2sabracing%20watersports!5e0!3m2!1sen!2sbd!4v1635233516740!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div> 
  </div>
</section>

<section class="contact-follow-us-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-entry-hdr sec-entry-hdr-title-remove-border">
          <h2 class="fl-h4 sec-entry-hdr-title">FOLLOW US</h2>
        </div>
        <div class="follow-us-socials">
          <ul class="reset-list">
            <li><a href="#" target="_blank"><i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-tiktok-icon.png" alt=""></i></a></li>
            <li><a href="#" target="_blank"><i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-facebook-icon.png" alt=""></i></a></li>
            <li><a href="#" target="_blank"><i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-instragram-icon.png" alt=""></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>