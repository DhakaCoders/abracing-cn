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

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/font-awesome.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="assets/flatpickr/flatpickr.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/fonts/custom-fonts.css">

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

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
    $telephone = get_field('telephone', 'options');
    $email = get_field('emailaddres', 'options');
    $sinfo = get_field('social_media', 'options');
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
                    <div class="hdr-tel">
                      <span>Call Today: <a href="tel:+971567372727">+971 56 737 2727</a></span>
                    </div>
                    <div class="hdr-open-time">
                      <span>Open Daily: <span class="open-time-schedule">08:00 TO 19:00</span></span>
                    </div>
                  </div>
                  <div class="hdr-addr-socials-cntlr">
                    <div class="hdr-addr">
                      <a target="_blank" href="#">
                        <span>Jumeirah Fish Market, Jumeirah 1</span>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/hdr-addr-icon.png" alt=""></i>
                      </a>
                    </div>
                    <div class="hdr-socials">
                      <ul class="reset-list">
                        <li class="tiktok-icon"><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-tiktok-icon.png" alt=""></a></li>
                        <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-facebook-icon.png" alt=""></a></li>
                        <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-instragram-icon.png" alt=""></a></li>
                      </ul>
                    </div>
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
                      <ul class="clearfix reset-list">
                        <li class="current-menu-item"><a href="#">HOME</a></li>
                        <li class="menu-item-has-children">
                          <a href="#">PACKAGES</a>
                          <ul class="sub-menu">
                            <li><a href="#">submenu 1</a></li>
                            <li><a href="#">submenu 2</a></li>
                            <li><a href="#">submenu 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">ACTIVITIES</a></li>
                        <li><a href="#">F.A.Q.</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">CONTACT</a></li>
                      </ul>
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
            <div class="xs-logo">
              <a href="front-page.html">
                <img src="<?php echo THEME_URI; ?>/assets/images/logo.png" alt="">
              </a>
            </div>
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
              <ul class="clearfix reset-list">
                <li class="current-menu-item"><a href="#">HOME</a></li>
                <li class="menu-item-has-children">
                  <a href="#">PACKAGES</a>
                  <ul class="sub-menu">
                    <li><a href="#">submenu 1</a></li>
                    <li><a href="#">submenu 2</a></li>
                    <li><a href="#">submenu 3</a></li>
                  </ul>
                </li>
                <li><a href="#">ACTIVITIES</a></li>
                <li><a href="#">F.A.Q.</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="xs-pop-menu-btm">
          <div class="hdr-open-time">
            <span>Open Daily: <span class="open-time-schedule">08:00 TO 19:00</span></span>
          </div>
          <div class="hdr-tel">
            <span>Call Today: <a href="tel:+971567372727">+971 56 737 2727</a></span>
          </div>
          <div class="hdr-socials">
            <ul class="reset-list">
              <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-tiktok-icon.png" alt=""></a></li>
              <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-facebook-icon.png" alt=""></a></li>
              <li><a target="_blank" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-instragram-icon.png" alt=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>