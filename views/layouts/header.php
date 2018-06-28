<!DOCTYPE html>
<html>
<head>
<title>Crowdme</title>
<link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/template/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="/template/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="/template/text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="/template/js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="">
                
			</div>
			<div class="header-left">		
					<ul>
						<?php if(User::isGuest()): ?>
							<li ><a href="/user/login/">Вхід</a></li>
							<li><a  href="/user/register/">Регістрація</a></li>
						<?php else: ?>
							<li><a href="/user/logout/">Вихід</a></li>
						<?php endif; ?>
					</ul>
					<div class="cart box_1">
						<a href="/cart">
						<h3> <div class="total">
                            <span class="">Корзина</span> (<span><?php echo Cart::countItems(); ?></span> шт.)</div>
							<img src="/template/images/cart.png" alt=""/></h3>
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="/"><img src="/template/images/logo_new.jpg" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					<li class="active grid"><a class="color8" href="/">Головна</a></li>	
				    <li><a class="color1" href="/catalog/">Каталог</a></li>
				    <li class="grid"><a class="color2" href="/cabinet/">Мій кабінет</a></li>				
				    <li><a class="color6" href="/contacts/">Контакти</a></li>
			    </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>