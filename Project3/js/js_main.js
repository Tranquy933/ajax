// click slide
$(document).ready(function(){
	$(".small_img").each(function(){
		$(".small_img").click(function(){
			$(".small_img").parents(".wrapper_small_img").find(".icon_slide").hide();
			$(".small_img").removeClass("small_img_active");
			var src_small_img = $(this).attr("src");
			$(".big_slide").attr("src",src_small_img);
			$(this).parents(".wrapper_small_img").find(".icon_slide").show();
			$(this).addClass("small_img_active");
		});
	});	

});

// next back product
function action_next(wrapper,content){
	var item_width = $(content).outerWidth(); 
	var left_value = item_width * (-1); 
	$(wrapper).css({'left' : left_value});
	var left_indent = parseInt($(wrapper).css('left')) - item_width;
	$(wrapper + ':not(:animated)').animate({'left' : left_indent}, 200, function () {
		$(content + ':last').after($(content + ':first'));                  
		$(wrapper).css({'left' : left_value});
	});
};
function action_back(wrapper,content){
	var item_width = $(content).outerWidth(); 
	var left_value = item_width * (-1); 
	$(wrapper).css({'left' : left_value});
	var left_indent = parseInt($(wrapper).css('left')) + item_width;  
	$(wrapper + ':not(:animated)').animate({'left' : left_indent}, 200,function(){      
		$(content + ':first').before($(content + ':last'));          
		$(wrapper).css({'left' : left_value});
	}); 
}

$(document).ready(function(){
	$(".all_next").click(function(){
		var click_id = $(this).data("id");
		switch(click_id) {
			case "product":
			var wrapper = ".product";
			var content = ".product ul li";
			break;
		}
		action_next(wrapper,content);    
	});
	$(".all_back").click(function(){
		var click_id = $(this).data("id");
		switch(click_id) {
			case "product":
			var wrapper = ".product";
			var content = ".product ul li";
			break;
		}
		action_back(wrapper,content);
	}); 
});

// validate form search
$(document).ready(function(){
	$(".submit_search").click(function(){
		var str = $(".text_search").val();
		if(str==""){
			$(".text_search").attr("style","border:1px solid red");
			alert("Bạn chưa nhập thông tin tìm kiếm !!!");
		}
		else
			$(".text_search").removeAttr("style");
		$(".text_search").val("");
	});
});

// validate email
$(document).ready(function(){
	function validateEmail(email){
		var check = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;
		var emailtest = check.test(email)
		if(emailtest==true){
			return true;
		}
		else
			return false;
	};
	$(".input_submit_footer").click(function(){
		var email=$(".input_text_footer").val();
		if (email=="") {
			alert("Vui lòng nhập email");
			$(".input_text_footer").attr("style","border:1px solid red");
		}
		else if (email!=""&&validateEmail(email)==false){
			alert("Email không đúng định dạng");
		}
		else{
			alert("Chúc mừng");
			$(".input_text_footer").val("");
			$(".input_text_footer").removeAttr("style");
		}
	});
});

// back to top
$(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() >= 300) {
			$('.wrapper_back_to_top').fadeIn();
		} else {
			$('.wrapper_back_to_top').fadeOut();
		}
	});
	$('.back_to_top').click(function() {
		$("html, body").animate({scrollTop: 0}, 100);
	});
});

// validate form register
// $(function(){
// 	$(".btn_signup").click(function(){
// 		var check = true;
// 		var username = $(".txt_user").val();
// 		var password = $(".txt_password").val();
// 		var repassword =$(".txt_repassword").val();
// 		var fullname = $(".txt_fullname").val();
// 		var email =$(".txt_email").val();
// 		var phone = $(".txt_phone").val();
// 		var addres = $(".txt_addres").val();
// 		var yourself = $(".txt_yourself").val();
// 		var sex = $(".wrapper_sex select option:selected").val();
// 		var day =$(".bd_day option:selected").val();
// 		var month =$(".bd_m option:selected").val();
// 		var year =$(".bd_y option:selected").val();

// 		if(!validate_username(username)) check = false;
// 		if(!validate_password(password,repassword)) check = false;
// 		if(!validate_fullname(fullname)) check = false;
// 		if(!validate_email(email)) check = false;
// 		if(!validate_phone(phone)) check = false;
// 		if(!validate_addres(addres)) check = false;
// 		if(!validate_yourself(yourself)) check = false;
// 		if(!validate_sex(sex)) check = false;
// 		if(!validate_bd(day,month,year)) check = false;

