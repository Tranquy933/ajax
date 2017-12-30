$(function(){
	$('#login_form').validate({
		rules : {
			username : {
				required : true
			},
			password : {
				required : true,
				minlength : 6
			}
		},
		messages : {
			username : {
				required : "Username không được để trống"
			},
			password : {
				required : "Mật khẩu không được để trống",
				minlength : "Mật khẩu phải có ít nhất 6 ký tự"
			}
		},
		submitHandler : function (form) {
		include("../includes/inc_login.php");
		}
	});

})