 <?php 
get_header(); 
?>

<section class="page-banner page-bnr-404">
  <div class="bnr-btm-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/bnr-btm-sketch.png');"></div>
  <div class="pg-banner-bg-black"></div>
  <div class="pg-banner-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/about-banner-bg.jpg');">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pg-banner-cntlr">
          <div class="pg-bnr-desc">
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<section class="page-404-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-404-dsc-wrp">
          <div class="sec-entry-hdr">
            <h2 class="fl-h1 sec-entry-hdr-title">404!</h2>
          </div>
          <span>We keep focus on details.</span>
          <p>It looks like nothing was found at this location.</p>
          <div class="page-404-btn clearfix">
            <a class="ab-btn" href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>