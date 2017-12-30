<?php 
	ob_start();
	session_start();
 ?>
<div class="clear"></div> <div id="header">
	<div class="header_bar">
		<div class="container_width">
			<div class="holine fl">
				<ul>
					<li>
						<a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
						<a href="">Call</a>
						<a href="">+777(100)123</a>
					</li>		
				</ul>
			</div>
			<div class="Welcome fl">
				<p>Welcom to visitor you can <span>longin</span>or <span>create an account</span></p>
			</div>
			<div class="money">
				<ul>
					<li>
						<a href="">EN</a>
						<a href="">FR</a>
						<a href="">GM</a>
						<a href="">$</a>
						<a href="">LIRA</a>
						<a href="">ERO</a>
					</li>		
				</ul>
			</div>
		</div>
		<div class="container_width">
			<div class="header_content">
				<div class="logo fl">
					<img src="../css/images/logo.png">
					<p>Online Store Theme</p>
				</div>
				<div class="Seach fl">
					<form class="get_grid_e" name="myForm" action="" onsubmit="return validateForm()" method="post">
						<button type="buttom" onclick="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						<input type="text" name="search" id="button" placeholder="Seach entire store here..."/>
					</form>	
				</div>
				<div class="Myaccount fl">
					<ul>
						<li><a href="">My account</a></li>
						<li><a href="">My Wishilist</a></li>
						<li><a href="">Log In</a></li>
						<li><a href="http://localhost/ex21/home/registration.php">Sign Up</a></li>
						<li><a class="cart" href=""><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="tongcart"> Cart $0.00</span></a>
						<ul class="cart_cont">
							<li><p>Recently added item(s)</p>
							<div id="list">
							<!-- 	<img src="../css/images/produkt_slid2.png">
								<span class="ziland">New Zeland spring</span>

								<span class="mony">1x$39900</span> -->
								</div>
							</li>	
							<li><a href="javascript:;" class="view_cart">View shopping cart</a></li>
							<li><a href="javascript:;" class="checkout">Procced to Checkout</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container_width">
				<div class="header_button">
					<div class="menu">
						<div class="clearfixxs">
		            		<a id="pull"></a>
								<ul class="clearfixx" >
									<li><a class="actives">HOME <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
										<ul class="slider_char">
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
										</ul>
									</li>
									<li><a class="actives">SOLIDS <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
										<ul >
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
										</ul>
									</li>
									<li><a class="actives">LIQUIDS <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
										<ul>
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
											<li><a>Solids</a></li>
										</ul>
									</li>
									<li><a class="actives" href="">SPRAY</a>
									</li>
									<li><a class="actives" href="">ELECTRIC</a>
									</li>
									<li><a class="actives" href="">FOR CARS</a>
									</li>
									<li><a class="actives" href="" onclick="return false">ALL PAGES</a>
									</li>
								</ul>
						</div>
					</div>
				</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>