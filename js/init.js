$('#login_account').modal({
  keyboard: false
;

$(function(){
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 1000,
		values: [ 75, 300 ],
		step: 10,
		slide: function( event, ui ) {
			$( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#price" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	" - $" + $( "#slider-range" ).slider( "values", 1 ) );
});