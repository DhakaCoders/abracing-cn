<?php
/*Template Name: Packages*/
get_header();
$thisID = get_the_ID();
$title = get_field('custom_page_title', $thisID);
$page_title = !empty($title) ? $title : get_the_title($thisID);
$imgID = get_field('banner', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
?>


<section class="page-banner">
  <div class="bnr-btm-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/bnr-btm-sketch.png');"></div>
  <div class="pg-banner-bg-black"></div>
  <div class="pg-banner-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');">
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

<section class="ab-pkg-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
          <div class="sec-entry-hdr  cpkg-sec-entry-hdr">
              <h2 class="fl-h2 sec-entry-hdr-title">choose your package</h2>
          </div>
      </div>
      <?php 
		  $packobj = get_terms( array(
		    'taxonomy' => 'activities_cat',
		    'hide_empty' => false,
		  ) ); 
      ?>
      <div class="col-md-12">
        <div class="pkg-grids-cntlr">
          <?php if( $packobj ): ?>
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
              <div class="pkgg-item mHc">                    
                <div class="pkggi-hdr"><h3 class="fl-h3  pkggi-tt"><a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>"><?php echo $pack_row->name; ?></a></h3></div>
                <div class="pkggimg-cntlr">                      
                  <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="overlay-link"></a>
                  <div class="feat-img  inline-bg" style="background-image: url('<?php echo $packimg; ?>');"></div>                    
                </div>
                <div class="pkggi-des mHc1">
                  <?php
                  	if( !empty($price) ) printf('<strong>%s %s</strong>', cbv_currency_symbol(), $price);
                  	if( !empty($time) ) printf('<strong>%s</strong>', $time);
                  ?>
                </div>
                <div class="pkggi-btns mHc2">
                  <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="ab-btn  book-now-btn">book now</a>
                  <a href="<?php echo esc_url( get_term_link( $pack_row ) ); ?>" class="ab-btn  details-btn">details</a>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
      	<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>