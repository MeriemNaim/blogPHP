/*-----------------------------------------------------------------------------------

  Template Name: Greenin Environment & Non-Profit HTML Template.
  Template URI: #
  Description: Greenin is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
  01. jQuery MeanMenu
  02. wow js active
  03. Sticky Header
  04. ScrollUp
  05. CounterUp
  06. Testimonial Slick Carousel
  07. Slider Activation
  08. ScrollReveal Js Init  

/*--------------------------------
[ End table content ]
-----------------------------------*/


(function($) {
    'use strict';


/*-------------------------------------------
  01. jQuery MeanMenu
--------------------------------------------- */
    
$('.mobile-menu nav').meanmenu({
    meanMenuContainer: '.mobile-menu-area',
    meanScreenWidth: "991",
    meanRevealPosition: "right",
});

/*-------------------------------------------
  02. wow js active
--------------------------------------------- */
    new WOW().init();


/*-------------------------------------------
  03. Sticky Header
--------------------------------------------- */ 
  $(window).on('scroll',function() {    
     var scroll = $(window).scrollTop();
     if (scroll < 245) {
      $("#sticky-header-with-topbar").removeClass("scroll-header");
     }else{
      $("#sticky-header-with-topbar").addClass("scroll-header");
     }
    });

/*--------------------------
  04. ScrollUp
---------------------------- */
$.scrollUp({
    scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});

/*-----------------------------
  05. CounterUp
-----------------------------*/
  $('.count').counterUp({
    delay: 60,
    time: 3000
  });


/*---------------------------------------------
  06. Testimonial Slick Carousel
------------------------------------------------*/


$('.testimonial__activation').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  autoplay: false,
  autoplayTimeout: 10000,
  items:1,
  dots: false,
  lazyLoad: true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    }  
  }
});


/*---------------------------------------------
  07. Slider Activation
------------------------------------------------*/


$('.slider__activation__wrap').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  autoplay: false,
  autoplayTimeout: 10000,
  items:1,
  dots: false,
  lazyLoad: true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    }  
  }
});


/*-----------------------------------
  08. ScrollReveal Js Init
-------------------------------------- */

  window.sr = ScrollReveal({ duration: 800 , reset: false });
    sr.reveal('.foo');
    sr.reveal('.bar');




})(jQuery);




