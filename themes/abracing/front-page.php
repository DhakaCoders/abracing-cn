<?php 
get_header(); 
$hbanner = get_field('banner', HOMEID);
if($hbanner):
  $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
  $hasvideo = !empty($hbanner['ogg_video']) || !empty($hbanner['mp4_video'])? true:false;
?>
<section class="hm-banner <?php echo $hasvideo?' has-video':''; ?>">
  <div class="bnr-btm-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/bnr-btm-sketch.png');"></div>
  <div class="hm-bnr-down-scroll scrollto UpdownAnimate" data-to="#ab-pkg-section">
    <div class="hm-bnr-down-scroll-icon">
      <img src="<?php echo THEME_URI; ?>/assets/images/bnr-down-icon.png" alt="">
    </div>
  </div>
  <div class="hm-banner-bg-black"></div>
  <?php 
  if( $hasvideo ): 
    $video_urlmp4 = $hbanner['mp4_video'];
    $video_urlogg = $hbanner['ogg_video'];
  ?>
  <div class="hm-video-cntlr">
    <video id="bnr-vdo" autoplay muted loop>
      <?php if( !empty($video_urlogg)){ ?>
      <source src="<?php echo $video_urlogg; ?>" type="video/ogg">
      <?php } 
      if( !empty($video_urlmp4)){
      ?>
      <source src="<?php echo $video_urlmp4; ?>" type="video/mp4">
      <?php } ?>
    </video>
  </div>
  <?php endif; ?>
  <div class="hm-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-banner-cntlr">
          <div class="hm-bnr-desc">
            <?php 
              if( !empty($hbanner['title']) ) printf( '<h1 class="fl-h1 hm-bnr-title">%s</h1>', $hbanner['title'] ); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php
