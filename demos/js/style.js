$(document).ready(function ($) {
    var isToogle;
    $(".btn-view-source").click(function () {
	isToogle = $(this).attr("data-toogle-source");
	(isToogle == "true") ? $(this).attr({"data-toogle-source": "false"}) : $(this).attr({"data-toogle-source": "true"});
	var parent = $(this).parent();
	var sourceCode = $("> .div-source", parent);
	sourceCode.fadeToggle(function () {

	    /* if (isToogle == "false")
	     $("html, body").animate({scrollTop: '+=200'},"slow");
	     else
	     {
	     $("html, body").animate({scrollTop: '-=20'});
	     }*/

	});
    });
    $(window).scroll(function () {
	if ($(this).scrollTop() > 20) {
	    $('#back-top').fadeIn();
	    $('#back-top').removeClass("display-none");
	} else {
	    $('#back-top').fadeOut();
	    $('#back-top').addClass("display-none");
	    $("#back-top > span.badge").addClass("display-none");
	}
    });

    // scroll body to 0px on click
    $('#back-top ').click(function () {
	$('body,html').animate({
	    scrollTop: 0
	}, 800);
	return false;
    });
    setTimeout(function(){
	$("#messageAlert").show();
	var tmp = $("#back-top").hasClass("display-none");
	if(!$("#back-top").hasClass("display-none")){
	    $("#back-top > span.badge").removeClass("display-none");
	}
    },3000);
});



