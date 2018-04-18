jQuery(document).ready(function(jQuery){		
	window.sr = ScrollReveal({ distance: '90px', origin: 'bottom'});
	sr.reveal('#doorkiesblokken .owl-item', 60);
	sr.reveal('#uitgelicht-werk .col', 60);
	sr.reveal('.recensie-waardering > div', 60);
	sr.reveal('.vraag > ul > li > strong > div > span', 60);
	sr.reveal('#opdehoogte a', 60);
	
	
	jQuery('.extra-informatie').click(function(){
		jQuery('html, body').animate({
			scrollTop: jQuery( $.attr(this, 'href') ).offset().top - 140
		}, 1500);
		return false;
	});
	
	jQuery('.carrousel-doorkiesblokken, .carrousel-uitgelichtwerk').owlCarousel({
		loop:true,
		margin:30,
		stagePadding: 120,
		nav: true,
		navText: ["<i class='far fa-chevron-circle-left'></i>","<i class='far fa-chevron-circle-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 37.5
			},
			575:{
				items:2,
				stagePadding: 45
			},
			991:{
				items:2,
				stagePadding: 60
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
		navText: ["<i class='far fa-chevron-circle-left'></i>","<i class='far fa-chevron-circle-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				stagePadding: 37.5
			},
			575:{
				items:2,
				stagePadding: 15
			},
			767:{
				items:2,
				stagePadding: 45
			},
			991:{
				items:2,
				stagePadding: 60
			},
			1199:{
				items:3,
				stagePadding: 60
			},
			1366:{
				items:4
			}
		}
	});
	
	jQuery('.vraag ul li').click(function(){
		jQuery(this).find('svg').toggleClass('fa-rotate-180')
	});
	
	jQuery('.portfolio-item').featherlightGallery();
	
	jQuery('.vraag ul li').click(function(){
		jQuery(this).find('div').toggleClass('actief');
	});
	
	var $container = jQuery('#masonry');
	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : '.mas-item',
			columnWidth: '.grid-sizer',
			percentPosition: true,
			gutterWidth: 0
		});
	});
});

jQuery(function () {
  'use strict'
  jQuery('[data-toggle="offcanvas"]').on('click', function () {
    jQuery('.offcanvas-collapse').toggleClass('open')
  })
})
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 60) {
        jQuery("#navigatie").animate().addClass("scroll");
    }
	
	if (jQuery(this).scrollTop() < 60) {
        jQuery("#navigatie").animate().removeClass("scroll");
    }
});