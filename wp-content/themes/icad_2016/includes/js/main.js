$( document ).ready(function() {
    console.log( "ready!" );
    
    /* SVG fallback, if unsupported fallback to png */
    if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function() {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
	$('.loader').lazy({
		scrollDirection: 'vertical',
		effect: 'fadeIn',
		effectTime: 1000,
		threshold: 500,
		visibleOnly: true,
		enableThrottle: true,
		throttle: 250,
		afterLoad: function(element) {
			console.log('handled');
		}
	});	
		
});