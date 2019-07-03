(function ($, root, undefined) {
	
	$(function () {
		var highlightH;
		var highlightTextH;
		
		'use strict';
		
		var highlightTextW;


		resize();

		$(window).on('resize', function(){
      resize();
		});

		$(".menu-collapsed").click(function() {
  		$(this).toggleClass("menu-expanded");
		});

		$('.fb-share').click(function(e) {
        e.preventDefault();
        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
    });

    $(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 150) {
	        $('.header').addClass('fixed');
	    } else {
	        $('.header').removeClass('fixed');
	    }
		});

		// var nav_height = $('.header').outerHeight();
		// $('main').css('padding-top', nav_height + 15);
		var link_facebook = $(".footer-facebook").attr("href");
		var link_instagram = $(".footer-instagram").attr("href");

		$(".header-facebook").attr("href", link_facebook);
		$(".header-instagram").attr("href", link_instagram);
		
	});

	function resize(){
		highlightH = $("#highlight .highlight").height();
		highlightTextH = $("#highlight .highlight_info").outerHeight();
		highlightTextW = $("#highlight .highlight_info").width();
		$("#highlight .highlight_info").css("top", highlightH - highlightTextH - 70);
		$("#highlight .highlight_info").css("margin-left", -highlightTextW/2);
	}


	
})(jQuery, this);
