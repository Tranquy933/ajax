<?php 
	// chuyen doi chu trong chuoi string

	// chuyen doi tat ca chu cai trong chuoi thanh chu in hoa
	echo strtoupper("hoc lap trinh php <br>"); 
	//chuyen doi tat ca chu cai thanh chu thuong
	echo strtolower('HOC LAP TRINH PHP <br>');
	//chuyen doi chu cai dau tien thanh chu in hoa
	echo ucfirst('hoc lap trinh php <br>');
	//chuyen tat ca chu cai dau tien trong chuoi thanh chu in hoa
	echo ucwords('hoc lap trinh php <br>');

	// chia mot chuoi
	$str1 = '21356465';
		echo substr(chunk_split($str1, 2, ':'), 0,-1). '<br>'; // chunk_split ($bien, so phan tu cat, dau)cat chuoi thanh tung phan tu nho 
	//kiem tra chuoi da xem co chua chuoi nao nua khong
	$str2 = "hoc lap trinh php co ban";
	if (strpos($str2, 'trinh') != false) { // strpos tim kiem vi tri dau tien cua ky tu hoac chuoi co trong vi tri nguon khong
		echo "co trong chuoi string <br>";
	}
	else{
		echo "khong co trong chuoi <br>";
	}

	// chuyen doi gia tri cua bien thanh chuoi
	$x = 20; // $x la mot so nguyen
	$str3 = (string)$x; // ep sang kieu string
	if($x === $str3){	// === so sanh bang nhau cung kieu
		echo "chung bang nhau <br>";
	}
	else{
		echo "chung khong bang nhau <br>";
	}
	// lay username cua dia chi email da cho
	$email = 'tranquyictu@gmail.com';
		$user = strstr($email, '@', false); // strstr() tìm kiem vị trí đau tiên cua kí tự hoặc chuoi con xuat hiện trong chuoi nguon
		echo $user."<br>";
	// lay n ky tu cuoi cua mot chuoi
		$str4 = "hoc lap trinh php co ban";		
		echo substr($str4, -3). "<br>";
		echo preg_replace('/hoc/', 'tim', $str4	). '<br>';
	//xoa phan tu cua chuoi bat dau tu dau chuoi
		$chuoi_con = 'tranquy';
			$chuoi_ban_dau = 'tranquyictu@gmail.com';
			if (substr($chuoi_ban_dau, 0, strlen($chuoi_con)) == $chuoi_con) {
				$chuoi_ban_dau = substr($chuoi_ban_dau, strlen($chuoi_con));
			}
			echo $chuoi_ban_dau. "<br>";
	// chen mot chuoi vao mot vi tri bat ky trong mot chuoi khac
		$chuoi_can_chen = 'pt';
		$chuoi_moi = substr_replace($chuoi_ban_dau, $chuoi_can_chen, 4, 0); // substr_replace() thay the mot soan cua chuoi bang chuoi nao do giong nhu kieu cat bo 1 doan chuoi roi thay the bang doan khac
		echo $chuoi_moi. '<br>';

		$string = "hoc php co ban";
		$name = explode(' ', trim($string));
		echo $name[0]. "<br>";

		// chuyen mot mang thanh chuoi va cach nhau ""
		$arr = array('sd','asd', 'asdasd');
		$com_mat = implode(',', $arr);
		echo $com_mat;


		$ff = explode(' ', $string);
		print_r($ff);



	echo "abc "." asdasd <br>";
	print_r (str_word_count("helo adidat", 2))."<br>";

	echo addcslashes("hoclaptrinh.comSDMSKD", 'a..z')."<br>"; // them / vao chuoi tuy thuoc 
	echo stripcslashes("hoc\ lap trinh\ php"). "<br>"; // xoa dau \
	echo("hoc lap trinh php"); // chuyen chuoi thanh so nguyen
	echo md5("asdas"); // tra  ve mot day 32 ky tu
	echo sha1("asxdas <br>"); // tra ve 40 ky tu
	echo strip_tags("<h1>adasd</h1>"). "<br>"; // thuc the html
	echo substr( 'freetuts.net', 0, 8);


?>