$showhide_package = get_field('showhide_package', HOMEID);
if($showhide_package): 
$packages = get_field('packages_sec', HOMEID);
$packobj = $packages['select_packages'];
if( empty($packobj) ){
  $packobj = get_terms( array(
    'taxonomy' => 'activities_cat',
    'hide_empty' => false,
    'orderby' => 'menu_order',
    'order' => 'asc'
  ) ); 
}
if($packages):
?>
<section class="ab-pkg-section" id="ab-pkg-section">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
            <div class="sec-entry-hdr  cpkg-sec-entry-hdr">
              <?php if( !empty($packages['title']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $packages['title'] ); ?>
            </div>
        </div>
        <?php if( $packobj ): ?>
        <div class="col-md-12">
          <div class="pkg-grids-cntlr  hm-pkg-grids-cntlr">
            <ul class="reset-list">
              <?php 
                foreach( $packobj as $pack_row ): 
                $pack_imgID = get_field('image', $pack_row);
                $packimg = !empty($pack_imgID)? cbv_get_image_src($pack_imgID):'';
              ?>
              <li>
                <div class="pkgg-item mHc">                    
                  <div class="pkggi-hdr"><h3 class="fl-h3  pkggi-tt"><a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>"><?php echo $pack_row->name; ?></a></h3></div>
                  <div class="pkggimg-cntlr">                      
                    <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="overlay-link"></a>
                    <div class="feat-img  inline-bg" style="background-image: url('<?php echo $packimg; ?>');"></div>                    
                  </div>
                  
                  <div class="hm-pkggi-btns-rgt  mHc2">
                    <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="ab-btn  book-now-btn">book now</a>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
</section>   
<?php endif; ?>
<?php endif; ?>
<?php 
$showhide_sports_activities = get_field('showhide_sports_activities', HOMEID);
if($showhide_sports_activities): 
  $sports_activities = get_field('sports_activities', HOMEID); 
  if($sports_activities ): 
?>
<section class="ab-sports-activities-sec">
  <span class="ab-sports-activities-rgt-bg inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/wpa-rgt-bg.png);"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ab-sports-activities-sec-inr">
          <div class="ab-sports-activities-img">
            <div class="ab-sports-activities-img-inr">
              <?php echo !empty($sports_activities['image'])? cbv_get_image_tag($sports_activities['image']):''; ?>
            </div>
          </div>
          <div class="ab-sports-activities-des">
            <div class="sec-entry-hdr sec-entry-hdr-lft">
              <?php 
                if( !empty($sports_activities['title']) ) printf( '<h2 class="fl-h3 sec-entry-hdr-title">%s</h2>', $sports_activities['title'] );
              ?>
            </div>
            <blockquote>
              <?php 
                if( !empty($sports_activities['sub_title']) ) printf( '<h3 class="fl-h5 ab-blockquote-title">%s</h3>', $sports_activities['sub_title'] );
                if( !empty($sports_activities['description']) ) echo wpautop( $sports_activities['description'] );
              ?>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif;?>

<?php 
$showhide_get_ready = get_field('showhide_get_ready', HOMEID);
if($showhide_get_ready): 
  $get_ready_sec = get_field('get_ready_sec', HOMEID); 
  if($get_ready_sec ): 
    $GetReadySecFeaImg = !empty($get_ready_sec['image'])? cbv_get_image_src( $get_ready_sec['image'] ): '';
?>
<section class="ab-get-ready-sec inline-bg" style="background-image: url(<?php echo $GetReadySecFeaImg; ?>);">
  <div class="ab-get-ready-overlay" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/wave-trills-overlay-bg.png);"></div>
  <div class="ab-get-ready-btm-skew" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/wave-trills-skew.png);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ab-get-ready-sec-inr">
          <?php 
            if( !empty($get_ready_sec['title']) ) printf( '<h2 class="ab-get-ready-title fl-h1">%s</h2>', $get_ready_sec['title'] );
            $getReadSeclink = $get_ready_sec['link'];
            if( is_array( $getReadSeclink ) &&  !empty( $getReadSeclink['url'] ) ){
                printf('<a class="ab-btn" href="%s" target="%s">%s</a>', $getReadSeclink['url'], $getReadSeclink['target'], $getReadSeclink['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif;?>
<?php 
$showhide_location = get_field('showhide_location', HOMEID);
if($showhide_location): 
  $location_sec = get_field('location_sec', HOMEID); 
  if($location_sec ): 
      $telephone = get_field('telephone', 'options');
      $whatsapp = get_field('whatsapp', 'options');
      $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
      $address = $location_sec['address'];
      $sinfo = get_field('social_media', 'options');
?>
<section class="our-location-sec">
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-location-con-cntlr">
          <div class="our-location-sec-title-cntlr">
            <div class="sec-entry-hdr">
              <?php 
                if( !empty($location_sec['title']) ) printf( '<h2 class="fl-h3 sec-entry-hdr-title">%s</h2>', $location_sec['title'] );
              ?>
            </div>
          </div>
          <div class="our-location-con-innr">
            <div class="our-location-lft">
              <div class="our-location-info-cntlr">
                <div class="our-location-info-title-cntlr">
                <?php 
                  if( !empty($location_sec['sub_title']) ) printf( '<h3 class="fl-h5 our-location-info-title">%s</h3>', $location_sec['sub_title'] );
                ?>
                </div>
                <div class="our-location-form-dtails">
                  <?php if( !empty($address) ): ?>
                  <div class="hm-cntct-addres">
                    <?php printf('<a href="%s" target="_blank">%s</a>', $gmaplink, $address); ?>
                  </div>
                  <?php endif; if( !empty($telephone) ): ?>
                  <div class="hm-cntct-tel">
                    <span>Phone: </span>
                    <a href="tel:<?php echo phone_preg($telephone); ?>"><?php echo $telephone; ?></a>
                  </div>
                  <?php endif; if( !empty($whatsapp) ): ?>
                  <div class="hm-cntct-tel">
                    <span>Book via WhatsApp: </span>
                    <a href="https://wa.me/<?php echo phone_preg($whatsapp); ?>">
                      <?php echo $whatsapp; ?>
                    </a>
                  </div>
                  <?php endif;?>
                </div>
              </div>
            </div>
            <div class="our-location-rgt">
              <div class="our-location-rgt-con"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if( !empty($location_sec['gmap_code']) ): ?>
  <div class="our-location-map-cntlr">
    <div class="our-location-google-map-wrp">
      <div class="our-location-google-map">
        <?php echo $location_sec['gmap_code'] ?>
      </div> 
    </div>
  </div>
  <?php endif; ?>
</section>

<?php endif; endif;?>

<?php get_footer(); ?>