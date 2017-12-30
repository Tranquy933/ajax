<?php 
// kiem tra su ton tai cua session
if (isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}
// them phan tu vao mang duoc luu trong phien
$_SESSION['cart']['key1'] = 'value1';
$_SESSION['cart']['key2'] = 'value2';
// lay va su dung mang luu chu thong tin
	$cart = $_SESSION['cart'];
	foreach ($cart as $key => $value) {
		echo $value;
	}
// xoa mot bien session
unset($_SESSION['cart']);
// xoa toan bo session
unset($_SESSION);

// ket thuc phien lam viec

session_destroy();// ket thuc phien tra ve true neu thanh cong nguoc laij tra ve false
//session ket thuc khi nguoi dung dong trinh duyet, mot khoang thoi gian nhat dinh maf nguoi dung khong coyeu cau nao
//Ham session_name  lay ten cua cookie theo phien
// session_get_cookie_params lay mang lien ket chua tat ca ca tham so chua cookye trong phien


 ?>