// 		if(check==true){
// 			alert("Chúc mừng bạn đã đăng ký thành công");
// 		}
// 		return check;
// 	});
// });

// function validate_username(name){
// 	if (name=="") {
// 		$(".txt_user").parents('.wrapper').find(".error").html("Vui lòng nhập Username");	
// 		return false;
// 	}
// 	else if (name.length<3){
// 		$(".txt_user").parents('.wrapper').find(".error").html("Vui lòng nhập Username tối thiểu 3 kí tự");
// 		return false;
// 	}
// 	else{
// 		$(".txt_user").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_password(pass,repass){
// 	if (pass=="") {
// 		$(".txt_password").parents('.wrapper').find(".error").html("Vui lòng nhập Password");	
// 		return false;
// 	}
// 	else if (pass.length<6){
// 		$(".txt_password").parents('.wrapper').find(".error").html("Vui lòng nhập Password tối thiểu 6 kí tự");
// 		return false;
// 	}
// 	else{
// 		$(".txt_password").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// 	if(repass==""){
// 		$(".txt_repassword").parents('.wrapper').find(".error").html("Vui lòng nhập lại Password");
// 		return false;
// 	}
// 	else if (repass != pass){
// 		$(".txt_repassword").parents('.wrapper').find(".error").html("Vui lòng nhập 2 password giống nhau");
// 		return false;
// 	}
// 	else{
// 		$(".txt_repassword").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}

// };

// function validate_fullname(fullname){
// 	if (fullname=="") {
// 		$(".txt_fullname").parents('.wrapper').find(".error").html("Vui lòng nhập tên đầy đủ của bạn");	
// 		return false;
// 	}
// 	else{
// 		$(".txt_fullname").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_email(email){
// 	var check = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;
// 	var emailtest = check.test(email)
// 	if (email=="") {
// 		$(".txt_email").parents('.wrapper').find(".error").html("Vui lòng nhập email");	
// 		return false;
// 	}
// 	else if (emailtest==false){
// 		$(".txt_email").parents('.wrapper').find(".error").html("Email không đúng định dạng");	
// 		return false;
// 	}
// 	else{
// 		$(".txt_email").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_phone(phone){
// 	var check = /^[0-9]*$/;
// 	var phonetest = check.test(phone);
// 	if (phone==""){
// 		$(".txt_phone").parents('.wrapper').find(".error").html("Vui lòng nhập số điện thoại");	
// 		return false;
// 	}
// 	else if (phonetest==false){
// 		$(".txt_phone").parents('.wrapper').find(".error").html("Số điện thoại bắt buộc phải là số");
// 		return false;
// 	}
// 	else{
// 		$(".txt_phone").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_addres(addres){
// 	if (addres==""){
// 		$(".txt_addres").parents('.wrapper').find(".error").html("Vui lòng nhập địa chỉ");	
// 		return false;
// 	}
// 	else if (addres.length<3){
// 		$(".txt_addres").parents('.wrapper').find(".error").html("Địa chỉ tối thiếu phải có 3 kí tự");	
// 		return false;
// 	}
// 	else{
// 		$(".txt_addres").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_yourself(yourself){
// 	if (yourself==""){
// 		$(".txt_yourself").parents('.wrapper').find(".error").html("Vui lòng nhập giới thiệu về bản thân");	
// 		return false;
// 	}
// 	else if (yourself.length<100){
// 		$(".txt_yourself").parents('.wrapper').find(".error").html("Tối thiểu 100 kí tự");	
// 		return false;
// 	}
// 	else{
// 		$(".txt_yourself").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_sex(sex){
// 	if (sex==""){
// 		$(".select_sex").parents('.wrapper').find(".error").html("Vui lòng chọn giới tính");
// 		return false;
// 	}
// 	else{
// 		$(".select_sex").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_bd(day,month,year){
// 	if (day==""){
// 		$(".bd_day").parents('.wrapper').find(".error").html("Vui lòng chọn ngày sinh");
// 		return false;
// 	}
// 	else if (month==""){
// 		$(".bd_m").parents('.wrapper').find(".error").html("Vui lòng chọn tháng sinh");
// 		return false;
// 	}
// 	else if (year==""){
// 		$(".bd_y").parents('.wrapper').find(".error").html("Vui lòng chọn năm sinh");
// 		return false;
// 	}
// 	else {
// 		$(".bd_m").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// }

