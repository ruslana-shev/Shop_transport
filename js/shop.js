// $('#login_account').modal({
//   keyboard: false
// });

$(function(){
	$( "#min_price" ).change(function() {
		var val = $(this).val();
		$( "#slider-range" ).slider("values", 0, val);
	});
	$( "#max_price" ).change(function() {
		var val1 = $(this).val();
		$( "#slider-range" ).slider("values", 1, val1);
	});
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 4000,
		values: [ 0, 2000 ],
		step: 50,
		slide: function( event, ui ){
			$( "#min_price" ).val( ui.values[0]);
			$( "#max_price" ).val( ui.values[1]);
		}
	});
	$( "#min_price" ).val( $("#slider-range").slider("values", 0));
	$( "#max_price" ).val( $("#slider-range").slider("values", 1));
	
});

$(document).ready(function () {
	
	$("#select-sort").click(function () {
		$("#sorting-list").slideToggle(200);
	});


});