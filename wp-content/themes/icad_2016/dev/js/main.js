$( document ).ready(function() {
    console.log( "ready!" );
    
    /* SVG fallback, if unsupported fallback to png */
    if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
	  	});
	});
	
	$('.hero-slider').slick({
		arrows: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
   	});
   	
   	$('.home-slider').slick({
		arrows: false,
		speed: 500,
		dots: true,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.home-slider-img'
   	});
   	
   	$('.home-slider-img').slick({
		speed: 500,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false
   	});
   	
   	$('.2-col-slider .row').slick({
		arrows: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		cssEase: 'linear'
   	});
   	
   	$('.3-col-slider .row').slick({
		arrows: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		cssEase: 'linear'
   	});
   		
	$('.loader').lazy({
		scrollDirection: 'vertical',
		effect: 'fadeIn',
		effectTime: 1000,
		threshold: 200,
		visibleOnly: true,
		enableThrottle: true,
		throttle: 250,
		afterLoad: function(element) {
			console.log('handled');
		}
	});	
});