// function validate_img_upload(input){
// 	var check = /^([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/;
// 	var size = $(".img_upload")[0].files[0].size;
// 	var filename = $('.img_upload').val();
// 	var imgtest = check.test(filename);
// 	$(".avatar_img").attr("src",filename);
// 	if (imgtest==false){
// 		$(".img_upload").parents('.wrapper').find(".error").html("Không đúng định dạng ảnh");
// 		$('.avatar_img').attr('src','');
// 		return false;
// 	}
// 	else if (size>1024){
// 		$(".img_upload").parents('.wrapper').find(".error").html("Dung lượng ảnh không được vượt quá 1mb");
// 		$('.avatar_img').attr('src','');
// 		return false;
// 	}
// 	else{
// 		var reader = new FileReader();
// 		reader.onload = function(e){
// 			$('.avatar_img').attr('src',e.target.result);
// 		}
// 		reader.readAsDataURL(input.files[0]);
// 		$(".img_upload").parents('.wrapper').find(".error").html("");
// 		return true;
// 	}
// };


// validate plugin
$(document).ready(function() {
	$.validator.addMethod('filesize', function(value, element, param) {
    // param = size (en bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
});
	$("#formvld").validate({
	    rules: {
	        username: {
	        	required:true,
	        	minlength:3
	        },
	        password: {
	        	required:true,
	        	minlength:6
	        },
	        repassword: {
	        	required:true,
	        	equalTo: ".txt_password"
	        },
	        fullname:"required",
	        email:{
	        	required:true,
	        	email:true
	        },
	        phone:{
	        	required:true,
	        	number:true,
	        	minlength:9
	        },
	        addres:{
	        	required:true,
	        	minlength:3
	        },
	        yourself:{
	        	required:true,
	        	minlength:10
	        },
	        sex:"required",
	        day:"required",
	        month:"required",
	        year:"required",
	        image:{
	        	required:true,
	        	accept: "image/*",
	        	filesize:1048576   /*max 1 mb*/
	        }
	    },
	    messages: {
	        username:{
	        	required: "Vui lòng nhập username",
	        	minlength: "Tối thiếu 3 kí tự"
	        },
	        password:{
	        	required: "Vui lòng nhập password",
	        	minlength: "Tối thiếu 6 kí tự"
	        },
	        repassword:{
	        	required: "Vui lòng nhập lại password",
	        	equalTo: "Mật khẩu không trùng"
	        },
	        fullname:"Vui lòng nhập tên đầy đủ",
	        email:{
	        	required:"Vui lòng nhập email",
	        	email:"Email không đúng định dạng"
	        },
	        phone:{
	        	required:"Vui lòng nhập số điện thoại",
	        	number:"Số điện thoại bắt buộc phải là số",
	        	minlength:"Số điện thoại phải từ 9 số trở lên"
	        },
	        addres:{
	        	required:"Vui lòng nhập địa chỉ",
	        	minlength:"Địa chỉ phải từ 3 kí tự trở lên"
	        },
	        yourself:{
	        	required:"Vui lòng nhập giới thiệu bản thân",
	        	minlength:"Phải từ 10 kí tự trở lên"
	        },
	        sex:"Vui lòng chọn giới tính",
	        day:"Vui lòng chọn ngày sinh",
	        month:"Vui lòng chọn tháng sinh",
	        year:"Vui lòng chọn năm sinh",
	        image:{
	        	required:"Vui lòng chọn ảnh đại diện",
	        	accept:"Ảnh không đúng định dạng",
	        	filesize:"Dung lượng ảnh quá lớn"

	        }
	    },submitHandler: function(form) {
   			 // alert("Chúc mừng bạn đã đăng ký thành công");
   			 form.submit();
  		}

	});
});




function validate_img_upload(input){
	var reader = new FileReader();
	reader.onload = function(e){
		$('.avatar_img').attr('src',e.target.result);
	}
	reader.readAsDataURL(input.files[0]);
};


// validate form login bằng plugin
$(document).ready(function(){
		$("#form_login").validate({
	    rules: {
	        login_user: {
	        	required:true
	        },
	        login_password: {
	        	required:true
	        }
	    },
	    messages: {
	        login_user:{
	        	required: "Vui lòng nhập username"
	        },
	        login_password:{
	        	required: "Vui lòng nhập password"
	        }
	    },submitHandler: function(form) {
   			 form.submit();
  		}

	});
});