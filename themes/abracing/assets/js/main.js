(function($) {
var windowWidth = $(window).width();
var windowWidth_1920 = $('.page-body-cntlr').width();

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

if( $('.hamburger-cntlr').length ){
  $('.hamburger-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=767){
    if( $('li.menu-item-has-children > a').length ){
      $('li.menu-item-has-children > a').click(function(e){
       event.preventDefault();
       $(this).next().slideToggle(300);
       $(this).parent().toggleClass('sub-menu-arrow');
     });
    }
}
	
if($("ul.slick-dots li").length == 1){
   $("ul.slick-dots").hide();
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.pg-banner-bg-2').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/*if($('.fancyboxLauncher').length){
$('.fancyboxLauncher').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
    
  });

}*/
/*$(".fancyboxLauncher").on("click", function(){
    $(".fancybox").eq(0).trigger("click");
    return false;
});*/



/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}


var windowWidth_1920 = $('.page-body-cntlr').width();
var containerWidth = $('.container').width();
var containerOffset = (windowWidth_1920 - containerWidth);
var containerOffsetRgt = containerOffset / 2;
var content = $('.our-location-rgt-con').width();
var imgWidth = (containerOffsetRgt + content);

$('.our-location-map-cntlr').css("width", imgWidth);


$(window).resize(function(){
  var windowWidth_1920 = $('.page-body-cntlr').width();
  var containerWidth = $('.container').width();
  var containerOffset = (windowWidth_1920 - containerWidth);
  var containerOffsetRgt = containerOffset / 2;
  var content = $('.our-location-rgt-con').width();
  var imgWidth = (containerOffsetRgt + content);
  $('.our-location-map-cntlr').css("width", imgWidth);
});

var contactEntryHeader = $('.our-location-sec-title-cntlr').height();
$('.our-location-map-cntlr').css('top', contactEntryHeader);

$(window).resize(function(){
  var contactEntryHeader = $('.our-location-sec-title-cntlr').height();
  $('.our-location-map-cntlr').css('top', contactEntryHeader);
});


if( $('.pdtSinglePageGllarySlider').length ){
    $('.pdtSinglePageGllarySlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      draggable: false,
      asNavFor: '.pdtSinglePageSmGllarySlider'
    });
}
if( $('.pdtSinglePageSmGllarySlider').length ){
    $('.pdtSinglePageSmGllarySlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      //slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.pdtSinglePageGllarySlider',
      draggable: false,
      //rows: 2,
      focusOnSelect: true
      
    });
}





$('.wpforms-field-select select').select2();
$('.select-2-cntlr').select2();

if($('.start-flatpickr').length ){
  $('.start-flatpickr').flatpickr({
    disableMobile: true,
  }); 
}


if( $('.pdt-single-page-review-form').length ){
  $('.pdt-single-page-review-form .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}


if( $('.hamburgar-cntlr').length ){
  $('.hamburgar-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if (windowWidth > 767) {
  if( $('.hm-banner-cntlr').length ){
    var windowHeight = $(window).height();
    if (windowHeight < 735) {
      $('.hm-banner-cntlr').css('height', windowHeight);
    }
  }
}
if( $('.scrollto').length ){
  $('.scrollto').on('click', function(e){
    e.preventDefault();
    var togo = $(this).data('to');
    goToByScroll(togo, 0);
  });
}

function goToByScroll(id, offset){
  if(id){
    // Remove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate(
      {scrollTop: $(id).offset().top - offset},
      500);
  }
}

var containerWidth = $('.container').width();
var offSet = (windowWidth_1920 - containerWidth);
var rgtOffSet = (offSet / 2);
var rgtOffSetWidth = (rgtOffSet + 2);


$('.ftr-top-border').css({
  'width': rgtOffSetWidth
});


$(window).resize(function(){
  var windowWidth_1920 = $('.page-body-cntlr').width();
  var containerWidth = $('.container').width();
  var offSet = (windowWidth_1920 - containerWidth);
  var rgtOffSet = (offSet / 2);
  var rgtOffSetWidth = (rgtOffSet + 2);


  $('.ftr-top-border').css({
    'width': rgtOffSetWidth
  });
});


$('.ab-faq-accordion-title').on('click', function(){
  $(this).toggleClass('active');
  $(this).parents('.ab-faq-accordion-item').siblings().find('.ab-faq-accordion-title').removeClass('active'); 
  $(this).parents('.ab-faq-accordion-item').find('.ab-faq-accordion-des').slideToggle(300);
  $(this).parents('.ab-faq-accordion-item').siblings().find('.ab-faq-accordion-des').slideUp(300);
});



if( $('#package_price').length > 0 ){
  let pkgPrice = $('#package_price').data('price');
  let pakURL = $('#package_price').data('url');
  $('#totalcost').text(pkgPrice);
  $('.wpforms-field.wpforms-field-hidden.activities-url input').val(pakURL);
}


new WOW().init();

})(jQuery);