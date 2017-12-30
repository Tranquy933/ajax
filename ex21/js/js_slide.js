
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
$(document).ready(function(){
  $('ul li a img').click(function(){
    $('li a img').removeClass("active");
    $(this).addClass("active");
});
});



$(function(){
    var display_image_number = 3;
    var circle_method = 2;
    var anispeed = 3000;
    // var auto_scroll = 0;
    var timeinterval = 1200;
});
$(document).ready(function() {
    var speed = 5000;
    // var run = setInterval('rotate()', speed); 
    var item_width = $('#slides li').outerWidth();
    var left_value = item_width * (-1);
    $('#slides li:first').before($('#slides li:last'));
    $('#slides').css({'left' : left_value});
    $('#prev').click(function() {
    var left_indent = parseInt($('#slides').css('left')) + item_width;
    $('#slides:not(:animated)').animate({'left' : left_indent}, 200,
function(){
    $('#slides li:first').before($('#slides li:last'));
    $('#slides').css({'left' : left_value});

        });
        return false;
    });
    $('#next').click(function() {
    var left_indent = parseInt($('#slides').css('left')) - item_width;
    $('#slides:not(:animated)').animate({'left' : left_indent}, 200, function () {
    $('#slides li:last').after($('#slides li:first'));
    $('#slides').css({'left' : left_value});

    });
    return false;
    });
    $('#slides').hover(

        // function() {
        //     clearInterval(run);
        // },
        function() {
            run = setInterval('rotate()', speed);
        }
    );

});

function rotate() {
    $('#next').click();
}

    $(function(){
        var display_image_number = 3;
        var circle_method = 2;
        var anispeed = 3000;
        // var auto_scroll = 0;
        var timeinterval = 1200;
    });
    $(document).ready(function() {
        var speed = 5000;
        // var run = setInterval('rotate()', speed);
        var item_width = $('#sline li').outerWidth();
        var left_value = item_width * (-1);
        $('#sline li:first').before($('#sline li:last'));
        $('#sline').css({'left' : left_value});
        $('#prevs').click(function() {
            var left_indent = parseInt($('#sline').css('left')) + item_width;
            $('#sline:not(:animated)').animate({'left' : left_indent}, 200,
                function(){
                    $('#sline li:first').before($('#sline li:last'));
                    $('#sline').css({'left' : left_value});

                });
            return false;
        });
        $('#nexts').click(function() {
            var left_indent = parseInt($('#sline').css('left')) - item_width;
            $('#sline:not(:animated)').animate({'left' : left_indent}, 200, function () {
                $('#sline li:last').after($('#sline li:first'));
                $('#sline').css({'left' : left_value});

            });
            return false;
        });
        $('#sline').hover(

            // function() {
            //     clearInterval(run);
            // },
            function() {
                run = setInterval('rotate()', speed);
            }
        );

    });

    function rotate() {
        $('#nexts').click();
    }
     $(function(){
        var display_image_number = 3;
        var circle_method = 2;
        var anispeed = 3000;
        // var auto_scroll = 0;
        var timeinterval = 1200;
    });
    $(document).ready(function() {
        var speed = 5000;
        // var run = setInterval('rotate()', speed);
        var item_width = $('#sli li').outerWidth();
        var left_value = item_width * (-1);
        $('#sli li:first').before($('#sli li:last'));
        $('#sli').css({'left' : left_value});
        $('#prevss').click(function() {
            var left_indent = parseInt($('#sli').css('left')) + item_width;
            $('#sli:not(:animated)').animate({'left' : left_indent}, 200,
                function(){
                    $('#sli li:first').before($('#sli li:last'));
                    $('#sli').css({'left' : left_value});

                });
            return false;
        });
        $('#nextss').click(function() {
            var left_indent = parseInt($('#sli').css('left')) - item_width;
            $('#sli:not(:animated)').animate({'left' : left_indent}, 200, function () {
                $('#sli li:last').after($('#sli li:first'));
                $('#sli').css({'left' : left_value});

            });
            return false;
        });
        $('#sli').hover(

            // function() {
            //     clearInterval(run);
            // },
            function() {
                run = setInterval('rotate()', speed);
            }
        );

    });

    function rotate() {
        $('#nextss').click();
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

$(document).ready(function () {
    $("li").click(function () {
    $('li > ul').not($(this).children("ul")).hide();
    $(this).children("ul").toggle();
});
});
