
$(document).ready(function(){

    $(".nexts").click(function(){
        var click = $(this).data("id");
     switch(click){
            case "carouse1":
            var test = "#slid";
            break;
            case "carouse2":
            var test = "#sl";
            break;   
        }
         next(test);
         getContent();
    });

    $(".prevs").click(function(){
      var click = $(this).data("id");
     switch(click){
            case "carouse1":
            var test = "#slid";
            break;
            case "carouse2":
            var test = "#sl";
            break;
            
        }
         prev(test);
    });
});

function next(test){
    var item_width = $(test + 'li').outerWidth();
        var left_value = item_width * (-1);
        $(test).css({'left' : left_value});
    var left_indent = parseInt($(test).css('left')) - item_width;
        $(test + ':not(:animated)').animate({'left' : left_indent}, 200, function () {
        $(test + ' li:last').after($(test + ' li:first'));
        $(test).css({'left' : left_value});

        });
}

function prev(test){
    var item_width = $(test + 'li').outerWidth();
    var left_value = item_width * (-1);
    $(test).css({'left' : left_value});
    var left_indent = parseInt($(test).css('left')) + item_width;
        $(test + ':not(:animated)').animate({'left' : left_indent}, 200,
        function(){
        $(test + ' li:first').before($(test + ' li:last'));
        $(test).css({'left' : left_value});

    });
}



// function getContent(conten){
    
//    var result = conten.html();
//    return result;
// };
// $ (function(){
//     // var conten = $('#sl');
//      alert(getContent($('#sl')));
// });
//     function byfunction(domEle) {
//         var result = domEle.html();
//         alert(result);
// }
// $(function () {
//     var domEle = $("#sl");
//     byfunction(domEle);
// });
function byfunction(domEle) {
        var images = $(domEle).parents('li').find('.slale_v img').attr('src');
        alert(images); 
}