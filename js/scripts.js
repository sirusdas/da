

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