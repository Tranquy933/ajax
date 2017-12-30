
function Submit(){
  if($('#user').val() == "" || $('#user').val().length < 3){
    $('.requi').text('Nhập tối thiểu 3 ký tự');
    $('#user').focus();
    return false;
  }
  else{
    $('.requi').text('');
  }

  if($("#full_user").val() == "" || $("#full_user").val().length == ""){
    $(".full_name").text("Không được để trống");
    $("#full_user").focus();
    return false;
  }
  else{
    $(".full_name").text('');
  }

var mail = $('mail'); 
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
  if (!filter.test(mail.value)) { 
   $(".full_mail").text("Email không hợp lệ");
   $("mail").focus();
   return false; 
  }
  else{ 
  $(".full_mail").text(""); 
  $("mail").focus();
} 
  var pwone = $('#password1').val();
  var pwtwo = $('#password2').val();
if($("#password1").val() == ""){
  $('.input_pas').text('Mời bạn nhập password');
  $('#password1').focus();
   return false;
 }
 else{
    $(".input_pas").text('');
  }
  if($("#password2").val().length == ""){
  $('.input_re').text('Reset lại password');
  $('#password2').focus();
  return false;
}
else{
    $(".input_re").text('');
  }
  if(pwtwo.length < 1 || pwone != pwtwo) {
  $('.input_re').text("Không trùng password yêu cầu nhập lại");
   $("input_re").focus();
  return false; 
  } 
  else if(pwone == pwtwo) {
  $('.errmsg').text("");
  }
 if($('#add').val() == "" || $('#add').val().length < 3){
    $('.input_add').text('Nhập tối thiểu 3 ký tự');
    $('#add').focus();
return false;
  }
  else{
    $('.input_add').text('');
  }
  if(phone_number($("#phones").val()) == false){
  $('.input_phone').text('Nhập số điện thoại dạng số 10 ký tự');
  $('#phones').focus();
  return false;
  }
else{
  $('.input_phone').text('');
    }
  var fmonth = $('#birthday_month').val();
  var fday = $('#birthday_day').val();
  var fyear = $('#birthday_year').val();

  if($("birthday_month").val() == "" || $("#birthday_month").val().length == ""){
    $('.input_month').text('Yêu cầu nhập tháng');
    $('#birthday_month').focus();
    return false
  }
  else {
    $('.input_month').text("");
  }

 if($("birthday_day").val() == "" || $("#birthday_day").val().length == ""){
  $('.input_day').text('Yêu cầu nhập ngày');
  $('#birthday_day').focus();
  return false
  }
 else {
  $('.input_day').text("");
  }

 if($("birthday_year").val() == "" || $("#birthday_year").val().length == ""){
    $('.input_year').text('Yêu cầu nhập năm');
    $('#birthday_year').focus();
    return false
    }
 else {
    $('.input_year').text("");
  }
if($('#f_file').val() == ""){
  $('.input_image').text('');
  $('#f_file').focus();
  return false;
}
  else{
  $('.input_image').text("");
  }


  var size = $('#f_file')[0].files[0].size/1024/1024;
if(size >=1 || size == 0){
  $('.input_image').text('Vượt quá kích thước cho phép');
  $('#f_file').focus();
  return false;
  }
else{
      $('.input_image').text('');
  }
if($("#phones").val() == ""){
  $('.input_phone').text('Mời nhập số điện thoại');
  $('#phones').focus();
  return false;
  }
if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
    $('.input_men').text('Yêu cầu nhập giới tính');
    $('#radio_button').focus();
    return false
   }
   else {
    $('.input_men').text("");
  }

  if($('#mess').val() == "" || $('#mess').val().length > 100){
  $('.input_messenger').text('Nhập tối đa 100 ký tự');
  $('#mess').focus();
  return false;
  }
  else{
  $('.input_messenger').text('');
  }
  if ($('#user') != '' && $('#mail') != '' && $('#password1') != '' && $('#password2') != '' && $('#add') != '' && $('#mess') != '' && $('#birthday_month')  != '' && $('#birthday_day')  != '' && $('#birthday_year')  != '' && $('#radio_button')  != '' && $('#f_file')  != '' && $('#phones')  != ''){
      alert('Đăng ký thành công !')
console.log($('#user'));
}

}


