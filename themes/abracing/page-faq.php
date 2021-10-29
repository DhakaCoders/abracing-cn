<?php
/*Template Name: FAQ*/
get_header();
$thisID = get_the_ID();
?>

<?php get_template_part('templates/page', 'banner'); ?>



<?php 
$faq_sec = get_field('faq_sec', $thisID); 
if($faq_sec ): 
?>
<section class="ab-faq-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ab-faq-sec-inr">
          <div class="sec-entry-hdr">
          	<?php 
            	if( !empty($faq_sec['title']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $faq_sec['title'] );
          	?>
          </div>
      	  <?php
		   $args = array( 'post_type' => 'faq', 'posts_per_page' => -1 );
		   $loop = new WP_Query( $args );  
		   if ( $loop->have_posts() ) : 
		  ?>
          <div class="ab-faq-accordion">
          	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="ab-faq-accordion-item">
              <div class="ab-faq-accordion-hdr">
                <h6 class="ab-faq-accordion-title"><?php the_title();?></h6>
              </div>
              <div class="ab-faq-accordion-des">
                <?php the_content(); ?>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
		  <?php endif; ?> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

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