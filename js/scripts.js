jQuery(document).ready(function(jQuery){		
	jQuery('.carrousel-doorkiesblokken').owlCarousel({
		loop:true,
		margin:30,
		stagePadding: 15,
		nav: true,
		navText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
		loop: false,
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
				items:3
			},
			1199:{
				items:4
			}
		}
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
});


jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 60) {
        jQuery("#navigatie").animate().addClass("scroll");
    }
	
	if (jQuery(this).scrollTop() < 60) {
        jQuery("#navigatie").animate().removeClass("scroll");
    }
});