function phone_number(inputnumber)  
{  
  var phones = /^[0-9]{10}$/;
  return phones.test(inputnumber);
}

validate plugin
$(function(){
   $.validator.addMethod('filesize', function (value, element, param) {
      return this.optional(element) || (element.files[0].size <= param)
   });

   $("#form_registration").validate({
   rules: { 
       username:"required",
       name:"required",
        address:"required",

       email:{
         required: true,
         email: true
       },

       password :{
         required: true,
         minlength: 5
       },

       enterPassword :{
         required: true,
         minlength: 5,  
         equalTo: "#password1"
       },

       phone: {
            required: true,
            minlength: 10,
            number:true
         },

      month:"required", 
      day:"required",
      year:"required",

      file_attach:{
        required:true,
        accept:"application/pdf,image/jpeg,jpg,image/png",
        filesize: 102400
       },
      radiobutton:"required",

      message:{
         required:true,
         maxlength:100
      }
   },
   messages:{
            username:"Nhập username",
            name:"Nhập Full name",
            address:"Vui lòng nhập địa chỉ",
        email: {
             required: "Nhập email",
             email: "Validate đúng email"

         },

      password: {
         required: 'Vui lòng nhập mật khẩu',
         minlength: 'Vui lòng nhập ít nhất 5 kí tự'
         },

      enterPassword: {
         required: 'Vui lòng nhập mật khẩu',
         minlength: 'Vui lòng nhập ít nhất 5 kí tự',
         equalTo: 'Mật khẩu không trùng'
      },

      phone: {
         required: 'Vui lòng nhập số điện thoại',
         minlength: 'Vui lòng nhập ít nhất 10 ký tự',
         number:'Phải là số'
      },

         month:'Nhập tháng',
         day:'Nhập ngày',
         year:'Nhập năm',

      file_attach:{
         filesize:"Vượt quá 1 mb",
         accept:"Không phải định dạng ảnh",
         required:"Upload ảnh"
      },
      radiobutton: "Nhập giới tính",
      message:{
         required:"Giới thiệu ngắn bản thân",
         maxlength:"Không được vượt 100 ký tự"
   }
   },
   submitHandler: function(form) {
          alert("Chúc mừng bạn đã đăng ký thành công");
       }
   });
});
$(function(){
   $("#loginform").validate({
     rules: { 
          username:"required",
          password :{
            required: true
          }
     },
     messages:{
          username:"Nhập username",
          password: {
            required: 'Vui lòng nhập mật khẩu'
          }
     }
  });
});   
   
function readURL(input,image_thumb) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#image_thumb").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $("#image_thumb").show();
    }
    else {
        $("#image_thumb").attr('src', input.value);
        $("#image_thumb").show();
    }
}

// function setCookie(cname, cvalue, exprie) {
//     var d = new Date();
//     d.setTime(d.getTime() + (exprie*60*60*1000));
//     var expires = "expires="+d.toUTCString();
//     document.cookie = cname + "=" + cvalue + "; " + expires;
// }

// function getCookie(cname) {
//     var name = cname + "=";
//     var ca = document.cookie.split(';');
//     for(var i=0; i<ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0)==' ') c = c.substring(1);
//         if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
//     }
//     return "";
// }

// $(document).ready(function(){
//   $(".bay").each(function(){
//     $(this).click(function(){
//       var id = $(this).attr("data-id");
//       setCookie("shopping_cart",id,2)
//       // alert(document.cookie);
//       // alert(getCookie('shopping_cart'));
//     });
//   });
// });
 // var arrCookie = cookies.split(";");
 //    var patt = new RegExp(name);
 //    for (var i = 0; i < arrCookie.length; i++) {
 //      if(patt.test(arrCookie[i]) == true){
 //          result = arrCookie[i].slice(arrCookie[i].indexOf("=")+1);
 //          break;
 //      }
 //    }

