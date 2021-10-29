<?php
/*Template Name: FAQ*/
get_header();
$thisID = get_the_ID();
?>

<?php get_template_part('templates/page', 'banner'); ?>




<section class="ab-faq-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ab-faq-sec-inr">
          <div class="sec-entry-hdr">
              <h2 class="fl-h2 sec-entry-hdr-title">FREQUENTLY ASKED QUESTIONS</h2>
          </div>
          <div class="ab-faq-accordion">
            <div class="ab-faq-accordion-item">
              <div class="ab-faq-accordion-hdr">
                <h6 class="ab-faq-accordion-title">I Have Never Driven A Jet Ski Can I Take Part In The Trip</h6>
              </div>
              <div class="ab-faq-accordion-des">
                <p>Yes, our instructors are here to take care of you as well as explain to you how to use the Jet Ski</p>
              </div>
            </div>
            <div class="ab-faq-accordion-item">
              <div class="ab-faq-accordion-hdr">
                <h6 class="ab-faq-accordion-title">I Have Never Driven A Jet Ski Can I Take Part In The Trip</h6>
              </div>
              <div class="ab-faq-accordion-des">
                <p>Yes, our instructors are here to take care of you as well as explain to you how to use the Jet Ski</p>
              </div>
            </div>
            <div class="ab-faq-accordion-item">
              <div class="ab-faq-accordion-hdr">
                <h6 class="ab-faq-accordion-title">I Have Never Driven A Jet Ski Can I Take Part In The Trip</h6>
              </div>
              <div class="ab-faq-accordion-des">
                <p>Yes, our instructors are here to take care of you as well as explain to you how to use the Jet Ski</p>
              </div>
            </div>
            <div class="ab-faq-accordion-item">
              <div class="ab-faq-accordion-hdr">
                <h6 class="ab-faq-accordion-title">I Have Never Driven A Jet Ski Can I Take Part In The Trip</h6>
              </div>
              <div class="ab-faq-accordion-des">
                <p>Yes, our instructors are here to take care of you as well as explain to you how to use the Jet Ski</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="contact-follow-us-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="follow-us-sec-entry-hdr">
          <h2 class="follow-us-sec-title fl-h4">FOLLOW US</h2>
        </div>
        <div class="follow-us-socials">
          <ul class="reset-list">
            <li><a href="#" target="_blank"><i><img src="assets/images/flw-us-tiktok-icon.png" alt=""></i></a></li>
            <li><a href="#" target="_blank"><i><img src="assets/images/flw-us-facebook-icon.png" alt=""></i></a></li>
            <li><a href="#" target="_blank"><i><img src="assets/images/flw-us-instragram-icon.png" alt=""></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php 
$sinfo = get_field('social_media', 'options');
	if( $sinfo ): 
?>
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