    // ----------------------------------------------
    // Add More
    // ----------------------------------------------
document.getElementById('button_pro').onclick = p_duplicate;
document.getElementById('button_mb').onclick = mb_duplicate;
document.getElementById('button_gc').onclick = gc_duplicate;
document.getElementById('button_ram').onclick = ram_duplicate;
document.getElementById('button_ps').onclick = ps_duplicate;
document.getElementById('button_hd').onclick = hd_duplicate;
document.getElementById('button_m').onclick = m_duplicate;
document.getElementById('button_k').onclick = k_duplicate;
document.getElementById('button_c').onclick = c_duplicate;
document.getElementById('button_mo').onclick = mo_duplicate;


var i = 0;
var cloneCountField1 = 1;cloneCountField2 = 1;
var cloneCountName1 = 1;cloneCountName2 = 1;
var x0 = 1 ;y0 = 1 ;x1 = 1 ;y1 = 1 ;x2 = 1 ;y2 = 1 ;x3 = 1 ;y3 = 1 ;x4 = 1 ;y4 = 1 ;x5 = 1 ;y5 = 1 ;x6 = 1 ;y6 = 1 ;x7 = 1 ;y7 = 1 ;x8 = 1 ;y8 = 1 ;x9 = 1 ;y9 = 1 ;
var a0 = 1 ;b0 = 1 ;a1 = 1 ;b1 = 1 ;a2 = 1 ;b2 = 1 ;a3 = 1 ;b3 = 1 ;a4 = 1 ;b4 = 1 ;a5 = 1 ;b5 = 1 ;a6 = 1 ;b6 = 1 ;a7 = 1 ;b7 = 1 ;a8 = 1 ;b8 = 1 ;a9 = 1 ;b9 = 1 ;
var original1 = document.getElementById('processor0');
var original2 = document.getElementById('mb0');
var original3 = document.getElementById('gc0');
var original4 = document.getElementById('ram0');
var original5 = document.getElementById('ps0');
var original6 = document.getElementById('hd0');
var original7 = document.getElementById('m0');
var original8 = document.getElementById('k0');
var original9 = document.getElementById('c0');
var original11 = document.getElementById('mo0');

function mo_duplicate() {
    /*var clone = original11.cloneNode(true); // "deep" clone
    clone.id = "mo" + ++i; // there can only be one element with an ID
    original11.parentNode.appendChild(clone);*/
	
	   $('#mo_p0')
       .clone()
       .attr('id', 'mo_p'+ x9++)
       .attr('name', 'mo_p'+ a9++)
       .insertAfter($('[id^=mo_c]:last'));
	   
	   $('#mo_c0')
       .clone()
       .attr('id', 'mo_c'+ y9++)
       .attr('name', 'mo_c'+ b9++)
       .insertAfter($('[id^=mo_p]:last'));
}

function c_duplicate() {
/*    var clone = original9.cloneNode(true); // "deep" clone
    clone.id = "c" + ++i; // there can only be one element with an ID
    original9.parentNode.appendChild(clone);*/
	
	   $('#c_p0')
       .clone()
       .attr('id', 'c_p'+ x8++)
       .attr('name', 'c_p'+ a8++)
       .insertAfter($('[id^=c_c]:last'));
	   
	   $('#c_c0')
       .clone()
       .attr('id', 'c_c'+ y8++)
       .attr('name', 'c_c'+ b8++)
       .insertAfter($('[id^=c_p]:last'));
}

function k_duplicate() {
    /*var clone = original8.cloneNode(true); // "deep" clone
    clone.id = "k" + ++i; // there can only be one element with an ID
    original8.parentNode.appendChild(clone);*/
	
	   $('#k_p0')
       .clone()
       .attr('id', 'k_p'+ x7++)
       .attr('name', 'k_p'+ a7++)
       .insertAfter($('[id^=k_c]:last'));
	   
	   $('#k_c0')
       .clone()
       .attr('id', 'k_c'+ y7++)
       .attr('name', 'k_c'+ b7++)
       .insertAfter($('[id^=k_p]:last'));
}