function setCookie(name, value, day){
  var expires = "";
  if(isFinite(day) == true){  
    var date = new Date();
    date.setTime(date.getTime() + (day*24*60*60*60*1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires;
}
function getCookie(name){
  var cookies = document.cookie;
  var result = null;
  if(cookies.length > 0){
       // alert(cookies);
       var arrCookie = cookies.split(";");
    var patt = new RegExp(name);
    for (var i = 0; i < arrCookie.length; i++) {
      if(patt.test(arrCookie[i]) == true){
          result = arrCookie[i].slice(arrCookie[i].indexOf("=")+1);
          break;
      }
    }
  }
  return result;
}
// var shoppingCartItems = [];
// if (getCookie('shopping_cart')) {
//  var obj = JSON.parse(getCookie('shopping_cart'));
//  shoppingCartItems = obj;
// }
// else {
//  shoppingCartItems = [];
// }

var shoppingCartItems =[];

if (getCookie('shopping_cart')) {
   var obj = JSON.parse(getCookie('shopping_cart'));
   shoppingCartItems = obj;
}
else {
   shoppingCartItems = [];
}

$(document).ready(function(){
   showCart();

   $(".bay").each(function(){
      $(this).click(function(){
         var id      = $(this).attr('id');
         var name_sp = $(this).parents(".product").find(".title").html();
         var sr      = $(this).parents(".grid_3").find(".prevs img").attr("src");
         var price   = $(this).parents(".cart").find(".price_new").html();
         var number  = $(this).attr("number_sp","1");
         var values  = parseInt($(this).attr('number_sp'));  
         var exists  = false;
         var newarr  = {
                        "id": id,
                        "name_sp": name_sp,
                        "img": sr,
                        "pri": price,
                        "val": values
                       }
         if (shoppingCartItems.length > 0){

            $.each(shoppingCartItems, function (index, value) {
               
               if (value.id  == newarr.id){
                  value.val   = parseInt(value.val) + values;
                  exists      = true;
                  return false;

               }
            });
         }

         if (!exists) {
            shoppingCartItems.push(newarr);
         }
         var myJSON = JSON.stringify(shoppingCartItems);
         setCookie('shopping_cart', myJSON, 7);
         showCart();
      });
      
   });
});

function showCart() {
   if (shoppingCartItems.length > 0) {
      var show = "";
      var total_price =0;
      $.each(shoppingCartItems, function (index, newarr) {
         show += '<div class="newarr">';
         show += '<img src="'+ newarr.img +'" style="width: 64px; height: 64px; margin-button: 20px">';
         show += '<span class="ziland">'+ newarr.name_sp +'</span>';
         show += '<p><span class="prie">'+ newarr.val +'</span><span>x</span> <span class="mony"> '+'$'+ newarr.pri +'</span>'+ '=' +'<span>'+'$'+newarr.pri*newarr.val+'</span>'+'</p>';     
         show += '<span class="close" onclick="delElm('+newarr.id+')"><i class="fa fa-times" aria-hidden="true"></i></span>';
         total_price += newarr.val*newarr.pri;

      }); 
      $("#list").html(show);
      $('.tongcart').html(total_price);

   }
   else {
      show = '<p class="zero">Chưa có sản phẩm nào trong giỏ hàng</p>';
      $("#list").html(show);
   }
}

function delElm(idElm){
  for ( i=0;i<shoppingCartItems.length;i++){
      if(shoppingCartItems[i].id==idElm){
         shoppingCartItems.splice(i,1);
      }
  }
   var myJSON = JSON.stringify(shoppingCartItems);
   setCookie('shopping_cart', myJSON, 7);
   showCart();
}