
    $(function(){
    var display_image_number = 5;
    var circle_method = 2;
    var anispeed = 500;
    // var auto_scroll = 0;
    var timeinterval = 1200;
});
$(document).ready(function() {
    var speed = 5000;
    // var run = setInterval('rotate()', speed); 
    var item_width = $('#vatika li').outerWidth();
    var left_value = item_width * (-1);
        $('#vatika li:first').before($('#vatika li:last'));
        $('#vatika ul').css({'left' : left_value});
    
    $('#prev').click(function() {
    var left_indent = parseInt($('#vatika ul').css('left')) + item_width;
    $('#vatika ul:not(:animated)').animate({'left' : left_indent}, 200,
function(){
    $('#vatika li:first').before($('#vatika li:last'));
    $('#vatika ul').css({'left' : left_value});

        });
        return false;
    });
    $('#next').click(function() {
    var left_indent = parseInt($('#vatika ul').css('left')) - item_width;
    $('#vatika ul:not(:animated)').animate({'left' : left_indent}, 200, function () {
    $('#vatika li:last').after($('#vatika li:first'));
    $('#vatika ul').css({'left' : left_value});
    

    });
    return false;
    });
    $('#vatika').hover(

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
