(function(jQuery){
	"use strict";



/* ==================================================
	Animation Menu
================================================== */


	jQuery('.cd-primary-nav-trigger, .menu-button').on('click', function(){
		jQuery('.cd-menu-icon').toggleClass('is-clicked');
			jQuery('.menu-button').toggleClass('fixed_button_rsp');

		if( jQuery('.cd-primary-nav').hasClass('is-visible') ) {
			jQuery('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				jQuery('body').removeClass('overflow-open');
				jQuery('html').addClass('overflow-open');
			});
		} else {
			jQuery('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				jQuery('html').addClass('overflow-open');
				jQuery('body').addClass('overflow-open');


			});
		}
	});


	jQuery('.menu-button').on('click', function() {
	  jQuery('.ig-icon-menu').toggleClass("fa-bars fa-times");
	});



/* ==================================================
	Animation Search
================================================== */
	jQuery('.click_search, .search-button').on('click', function(){
		jQuery('.click_search, .open_search').toggleClass('is-clicked');
		jQuery('.search-button').toggleClass('fixed_button_rsp');



		if( jQuery('.container_search').hasClass('is-visible') ) {
			jQuery('.container_search').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				jQuery('body').removeClass('overflow-open');
				jQuery('html').addClass('overflow-open');
			});
		} else {
			jQuery('.container_search').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				jQuery('html').addClass('overflow-open');
				jQuery('body').addClass('overflow-open');
			});
		}
	});

	jQuery('.search-button').on('click', function() {
	  jQuery('.ig-icon-search').toggleClass("fa-search fa-times");
	});





  /* ==================================================
	Mini Menu
================================================== */

	                       
        jQuery(window).scroll(function(){                          
            if (jQuery(this).scrollTop() > 200) {
                jQuery('#mini-header, #mini-mobile-scroll').fadeIn(500);
            } else {
                jQuery('#mini-header, #mini-mobile-scroll').fadeOut(500);
            }
        });





/* ==================================================
	Menu Mobile
================================================== */


      jQuery('.nav-mobile').navgoco({
              caretHtml: '<i class="some-random-icon-class"></i>',
              accordion: true,
              openClass: 'open',
              save: true,
              cookie: {
                  name: 'navgoco',
                  expires: false,
                  path: '/'
              },
              slide: {
                  duration: 400,
                  easing: 'swing'
              }
          });





/* ==================================================
    Slide post 1
================================================== */

jQuery(".slide_post").owlCarousel({

	pagination : false,
	navigationText:	["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	navigation : true,


	autoPlay: 4000, //Set AutoPlay to 3 seconds
	slideSpeed : 1000,
	paginationSpeed : 400,
	singleItem:true,
	lazyLoad : true,
	items : 1



});




/* ==================================================
    Slide post infinite
================================================== */

jQuery(".slide_post_infinite").owlCarousel({
	autoPlay: 3000, //Set AutoPlay to 3 seconds
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem:true,
	lazyLoad : true,
	pagination : false,
	navigation : false

});






/* ==================================================
   Blog masonry
================================================== */

jQuery(window).load(function(){

var $boxes = jQuery('.isotopeItem_masonry');
var $container_masonry = jQuery('.isotopeWrapper');
var $resize = jQuery('.isotopeWrapper');

$boxes.css('opacity', '1');


  var $container_masonry = jQuery('.masonryContainer');
    $boxes.fadeIn();
    $container_masonry.isotope({
        itemSelector: '.isotopeItem_masonry'
                })


  });

/* ==================================================
   WOW Animation
================================================== */


 var wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       false,       // default
      live:         true        // default
    }
  )
  wow.init();






/* ==================================================
	Scroll To Top
================================================== */

jQuery(function() {
	var indieScroll = false;

	var $arrowx = jQuery('#back-to-top');

	$arrowx.click(function(e) {
		jQuery('body,html').animate({ scrollTop: "0" }, 750, 'easeOutExpo' );
		e.preventDefault();
	});

	jQuery(window).scroll(function() {
		indieScroll = true;
	});

	setInterval(function() {
		if( indieScroll ) {
			indieScroll = false;

			if( jQuery(window).scrollTop() > 1000 ) {
				$arrowx.css('display', 'block');
			} else {
				$arrowx.css('display', 'none');
			}
		}
	}, 250);

	});


/* ==================================================
   FitVids
================================================== */

    jQuery("#vid-container").fitVids();




/* ==================================================
   end
================================================== */
})(jQuery);
/* END Document ready */