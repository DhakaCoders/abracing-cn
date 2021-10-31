<?php
get_header();
$thisID = get_id_by_page_template('page-activities.php');
$title = get_field('custom_page_title', $thisID);
$page_title = !empty($title) ? $title : get_the_title($thisID);
$imgID = get_field('banner', $thisID);
$banner = !empty($imgID)?cbv_get_image_src($imgID):banner_placeholder();
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
            <h1 class="fl-h1 pg-bnr-title"><?php echo $page_title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<section class="race-booking-grd-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="sec-entry-hdr">
                <h2 class="fl-h2 sec-entry-hdr-title"><?php echo $page_title; ?></h2>
            </div>
        </div>
        <?php 
            $query = new WP_Query(
                array(
                    'post_type' => 'activities',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'asc'
                )
            );
        ?>
        <div class="col-md-12">
            <div class="race-booking-grds-cntlr">
                <?php if( $query->have_posts() ){ ?>
                <ul class="reset-list">
                    <?php 
                        $i = 1;
                        while( $query->have_posts() ): $query->the_post(); 
                        $loopID = get_the_ID();
                        $time = get_field('time_duration', $loopID);
                        $cost = get_field('cost', $loopID);
                        $cost = !empty($cost)? cbv_currency_symbol().' '.$cost:'';
                    ?>
                    <li class="race-booking-grd-item-col race-booking-grd-item-col-<?php echo $i; ?>">
                            <div class="race-booking-grd-item">
                                <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                                <div class="race-booking-grd-item-cntlr">
                                <div class="race-booking-grd-item-heading">
                                    <span><?php the_title(); ?></span>
                                    <?php if( !empty($time['present_by_hour']) ) printf('<h2 class="fl-h2 race-booking-grd-item-title">%s</h2>', $time['present_by_hour']); ?>
                                </div>
                                <div class="race-booking-grd-item-desc">
                                    <div><?php the_content(); ?></div>
                                </div>
                                <div class="race-booking-grd-item-btn">
                                    <a class="ab-btn" href="<?php the_permalink(); ?>"><?php echo $cost; ?> - BOOK NOW</a>
                                </div>
                                </div>
                            </div>
                    </li>
                    <?php $i++; endwhile; ?>
                   
                </ul>
                <?php }else{ ?>
                    <div class="notfound">No Result.</div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
      </div>
  </div>    
</section>
<?php get_footer(); ?>