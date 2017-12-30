$(document).ready(function(){
    $(".click_top").click(function(){
        var services = $(".top_service").offset().top;
       $("html, body").animate({scrollTop:services}, 900);
    });
    $(".click_button").click(function(){
        var footer_wrap = $(".mash").offset().top;
       $("html, body").animate({scrollTop:footer_wrap}, 1200);
    });
});

$(function() {
    var pull = $('#pull');
    menu = $('.menu_top .clearfixx');
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


