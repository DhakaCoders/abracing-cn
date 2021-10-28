<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#009fe1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php 
    $logoObj = get_field('hdlogo', 'options');
    if( is_array($logoObj) ){
      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
    }else{
      $logo_tag = '';
    }
    $time = get_field('time', 'options');
    $telephone = get_field('telephone', 'options');
    $sinfo = get_field('social_media', 'options');
    $address = get_field('address', 'options');
    $gurl = get_field('gurl', 'options');
    $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  ?>   
  <div class="page-body-cntlr">
    <div class="bdoverlay"></div>
    <header class="header">
      <div class="header-topbar-cntlr">
        <span class="top-sketch" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/top-sketch.png');"></span>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-topbar-wrap hide-sm">
                <div class="header-topbar">
                  <div class="hdr-details">
                    <?php if( !empty($telephone) ): ?>
                    <div class="hdr-tel">
                      <span>Call Today: <a href="<?php echo phone_preg($telephone); ?>"><?php printf('%s', $telephone); ?></a></span>
                    </div>
                    <?php endif; if( !empty($time) ): ?>
                    <div class="hdr-open-time">
                      <span>Open Daily: <span class="open-time-schedule"><?php echo $time; ?></span></span>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="hdr-addr-socials-cntlr">
                    <?php if( !empty($address) ): ?>
                    <div class="hdr-addr">
                      <a target="_blank" href="<?php echo $gmaplink; ?>">
                        <span><?php echo $address; ?></span>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/hdr-addr-icon.png" alt=""></i>
                      </a>
                    </div>
                    <?php endif; if( $sinfo ): ?>
                    <div class="hdr-socials">
                      <ul class="reset-list">
                        <?php if( !empty($sinfo['tiktok_url']) ): ?>
                        <li class="tiktok-icon">
                          <a target="_blank" href="<?php echo $sinfo['tiktok_url']; ?>">
                            <img src="<?php echo THEME_URI; ?>/assets/images/hdr-tiktok-icon.png">
                          </a>
                        </li>
                        <?php endif; if( !empty($sinfo['facebook_url']) ): ?>
                        <li>
                          <a target="_blank" href="<?php echo $sinfo['tiktok_url']; ?>">
                            <img src="<?php echo THEME_URI; ?>/assets/images/hdr-facebook-icon.png">
                          </a>
                        </li>
                        <?php endif; if( !empty($sinfo['instagram_url']) ): ?>
                        <li>
                          <a target="_blank" href="<?php echo $sinfo['instagram_url']; ?>">
                            <img src="<?php echo THEME_URI; ?>/assets/images/hdr-instragram-icon.png">
                          </a>
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
      </div>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-cntlr clearfix">
                <div class="header-inr">
                  <div class="hdr-logo">
                    <?php if( !empty($logo_tag) ): ?>
                    <div class="logo">
                     <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php echo $logo_tag; ?>
                       </a>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="hdr-menu">
                    <nav class="main-nav hide-sm">
                      <?php 
                          $mmenuOptions = array( 
                              'theme_location' => 'cbv_main_menu', 
                              'menu_class' => 'clearfix reset-list',
                              'container' => '',
                              'container_class' => ''
                            );
                          wp_nav_menu( $mmenuOptions ); 
                      ?>
                    </nav>
                    <div class="hamburgar-cntlr show-sm">
                      <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </header>


    <div class="xs-mobile-menu">
      <div class="xs-pop-up-menu-inr">
        <div class="xs-pop-up-menu-top">
          <div class="logo-close-btn-cntlr">
            <?php if( !empty($logo_tag) ): ?>
            <div class="xs-logo">
             <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
               </a>
            </div>
            <?php endif; ?>
            <div class="hamburgar-cntlr show-sm">
              <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="xs-pop-menu-con">
          <div class="xs-menu">
            <nav class="main-nav">
              <?php 
                  $mmenuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $mmenuOptions ); 
              ?>
            </nav>
          </div>
        </div>
        <div class="xs-pop-menu-btm">
          <?php if( !empty($time) ): ?>
          <div class="hdr-open-time">
            <span>Open Daily: <span class="open-time-schedule"><?php echo $time; ?></span></span>
          </div>
          <?php endif; if( !empty($telephone) ): ?>
          <div class="hdr-tel">
            <span>Call Today: <a href="<?php echo phone_preg($telephone); ?>"><?php printf('%s', $telephone); ?></a></span>
          </div>
          <?php endif; ?>

          <?php if( $sinfo ): ?>
          <div class="hdr-socials">
            <ul class="reset-list">
              <?php if( !empty($sinfo['tiktok_url']) ): ?>
              <li>
                <a target="_blank" href="<?php echo $sinfo['tiktok_url']; ?>">
                  <img src="<?php echo THEME_URI; ?>/assets/images/hdr-tiktok-icon.png">
                </a>
              </li>
              <?php endif; if( !empty($sinfo['facebook_url']) ): ?>
              <li>
                <a target="_blank" href="<?php echo $sinfo['tiktok_url']; ?>">
                  <img src="<?php echo THEME_URI; ?>/assets/images/hdr-facebook-icon.png">
                </a>
              </li>
              <?php endif; if( !empty($sinfo['instagram_url']) ): ?>
              <li>
                <a target="_blank" href="<?php echo $sinfo['instagram_url']; ?>">
                  <img src="<?php echo THEME_URI; ?>/assets/images/hdr-instragram-icon.png">
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>