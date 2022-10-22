(function ($) {
    'use strict';

jQuery(document).on("ready", function () {

//Testimonial slider activation
  $(".testimonial-active").owlCarousel({
	   items:1,   
	   loop:true,
	   nav:true,
	   smartSpeed: 1200,
	   dots: false,
	      responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  });

  //Brands slider activation
  $(".brand-active").owlCarousel({
	   items:6,   
	   loop:true,
	   nav:false,
	   smartSpeed: 1200,
	   dots: false,
	      responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
  });

//fixed menu on scroll
if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar_top').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar_top').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if

    });

})(jQuery);