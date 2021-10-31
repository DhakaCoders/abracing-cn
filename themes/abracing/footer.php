<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telephone = get_field('telephone', 'options');
  $email = get_field('emailaddres', 'options');
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
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
                  <h6 class="ftr-title"> Main links</h6>
                  <div class="ftr-col-menu">
                    <?php 
                      $ftmenuOptions1 = array( 
                          'theme_location' => 'cbv_footer_menu1', 
                          'menu_class' => 'reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $ftmenuOptions1 ); 
                    ?>
                  </div>
                </div>
                <div class="ftr-col ftr-col-03">
                  <h6 class="ftr-title">our services</h6>
                  <div class="ftr-col-menu">
                    <?php 
                      $ftmenuOptions2 = array( 
                          'theme_location' => 'cbv_footer_menu2', 
                          'menu_class' => 'reset-list',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $ftmenuOptions2 ); 
                    ?>
                  </div>
                </div>
                <div class="ftr-col ftr-col-04">
                  <?php if( $sinfo ): ?>
                  <h6 class="ftr-title">FOLLOW US </h6>
                  <div class="ftr-col-menu">
                    <ul class="reset-list">
                      <?php if( !empty($sinfo['facebook_url']) ): ?>
                      <li>
                        <a href="<?php echo $sinfo['facebook_url']; ?>" target="_blank">
                          <img src="<?php echo THEME_URI; ?>/assets/images/ftr-facebook.png">
                        </a>
                      </li>
                      <?php endif; if (!empty($sinfo['instagram_url'])): ?>
                      <li>
                        <a href="<?php echo $sinfo['instagram_url']; ?>" target="_blank">
                          <img src="<?php echo THEME_URI; ?>/assets/images/ftr-instagrame.png">
                        </a>
                      </li>
                      <?php endif; if (!empty($sinfo['tiktok_url'])): ?>
                      <li>
                        <a href="<?php echo $sinfo['tiktok_url']; ?>" target="_blank">
                          <img src="<?php echo THEME_URI; ?>/assets/images/ftr-tiktok.png"></a>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <?php endif; ?>
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
                <?php if( !empty( $copyright_text ) ) printf( '<p>%s</p>', $copyright_text); ?>
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