function m_duplicate() {
/*    var clone = original7.cloneNode(true); // "deep" clone
    clone.id = "m" + ++i; // there can only be one element with an ID
    original7.parentNode.appendChild(clone);*/
	
	   $('#m_p0')
       .clone()
       .attr('id', 'm_p'+ x6++)
       .attr('name', 'm_p'+ a6++)
       .insertAfter($('[id^=m_c]:last'));
	   
	   $('#m_c0')
       .clone()
       .attr('id', 'm_c'+ y6++)
       .attr('name', 'm_c'+ b6++)
       .insertAfter($('[id^=m_p]:last'));
}

function hd_duplicate() {
/*    var clone = original6.cloneNode(true); // "deep" clone
    clone.id = "hd" + ++i; // there can only be one element with an ID
    original6.parentNode.appendChild(clone);*/
    
	   $('#hd_p0')
       .clone()
       .attr('id', 'hd_p'+ x5++)
       .attr('name', 'hd_p'+ a5++)
       .insertAfter($('[id^=hd_c]:last'));
	   
	   $('#hd_c0')
       .clone()
       .attr('id', 'hd_c'+ y5++)
       .attr('name', 'hd_c'+ b5++)
       .insertAfter($('[id^=hd_p]:last'));
}

function ps_duplicate() {
/*    var clone = original5.cloneNode(true); // "deep" clone
    clone.id = "ps" + ++i; // there can only be one element with an ID
    original5.parentNode.appendChild(clone);*/
	
	   $('#ps_p0')
       .clone()
       .attr('id', 'ps_p'+ x4++)
       .attr('name', 'ps_p'+ a4++)
       .insertAfter($('[id^=ps_c]:last'));
	   
	   $('#ps_c0')
       .clone()
       .attr('id', 'ps_c'+ y4++)
       .attr('name', 'ps_c'+ b4++)
       .insertAfter($('[id^=ps_p]:last'));
}

function ram_duplicate() {
/*    var clone = original4.cloneNode(true); // "deep" clone
    clone.id = "ram" + ++i; // there can only be one element with an ID
    original4.parentNode.appendChild(clone);*/
	
	   $('#ram_p0')
       .clone()
       .attr('id', 'ram_p'+ x3++)
       .attr('name', 'ram_p'+ a3++)
       .insertAfter($('[id^=ram_c]:last'));
	   
	   $('#ram_c0')
       .clone()
       .attr('id', 'ram_c'+ y3++)
       .attr('name', 'ram_c'+ b3++)
       .insertAfter($('[id^=ram_p]:last'));
}

function gc_duplicate() {
/*    var clone = original3.cloneNode(true); // "deep" clone
    clone.id = "gc" + ++i; // there can only be one element with an ID
    original3.parentNode.appendChild(clone);*/
	
	   $('#gc_p0')
       .clone()
       .attr('id', 'gc_p'+ x2++)
       .attr('name', 'gc_p'+ a2++)
       .insertAfter($('[id^=gc_c]:last'));
	   
	   $('#gc_c0')
       .clone()
       .attr('id', 'gc_c'+ y2++)
       .attr('name', 'gc_c'+ b2++)
       .insertAfter($('[id^=gc_p]:last'));
}

function mb_duplicate() {
/*    var clone = original2.cloneNode(true); // "deep" clone
    clone.id = "mb" + ++i; // there can only be one element with an ID
    original2.parentNode.appendChild(clone);*/
	
	   $('#mb_p0')
       .clone()
       .attr('id', 'mb_p'+ x1++)
       .attr('name', 'mb_p'+ a1++)
       .insertAfter($('[id^=mb_c]:last'));
	   
	   $('#mb_c0')
       .clone()
       .attr('id', 'mb_c'+ y1++)
       .attr('name', 'mb_c'+ b1++)
       .insertAfter($('[id^=mb_p]:last'));	
}
//processor

