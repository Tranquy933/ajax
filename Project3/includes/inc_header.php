<div class="wrapper_header">
	<div class="container">
		<div class="header">
				
				<span class="header_phone"><i class="fa fa-phone" aria-hidden="true"></i>1-888-123-4567</span>
				<span class="header_ship">Free Ground Shipping for Products over $100</span>
				<div class="wrapper_icon_contact_top">
					<div class="circle_contact">
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</div>
					<div class="circle_contact">
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
					<div class="circle_contact">
						<a href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a>
					</div>
					<div class="circle_contact">
						<a href=""><i class="fa fa-google" aria-hidden="true"></i></a>
					</div>
				</div>
				<span class="header_account"><a href="">
					 <?php 
						if(isset($_SESSION['username'])) echo 'Xin chào  : '.$_SESSION['username'];
						else echo "My Account";
					 ?>
				</a></span>
				<a href="" class="cart_left">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<span>123</span>
				</a>
				<a href="" class="cart_right">
					<span>$0.00</span>
				</a>
		</div>
	</div>
</div>

<div class="wrapper_top">
	<div class="container">
			<div class="search">
				<input type="text" placeholder="Enter Products Details" class="text_search">
				<i class="fa fa-search fa-fw" aria-hidden="true"></i>
				<input type="submit" value="SEARCH" class="submit_search">
			</div>
		<div class="top">
			<a href="../home/index.php">
				<div class="logo_top">
				<img src="../images/logo_top.jpg">
				</div>
			</a>
			
			<div class="menu">
				<ul>
					<li>
						<a href="">SPECIALS<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
						<ul class="sub_menu">
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
						</ul>
					</li>
					<li><a href="">FRUITS & VEG</a></li>
					<li>
						<a href="">FOOD PRODUCTS<i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
						<ul class="sub_menu">
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
							<li><a href="">Menu con</a></li>
						</ul>
					</li>
					<li><a href="">LOCATE STORE</a></li>
					<li><a href="">FAN CLUB</a></li>
				</ul>
			</div>
			<div class="sign_reg">
				<div class="sign_in">
					<a href="../home/login.php">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<span>SIGN IN</span>
					</a>
				</div>
				<div class="reg">
					<a href="../home/register.php">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<span>REGISTER</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>