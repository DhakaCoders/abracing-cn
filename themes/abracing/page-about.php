<?php
/*Template Name: About*/
get_header();
$thisID = get_the_ID();
get_template_part('templates/page', 'banner'); 

$showhide = get_field('showhide', $thisID);
if($showhide): 
	$intro = get_field('introsec', $thisID); 
	if($intro ): 
?>
<section class="about-intro-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-intro-sec-con-cntlr">
          <div class="sec-entry-hdr">
            <?php if( !empty($intro['title']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $intro['title'] ); ?>
          </div>
          <?php if( !empty($intro['description']) ) echo wpautop( $intro['description'] ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif;?>
<?php 
$showhide_story = get_field('showhide_story', $thisID);
if($showhide_story): 
	$story_sec = get_field('story_sec', $thisID); 
	if($story_sec ): 
?>
<section class="about-our-story-sec">
  <div class="our-story-top-sketch inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/our-story-top-sketch.png);"></div>
  <div class="our-story-btm-sketch inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/our-story-btm-sketch.png);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about-our-story-con-contlr">
          <div class="our-story-con-lft">
            <div class="our-story-con-lft-inner">
              <div class="our-story-sec-title-cntlr">
                <?php 
                	if( !empty($story_sec['title']) ) printf( '<h2 class="fl-h2 our-story-sec-title">%s</h2>', $story_sec['title'] ); 
                	if( !empty($story_sec['description']) ) echo wpautop( $story_sec['description'] );
                ?>
              </div>
            </div>
          </div>
          <div class="our-story-con-rgt">
            <div class="our-story-con-rgt-inner">
              <div class="our-story-rgt-img-cntlr">
                <?php if( !empty($story_sec['image']) ) echo cbv_get_image_tag($story_sec['image']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif;?>
<?php 
$showhide_vision_mission = get_field('showhide_vision_mission', $thisID);
if($showhide_vision_mission): 
	$vision_mission_sec = get_field('vision_mission_sec', $thisID); 
	if($vision_mission_sec ): 
?>
<section class="vision-mission-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="vision-mission-con-cntlr">
          <?php 
          	foreach( $vision_mission_sec as $vmgrd ): 
          		$VMGrdFeaImg = !empty($vmgrd['image'])? cbv_get_image_src( $vmgrd['image'] ): '';  
          ?>
          <div class="mission-vision-grid-col">
            <div class="mission-vision-grid-col-inner">
              <div class="mission-vision-des-cntlr mHc">
                <div class="sec-entry-hdr">
                  <?php 
                    if( !empty($vmgrd['titel']) ) printf( '<h2 class="fl-h2 sec-entry-hdr-title">%s</h2>', $vmgrd['titel']); 
                 ?>
                </div> 
                <?php if( !empty($vmgrd['description']) ) echo wpautop($vmgrd['description']); ?>         
              </div>
              <div class="mission-vision-img-cntlr has-inline-bg mHc1">
                <div class="vision-mission-top-sketch inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/vision-mission-top-sketch.png);"></div>
                <div class="vision-mission-btm-sketch inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/vision-mission-btm-sketch.png);"></div>
                <?php echo cbv_get_image_tag( $vmgrd['image'] ); ?>
                <div class="inline-bg mis-vis-img" style="background-image:url(<?php echo $VMGrdFeaImg; ?>);"></div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif;?>
<?php 
$showhide_grids = get_field('showhide_grids', $thisID);
if($showhide_grids): 
	$grids_sec = get_field('grids_sec', $thisID); 
	if($grids_sec ): 
?>
<section class="ab-about-grid-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ab-about-grids-cntlr">
          <ul class="reset-list">
          	<?php foreach( $grids_sec as $grid ): ?>
            <li>
              <div class="ab-about-grid-item">
                <div class="ab-about-grid-item-img mHc">
                  <i>
                  	<?php echo !empty($grid['icon'])? cbv_get_image_tag($grid['icon']):''; ?>
                  </i>
                </div>
                <?php 
                    if( !empty($grid['titel']) ) printf( '<h3 class="fl-h4 ab-about-grid-item-title mHc1">%s</h3>', $grid['titel']); 
                 ?>
                <div class="ab-about-grid-item-desc">
                  <?php if( !empty($grid['description']) ) echo wpautop($grid['description']); ?>
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
<?php endif; endif;?>
<?php get_footer(); ?>