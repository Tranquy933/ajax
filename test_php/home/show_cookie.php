	
<?php 

	if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
		echo ("userNam la :".$_COOKIE['user']);
		echo ("Password la :".$_COOKIE['pass']);
	}
	else
	{
		echo "cookie khong ton tai";
	}

 ?>
 <a href="cookie.php">Tro ve trang cookie</a>
 <a href="delete_cookie.php">Huy cookie</a>
