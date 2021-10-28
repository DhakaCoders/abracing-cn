<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telephone = get_field('telephone', 'options');
  $fax = get_field('fax', 'options');
  $email = get_field('emailaddres', 'options');
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $cooper = get_field('cooper_basin', 'options');
  $sinfo = get_field('social_media', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>


<footer class="footer-wrp inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/ftr-bg.png);">
      <span class="ftr-top-angle" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/ftr-top-angle.png);"></span>
      <div class="ftr-top">
        <div class="ftr-top-border"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ftr-top-inr">
                <div class="ftr-col ftr-col-01">
                  <?php if( !empty($logo_tag) ): ?>
                  <div class="ftr-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                      <?php echo $logo_tag; ?>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
                <div class="ftr-col ftr-col-02">
                  <h6 class="ftr-title">mAIN links</h6>
                  <div class="ftr-col-menu">
                    <ul class="reset-list">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Packages</a></li>
                      <li><a href="#">Activities</a></li>
                      <li><a href="#">Book Now</a></li>
                      <li><a href="#">F.A.Q.S</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Contact us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="ftr-col ftr-col-03">
                  <h6 class="ftr-title">our services</h6>
                  <div class="ftr-col-menu">
                    <ul class="reset-list">
                      <li><a href="#">Fly Board</a></li>
                      <li><a href="#">Paddle board</a></li>
                      <li><a href="#">Jet Ski</a></li>
                      <li><a href="#">Banana Boat</a></li>
                      <li><a href="#">Crazy Shark</a></li>
                      <li><a href="#">Yamaha Jet Ski</a></li>
                    </ul>
                  </div>
                </div>
                <div class="ftr-col ftr-col-04">
                  <h6 class="ftr-title">FOLLOW US </h6>
                  <div class="ftr-col-menu">
                    <ul class="reset-list">
                      <li><a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-facebook.png"></a></li>
                      <li><a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-instagrame.png"></a></li>
                      <li><a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/ftr-tiktok.png"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="ftr-btm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="ftr-copyright">
                <p>&copy;ABracing Watersports 2021. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>