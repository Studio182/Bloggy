/*
* jQuery.fn.typewriter( speed, callback );
*
* Typewriter, writes your text in a flow
*
* USAGE:
* $('.element').typewriter( speed, callback );
*
*
* Version 1.0.1
* www.labs.skengdon.com/typewriter/
* www.labs.skengdon.com/typewriter/js/typewriter.min.js
*/
;(function($){
	$.fn.typewriter = function( speed, callback ) {
		if ( typeof callback !== 'function' ) callback = function(){};
		var write = function( e, text, time ) {
			var next = $(e).text().length + 1;
			if ( next <= text.length ) {
				$(e).text( text.substr( 0, next ) );
				setTimeout( function( ) {
					write( e, text, time );
				}, time);
			} else {
				e.callback();
			}
		};
		return this.each(function() {
			this.callback = callback;
			var text = $(this).text();
			var time = speed/text.length;
			
			$(this).text('');
			
			write( this, text, time )
		});
	}
}(jQuery));