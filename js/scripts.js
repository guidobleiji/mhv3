jQuery(document).ready(function(jQuery){		
	jQuery('.carrousel-doorkiesblokken').owlCarousel({
		loop:true,
		margin:30,
		stagePadding: 120,
		nav: true,
		navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 45
			},
			575:{
				items:2,
				stagePadding: 45
			},
			991:{
				items:3,
				stagePadding: 45
			},
			1199:{
				items:3
			}
		}
	});
	
	jQuery('.carrousel-pakketten').owlCarousel({
		loop:false,
		margin:30,
		stagePadding:15,
		nav: true,
		navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 15
			},
			575:{
				items:2,
				stagePadding: 15
			},
			767:{
				items:2,
				stagePadding: 15
			},
			991:{
				items:2
			},
			1199:{
				items:4
			},
			1366:{
				items:4
			}
		}
	});
	
	jQuery('.carrousel-uitgelichtwerk').owlCarousel({
		loop:false,
		margin:30,
		stagePadding:15,
		nav: true,
		navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 45
			},
			575:{
				items:2,
				stagePadding: 45
			},
			991:{
				items:3,
				stagePadding: 45
			},
			1199:{
				items:3
			}
		}
	});
	
	jQuery('.carrousel-recensies').owlCarousel({
		loop:false,
		autoplay:true,
		items:1
	});
	
	jQuery('#portfolio').prepend('<div class="grid-sizer"></div>');	
	
	var $grid = jQuery('#portfolio').masonry({
		itemSelector: '.mas-item',
		percentPosition: true,
		columnWidth: '.grid-sizer'
	});
	
	$grid.imagesLoaded().progress( function() {
		$grid.masonry();
	});
	
	window.sr = ScrollReveal({ distance: '90px', origin: 'bottom'});
	sr.reveal('#doorkiesblokken .owl-item', 60);
	sr.reveal('#uitgelicht-werk .col', 60);
	sr.reveal('.recensie .fa-star', 60);
});


jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 60) {
        jQuery("#navigatie").animate().addClass("scroll");
    }
	
	if (jQuery(this).scrollTop() < 60) {
        jQuery("#navigatie").animate().removeClass("scroll");
    }
});

jQuery(function () {
  'use strict'
  jQuery('[data-toggle="offcanvas"]').on('click', function () {
    jQuery('.offcanvas-collapse').toggleClass('open')
  })
})