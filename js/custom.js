
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});


/*
usage
$('#alert').bootAlert({
    msg         : '<strong>Hello, World!</strong> I am a custom bootAlert !',
	context     : 'success',
	button      : false,
	complete    : function() {alert('callBack');}
});*/

(function($) {
    $.fn.bootAlert = function( options ) {
		// Establish our default settings
		var settings = $.extend({
			img			: null,
			msg         : '<strong>Hello, World!</strong> I am a bootAlert !',
			context     : 'success',
			button      : false,
			duration	: 3000,
			speed		: 500
			/*complete    : null*/
		}, options);

		return this.each( function() {
			
			var markup = "";
			var buttonMarkUp = "";
			var glyphiconMarkUp = "";
			
			if(settings.button)
			{
				buttonMarkUp ='<button type="button" class="close" data-dismiss="alert">×</button>'; 
			}
			
			if(settings.img)
			{
				glyphiconMarkUp = '<span class="glyphicon glyphicon-'+settings.img+'"></span>&nbsp;&nbsp;&nbsp;&nbsp;';
			}
			markUp = '<div class="alert alert-'+settings.context+'">'+buttonMarkUp+glyphiconMarkUp+settings.msg+'</div>';
			$(this).animate({opacity: 'hide', height: 'hide'});
			$(this).html(markUp);
			$(this).animate({opacity: 'show', height: 'show'}, settings.speed);
			
			$(this).fadeTo(settings.duration, settings.speed).slideUp(settings.speed, function(){ $(this).html(""); $(this).attr("style","");});
			/*if ( $.isFunction( settings.complete ) ) {
				settings.complete.call( this );
			}*/			
		});


    }

}(jQuery));

