<?php
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$title = get_field('custom_page_title', $thisID);
$page_title = !empty($title) ? $title : get_the_title($thisID);
$telephone = get_field('telephone', 'options');
$email = get_field('emailaddres', 'options');
$gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
$mapcode = get_field('gmap_code', $thisID);
$sinfo = get_field('social_media', 'options');
$address_sec = get_field('cn_address', $thisID);
$address = $address_sec['address'];
$gurl = $address_sec['url'];
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
            <h1 class="fl-h1 pg-bnr-title"><?php echo $page_title; ?></h1>
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
                  <?php if( !empty($telephone) ): ?>
                  <div class="cntct-tel cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></i>
                    <a href="tel:<?php echo phone_preg($telephone); ?>">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/whatsapp-icon.png" alt=""></i>
                      <?php printf('<span>%s</span>', $telephone); ?>
                    </a>
                  </div>
                  <?php endif; if( !empty($email) ): ?>
                  <div class="cntct-mail cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></i>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                  </div>
                  <?php endif; if( !empty($address) ): ?>
                  <div class="cntct-addres cntct-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/location-icon.png" alt=""></i>
                    <!-- <a href="#">Jumeirah Fish Market, <br>Jumeirah 1, <br>Jumeirah - Dubai</a> -->
                    <?php printf('<a href="%s" target="_blank">%s</a>', $gmaplink, $address); ?>
                  </div>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="contact-form-rgt">
              <?php 
                $form = get_field('form', $thisID);
                if($form):
                  $shortcode = $form['shortcode'];
              ?>
              <div class="contact-form-dsc-wrp">
                <div class="cntct-form-heading">
                  <?php 
                    if( !empty($form['title']) ) printf( '<h2 class="fl-h4 cntct-form-title">%s</h2>', $form['title'] );
                  ?>
                </div>
                <div class="contact-form-wrp clearfix">
                  <div class="wpforms-container">
                    <?php if( !empty($shortcode) ) echo do_shortcode($shortcode); ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>

<?php if( $mapcode ): ?>
<section class="contact-google-map-sec-wrp">
  <div class="contact-google-map-wrp">
    <div class="contact-google-map">
    <?php echo $mapcode; ?>
    </div> 
  </div>
</section>
<?php endif; ?>

<?php if( $sinfo ): ?>
<section class="contact-follow-us-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sec-entry-hdr sec-entry-hdr-title-remove-border">
          <h2 class="fl-h4 sec-entry-hdr-title">FOLLOW US</h2>
        </div>
        <div class="follow-us-socials">
          <ul class="reset-list">
          	<?php if( !empty($sinfo['tiktok_url']) ): ?>
            <li>
            	<a href="<?php echo $sinfo['tiktok_url']; ?>" target="_blank">
            		<i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-tiktok-icon.png" alt=""></i>
            	</a>
            </li>
            <?php endif; if( !empty($sinfo['facebook_url']) ): ?>
            <li>
            	<a href="<?php echo $sinfo['facebook_url']; ?>" target="_blank">
            		<i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-facebook-icon.png" alt=""></i>
            	</a>
            </li>
            <?php endif; if( !empty($sinfo['instagram_url']) ): ?>
            <li>
            	<a href="<?php echo $sinfo['instagram_url']; ?>" target="_blank">
            		<i><img src="<?php echo THEME_URI; ?>/assets/images/flw-us-instragram-icon.png" alt=""></i>
            	</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>