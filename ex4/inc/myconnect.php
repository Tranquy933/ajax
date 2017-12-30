<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
$sql = mysqli_connect($servername,$username,$password,$dbname);
	if (!$sql) {
		echo "khong thanh cong";
	}
	else{
		echo "thanh cong";
	}
?>