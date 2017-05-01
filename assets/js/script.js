// JavaScript Document

$(function(){	// animated scrollTop
	$('a[href*=#]:not([href=#])').click(function(){
		if( location.pathname == this.pathname && location.hostname == this.hostname ){
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if(target.length){ $('html, body').animate( { 
				scrollTop: $( target ).offset().top - 65 } , 1250);
			} // END if(target.length)
		} // END if( location.pathname == this.pathname && location.hostname == this.hostname )
	}); // END click(function()
});	// END animated scrollTop