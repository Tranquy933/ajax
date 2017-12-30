    $(function(){
    var display_image_number = 4;
    var circle_method = 2;
    // var anispeed = 500;
    // var auto_scroll = 0;
    var timeinterval = 1200;
});
$(document).ready(function() {
    // var speed = 5000;
    // var run = setInterval('rotate()', speed); 
    var item_width = $('#slides li').outerWidth();
    var left_value = item_width * (-1);
        $('#slides li:first').before($('#slides li:last'));
        $('#slides ul').css({'left' : left_value});
    
    $('#prev').click(function() {
    var left_indent = parseInt($('#slides ul').css('left')) + item_width;
    $('#slides ul:not(: )').animate({'left' : left_indent}, 200, 
function(){
    $('#slides li:first').before($('#slides li:last'));
    $('#slides ul').css({'left' : left_value});

        });
        return false;
    });
    $('#next').click(function() {
    var left_indent = parseInt($('#slides ul').css('left')) - item_width;
    $('#slides ul:not(:animated)').animate({'left' : left_indent}, 200, function () {
    $('#slides li:last').after($('#slides li:first'));
    $('#slides ul').css({'left' : left_value});
    });
    return false;
    });
    $('#slides').hover(

        // function() {
        //     clearInterval(run);
        // },
        // function() {
        //     run = setInterval('rotate()', speed);
        // }
    );

});

function rotate() {
    $('#next').click();
}

$(function() {
    var pull = $('#pull');
    menu = $('.header_button .clearfixx');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});


$(function() {
    var pulll = $('#pulll');
    menus = $('.ft_bt .clessfixx');
    menuHeights = menus.height();

    $(pulll).on('click', function(e) {
        e.preventDefault();
        menus.slideToggle();
    });
});