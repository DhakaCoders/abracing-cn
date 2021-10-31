<?php
get_header();
$curt_term = get_queried_object();
$imgID = get_field('banner_image', $curt_term);
$featimgID = get_field('image', $curt_term);
$banner = !empty($imgID)?cbv_get_image_src($imgID):cbv_get_image_src($featimgID);
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
            <h1 class="fl-h1 pg-bnr-title"><?php echo $curt_term->name; ?></h1>
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
                <h2 class="fl-h2 sec-entry-hdr-title"><?php echo $curt_term->name; ?></h2>
            </div>
        </div>
        <?php 
            $query = new WP_Query(
                array(
                    'post_type' => 'activities',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'asc',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'activities_cat',
                            'field' => 'term_id',
                            'terms' => $curt_term->term_id
                        )
                    )
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
<?php 

$inclusion = get_field('inclusion', $curt_term); 
$advantages = get_field('advantages', $curt_term); 
$condition = get_field('condition', $curt_term); 


?>
<?php if( !empty($inclusion) || !empty($advantages) ): ?>
<section class="features-sec">
    <span class="features-sec-top-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/web-img-top.png');"></span>
    <span class="features-sec-btm-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/web-img-btm.png');"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="features-sec-cntlr">
                    <?php if( !empty($inclusion) ): ?>
                    <div class="features-sec-col features-sec-col-1">
                        <h2 class="fl-h2 features-grd-title"><?php echo $curt_term->name; ?> Rental Inclusion:</h2>
                        <?php echo wpautop($inclusion); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($advantages) ): ?>
                    <div class="features-sec-col features-sec-col-2">
                        <h2 class="fl-h2 features-grd-title">OUR ADVANTAGES</h2>
                        <?php echo wpautop($advantages); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( !empty($condition) ): ?>
<section class="conditions-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-entry-hdr">
                    <h2 class="fl-h2 sec-entry-hdr-title">Conditions</h2>
                </div>
            </div>
            <div class="col-md-12">
               <div class="condition-sec-desc">
                   <?php echo $condition; ?>
               </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>