function p_duplicate() {
/*    var clone = original1.cloneNode(true); // "deep" clone
    clone.id = "processor" + ++i; // there can only be one element with an ID
    original1.parentNode.appendChild(clone);*/
    
	   $('#p_p0')
       .clone()
       .attr('id', 'p_p'+ x0++)
       .attr('name', 'p_p'+ a0++)
       .insertAfter($('[id^=p_c]:last'));
	   
	   $('#p_c0')
       .clone()
       .attr('id', 'p_c'+ y0++)
       .attr('name', 'p_c'+ b0++)
       .insertAfter($('[id^=p_p]:last'));
}
/////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery('input.disablePaste').keydown(function(event) {
    var forbiddenKeys = new Array('c', 'x', 'v');
    var keyCode = (event.keyCode) ? event.keyCode : event.which;
    var isCtrl;
    isCtrl = event.ctrlKey
    if (isCtrl) {
        for (i = 0; i < forbiddenKeys.length; i++) {
            if (forbiddenKeys[i] == String.fromCharCode(keyCode).toLowerCase()) {
                 return false;
            }
        }
    }
    return true;
});

  $(document).ready(function(){
      $('#1').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
            $('#2').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
            $('#3').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
            $('#4').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
            $('#5').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
    });

jQuery(function($){

'use strict';

    // ----------------------------------------------
    // JS Blocker
    // ----------------------------------------------
       
    // ----------------------------------------------
    // Preloader
    // ----------------------------------------------
	(function () {
	    $(window).load(function() {
	        $('#pre-status').fadeOut();
	        $('#st-preloader').delay(350).fadeOut('slow');
	    });
	}());



    // ---------------------------------------------- 
    //  magnific-popup
    // ----------------------------------------------
	(function () {

		$('.portfolio-items').magnificPopup({ 
			delegate: 'a',
			type: 'image',
			// other options
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',

			gallery: {
				enabled: false
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function(element) {
					return element.find('i');
				}
			}

		});

	}()); 



    // ---------------------------------------------- 
    // Fun facts
    // ---------------------------------------------- 
	(function () {
		$('.st-counter').counterUp({
		    delay: 10,
		    time: 1500
		});
	}()); 



    // ---------------------------------------------- 
    //  Isotope Filter 
    // ---------------------------------------------- 
	(function () {
		var winDow = $(window);
		var $container=$('.portfolio-items');
		var $filter=$('.filter');

		try{
			$container.imagesLoaded( function(){
				$container.show();
				$container.isotope({
					filter:'*',
					layoutMode:'masonry',
					animationOptions:{
						duration:750,
						easing:'linear'
					}
				});
			});
		} catch(err) {
		}

		winDow.bind('resize', function(){
			var selector = $filter.find('a.active').attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {
			}
			return false;
		});

		$filter.find('a').click(function(){
			var selector = $(this).attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {

			}
			return false;
		});


		var filterItemA	= $('.filter a');

		filterItemA.on('click', function(){
			var $this = $(this);
			if ( !$this.hasClass('active')) {
				filterItemA.removeClass('active');
				$this.addClass('active');
			}
		});
	}()); 


	// -------------------------------------------------------------
    // masonry
    // -------------------------------------------------------------

    (function () {
		var $container = $('.portfolio-items');
		// initialize
		$container.masonry({
		  itemSelector: '.work-grid'
		});
    }());


  	// -------------------------------------------------------------
    // Animated scrolling / Scroll Up
    // -------------------------------------------------------------

    (function () {
        $('li a[href*=#]').bind("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top -79
            }, 1000);
            e.preventDefault();
        });
    }());


    // ----------------------------------------------
    // Owl Carousel
    // ----------------------------------------------
	(function () {

		$(".st-testimonials").owlCarousel({
		singleItem:true,
		lazyLoad : true,
		pagination:false,
		navigation : false,
		autoPlay: true,
		});

	}());


    // -------------------------------------------------------------
    // Back To Top
    // -------------------------------------------------------------

    (function () {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });
    }());
	

    // ----------------------------------------------
    // Parallax Scrolling
    // ----------------------------------------------
	(function () {
		$(window).bind('load', function () {
			parallaxInit();						  
		});
		function parallaxInit() {		
			$("#testimonial").parallax("50%", 0.3);
		}	
		parallaxInit();
	}());

	

    // ----------------------------------------------
    // fitvids js
    // ----------------------------------------------
    (function () {

        $(".post-video").fitVids();

    }()); 


	

});