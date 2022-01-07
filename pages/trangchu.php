<html>

<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content =" width=device -width , initial-scale =1.0"> 
		<title>Trang chu</title>
		<link rel="stylesheet" type ="text/css" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	</head>

	<body>
	<div class="wrapper">
			<div class="anh">
					<div class="head-sroll" id="myHeader">
			<div class ="heaader"	>
	
				<a href="#" class="logo">TeaTeam</a>
				<nav>
					<ul>
						<li> <a href="#">Trang chủ</a></li>
						<li> <a href="baiviet/tintuc.php">Tin tức</a></li>
						<li> <a href="order/order.php">Order</a></li>

					</ul>
				</nav>
				
							
						</div>
					</div>
			<div class="loichao">
				<h3>Chào mừng bạn đến một rừng chè và trại bò sữa Việt Nam
				</h3>
				<h3 class="gay"> Đậm đà là 9 <br> Tự nhiên là 10 <br> Lợi nhuận là 11</h3>
				<p class="lo"> Trà sữa chúng tôi ở đây là thành phần tự nhiên nên không cần lo lắng hay thắc mắc gì hết</p>
			</div>
			<div class="order"><a href="order/order.php"> Đặt ngay đê!<i class="material-icons">favorite</i></a></div>
			
			</div></div>

		<?php
			include("menu.php");
			include("main.php");
		?>
		

			
<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {

    document.getElementById("myHeader").style.fontSize = "18px";
    document.getElementById("myHeader").style.background="#282828";
    document.getElementById("myHeader").style.position="fixed";
    
  } else {
    document.getElementById("myHeader").style.fontSize = null;
     document.getElementById("myHeader").style.background=null;

  }
}
</script>
				
	

		
	
</body>
</html>

