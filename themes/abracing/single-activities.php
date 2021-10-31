<?php 
get_header(); 
$thisID = get_the_ID();
$price = get_field('cost', $thisID);
$time = get_field('time_duration', $loopID);
$packterms = get_the_terms(get_the_ID(), 'activities_cat');

$cat = '';
if(!empty($packterms)){
  $i = 1;
  foreach( $packterms as $packterm ){
    if( $i == 1 && !empty($packterm)){
      $cat = '<a href="'.esc_url( get_term_link( $packterm ) ).'">'.$packterm->name.'</a>';
      break;
    }
    $i++;
  }
}
$imgID = get_field('banner_image', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
$sinfo = get_field('social_media', 'options');
?>
<section class="page-banner">
  <div class="bnr-btm-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/bnr-btm-sketch.png');"></div>
  <div class="pg-banner-bg-black"></div>
  <div class="pg-banner-bg" style="background-image: url('<?php echo $banner; ?>');">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pg-banner-cntlr">
          <div class="pg-bnr-desc">
            <h1 class="fl-h1 pg-bnr-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<section class="pdt-single-page-sec" id="package_price" data-price="<?php echo !empty($price)?cbv_currency_symbol().' '.$price:cbv_currency_symbol().' '.'0'; ?>" data-url="<?php echo get_the_permalink(); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pdt-single-page-con-cntlr">
          <div class="pdt-single-page-con-lft">
            <div class="pdt-single-page-con-lft-inner">
              <div class="pdt-single-page-gllary-cntlr pdtSinglePageGllarySlider">
                <?php 
                  $imgID = get_post_thumbnail_id($thisID);
                  $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): activities_placeholder();
                  $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): activities_placeholder('tag');
                  $galleries = get_field('gallery', $thisID);
                ?>
                <div class="pdt-single-page-gllary-item">
                  <div class="pdt-single-page-gllary-item-fancy">
                    <a href="<?php echo $imgsrc; ?>" data-fancybox="gallery">
                      <span class="icon-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/search-icon.png" alt="">
                      </span>
                    </a>
                  </div>
                  <div class="pdt-single-page-gllary-img-cntlr">
                    <?php echo $imgtag; ?>
                  </div>
                </div>
                <?php 
                  if($galleries): 
                    foreach( $galleries as $gallery ):
                ?>
                <div class="pdt-single-page-gllary-item">
                  <div class="pdt-single-page-gllary-item-fancy">
                    <a href="<?php echo !empty($gallery)?cbv_get_image_src($gallery):''; ?>" data-fancybox="gallery">
                      <span class="icon-img">
                        <img src="<?php echo THEME_URI; ?>/assets/images/search-icon.png" alt="">
                      </span>
                    </a>
                  </div>
                  <div class="pdt-single-page-gllary-img-cntlr">
                    <?php echo !empty($gallery)?cbv_get_image_tag($gallery):''; ?>
                  </div>
                </div>
                <?php 
                  endforeach;
                  endif; 
                ?>
              </div>
              <div class="pdt-single-page-gllary-cntlr pdtSinglePageSmGllarySlider">
                <div class="pdt-single-page-sm-gllary-item">
                  <div class="inline-bg pdt-single-page-sm-gllary-item-img" style="background-image: url(<?php echo $imgsrc; ?>);">
                  </div>
                </div>
                <?php 
                  if($galleries): 
                    foreach( $galleries as $gallery ):
                ?>
                <div class="pdt-single-page-sm-gllary-item">
                  <div class="inline-bg pdt-single-page-sm-gllary-item-img" style="background-image: url(<?php echo !empty($gallery)?cbv_get_image_src($gallery):''; ?>);">
                  </div>
                </div>
                <?php 
                  endforeach;
                  endif; 
                ?>
              </div>
            </div>
          </div>
          <div class="pdt-single-page-con-rgt">
            <div class="pdt-single-page-con-rgt-inner">
              <div class="pdt-single-page-con-rgt-des">
                <div class="sec-entry-hdr sec-entry-hdr-lft">
                  <h2 class="fl-h3 sec-entry-hdr-title"><?php echo $cat; if( !empty($time['present_by_hour']) ) printf(' - %s', $time['present_by_hour']);?></h2>
                </div>
                <p>
                  <?php
                    if( !empty($price) ) printf('<strong>%s %s</strong>', cbv_currency_symbol(), $price);
                    if( !empty($time['present_by_minute']) ) printf('<strong>%s</strong>', $time['present_by_minute']);
                  ?>
                </p>
                <?php the_content(); ?>
              </div>
              <div class="pdt-single-page-form">
                <?php echo do_shortcode('[wpforms id="267"]'); ?>
              </div>
              <div class="pdt-single-page-Category">
                <span>Category: </span>
                <?php echo $cat; ?>
              </div>
              <?php if( $sinfo ): ?>
              <div class="pdt-single-page-socials">
                <ul class="reset-list">
                  <?php if( !empty($sinfo['tiktok_url']) ): ?>
                  <li><a href="<?php echo $sinfo['tiktok_url']; ?>" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-tiktok-icon.png" alt=""></a></li>
                  <?php endif; if( !empty($sinfo['facebook_url']) ): ?>
                  <li><a href="<?php echo $sinfo['facebook_url']; ?>" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-facebook-icon.png" alt=""></a></li>
                  <?php endif; if( !empty($sinfo['instagram_url']) ): ?>
                  <li><a href="<?php echo $sinfo['instagram_url']; ?>" target="_blank"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-instragram-icon.png" alt=""></a></li>
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
</section>
<?php 
$packobj = get_terms( array(
  'taxonomy' => 'activities_cat',
  'hide_empty' => false,
  'number' => 3
) ); 
?>
<?php if( $packobj ): ?>
<section class="pdt-single-page-rltd-pdt-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pdt-single-rltd-pdt-title-cntlr">
          <div class="sec-entry-hdr">
            <h2 class="fl-h2 sec-entry-hdr-title">Related products</h2>
          </div>
        </div>
        <div class="pdt-single-rltd-pdt-grids-cntlr">
          <ul class="reset-list">
          <?php 
            foreach( $packobj as $pack_row ): 
            $price = get_field('price', $pack_row);
            $time = get_field('time_duration', $pack_row);
            $pack_imgID = get_field('image', $pack_row);
            $pack_imgID = get_field('image', $pack_row);
            $packimg = !empty($pack_imgID)? cbv_get_image_src($pack_imgID):'';
          ?>
            <li>
              <div class="ab-rltd-pdt-grids-item">
                <div class="pkgg-item mHc">                    
                  <div class="pkggi-hdr"><h3 class="fl-h3  pkggi-hdng"><a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>"><?php echo $pack_row->name; ?></a></h3></div>
                  <div class="pkggimg-cntlr">                      
                    <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="overlay-link"></a>
                    <div class="feat-img  inline-bg" style="background-image: url('<?php echo $packimg; ?>');"></div>                    
                  </div>
                  <div class="pkggi-sub-title-ctlr mHc1">
                    <h4 class="fl-h4 pkggi-sub-title"><a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>"><?php echo $pack_row->name; if( !empty($time) ) printf(' - %s', $time);?></a></h4>
                  </div>
                  <div class="pkggi-des mHc2">
                  <?php
                    if( !empty($price) ) printf('<strong>%s %s</strong>', cbv_currency_symbol(), $price);
                    if( !empty($time) ) printf('<strong>%s</strong>', $time);
                  ?>
                  </div>
                  <div class="pkggi-btns mHc3">
                    <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="ab-btn  book-now-btn">book now</a>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;?>
<?php get_footer(); ?>