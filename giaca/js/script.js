
$(function() {
	var pull = $('#pull');
	menu = $('.menu_nav');
	menuHeight = menu.height();

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
});
$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})
	$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
	$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
})


$(document).ready(function(){
	var prev = $('.list_pd');
	var next = $('.lists');
	var adv = $('.advertise');
	var atv = $('.active')
	atv.css('color', '#7CD3FB');
	$('#view-mode-next').click(function(){
		next.css('display', 'block');
		prev.css('display', 'none');
		adv.css('display', 'none');
		atv.css('color', '#000');
		$('#view-mode-next').css('color', '#7CD3FB')
	})
	$('#view-mode-prev').click(function(){
		next.css('display', 'none');
		prev.css('display', 'block');
		$('#view-mode-next').css('color', '#000')
		atv.css('color', '#7CD3FB');

	})
})

$(document).ready(function(){
	$('.checkbox_label_round').click(function(){
		$('.checkbox_label_round').removeClass('active');
		$(this).addClass('active');

	});
})
$(document).ready(function(){
	$('.checkbox_label_square').click(function(){
		if($(this).hasClass('active') == true){			
			$(this).removeClass('active');
		}
		else{
			$(this).addClass('active');
		}

		return false;
	});
})

$(document).ready(function(){
	$('.testDiv4').slimScroll({
		railVisible: true,
		alwaysVisible: true
	});
});

$(document).ready(function(){
	$('.icon_menu').click(function(){
		$('.menu_product').toggleClass('active');
	})
	return false;
})

$(document).ready(function () {
	$('#myCarousel').carousel({
		interval: false
            //interval: 2000
        });
	$('.small-thumbnail img').click(function () {
		$('#DataDisplay').attr("src", $(this).attr("data-display"));
	});

});

/* slider detail */
$(function(){
	var display_image_number = 3;
	var circle_method = 2;
	var anispeed = 3000;
	var timeinterval = 1200;
});
$(document).ready(function() {
	var speed = 5000;
	var item_width = $('#slider li').outerWidth();
	var left_value = item_width * (-1);
	$('#slider li:first').before($('#slider li:last'));
	$('#slider').css({'left' : left_value});
	$('#prev').click(function() {
		var left_indent = parseInt($('#slider').css('left')) + item_width;
		$('#slider:not(:animated)').animate({'left' : left_indent}, 200,
			function(){
				$('#slider li:first').before($('#slider li:last'));
				$('#slider').css({'left' : left_value});

			});
		return false;
	});
	$('#next').click(function() {
		var left_indent = parseInt($('#slider').css('left')) - item_width;
		$('#slider:not(:animated)').animate({'left' : left_indent}, 200, function () {
			$('#slider li:last').after($('#slider li:first'));
			$('#slider').css({'left' : left_value});

		});
		return false;
	});
	$('#sline').hover(
		function() {
			run = setInterval('rotate()', speed);
		}
		);
});
