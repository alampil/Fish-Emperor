$(function(){

$("#slider").slider({
	min: 0,
	max: 10000,
	values: [0,10000],
	range: true,
	stop: function(event, ui) {
		$("input#minCost").val($("#slider").slider("values",0));
		$("input#maxCost").val($("#slider").slider("values",1));
	},
	slide: function(event, ui){
		$("input#minCost").val($("#slider").slider("values",0));
		$("input#maxCost").val($("#slider").slider("values",1));
	}
});

$("input#minCost").change(function(){
	var value1 = $("input#minCost").val();
	var value2 = $("input#maxCost").val();

	if (parseInt(value1) > parseInt(value2)) {
		value1 = value2;
		$("input#minCost").val(value1);
	}
		$("#slider").slider('values',0,value1);
});

$("input#maxCost").change(function(){
	var value1 = $("input#minCost").val();
	var value2 = $("input#maxCost").val();

	if(value2 > 10000){
		value2 = 10000;
		$("input#maxCost").val(10000);
	}
	if(parseInt(value1) > parseInt(value2)){
		value1 = value2;
		$("input#maxCost").val(value2);
	}
	$("#slider").slider("values",1,value2);
});


$(function() {

  $('#up').click(function() {
    $('html, body').animate({scrollTop: 0},500);
    return false;
  })

});

$(document).ready(function(){
    $('.categories a').click(function(e) {
        e.preventDefault();
        $('.categories .active').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.categories_info').not(tab).css({'display':'none'});
        $(tab).fadeIn(400);
    });
});



});

