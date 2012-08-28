$(function() {
	$(".tabs li").hover(function() {
		$(this).siblings().children("h2").removeClass("active");
		$(this).siblings().children("div").hide();
		$(this).children("h2").addClass("active");
        $(this).childElements.all().show();
	}, function() {		//
	});
});