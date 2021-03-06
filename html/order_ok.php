<html>
	<head>
		<title>Happy Art Shop</title>
		<meta http-equiv="content-type" content="text/html charset=utf-8">
		<link href="include/css/bootstrap-theme.min.css" rel="stylesheet">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="include/css/bootstrap.min.css" rel="stylesheet">
		<link href="include/css/carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="include/css/bootstrap.css">
		<link rel="icon" href="../../favicon.ico">
		<link href="include/font.css" rel="stylesheet" type="text/css">
		<script language="Javascript" src="include/common.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="include/js/ie-emulation-modes-warning.js"></script>
		
		<style>		
			#total{
				width:940px; 
				height:100px;
			}
			p { 
				margin:20px 0px; 
			}
			.carousel-inner > .item > img {
			  top: 10;
			  left: 0;
			  width: 100%;
			  height: 500px;
			} 
			.carousel {
				height : 500px;
			}
			.card {
				padding:0;
				width:90rem; 
				height:40rem; 
				border-radius:20px;
				margin-bottom:20px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			
			.form-signin .form-control {
				position: relative;
				height: auto;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				padding: 4px;
				font-size: 14px;
			}

		</style>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
	</head>
	<body style="margin:0">
		<center>
		<!--?????? ?????? ??? ?????? ----------------------------------->
			<?php
				include "main_top.php";
			?>
		<!--?????? ?????? ??? ?????? ???----------------------------------->

		<!-------------------------------------------------------------------------------------------->	
		<!-- ?????? : ?????? ???????????? ????????? ??????                                                       -->
		<!-------------------------------------------------------------------------------------------->	
		<div class="container">
			<br><br><br><br>
			<div class="row">
				<img src="images/Happy_Art_Shop/order_cart.PNG"style="width:70; height:70" >
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_pay.PNG" style="width:70; height:70">
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_ok.PNG">
			</div>
			<div class="row">
				<div style="margin-top:0px; width:100; float:left; margin-left:155px">
					<h4><font color="C4C4C4"><b>???????????????</b></font></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:270px">
					<h4><font color="C4C4C4"><b>??????</b></font></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:280px">
					<h4><b>????????????</b></h4>
				</div>
			</div>
		</div>
		
		<div class="container">
			<hr><br>
			<div class="card"><br>
				<img src="images/Happy_Art_Shop/main_Logo_small.png">
				<h1 style="margin-top:35px"><font color="blue"><b>???????????????.????????? ?????????????????????.<b></font></h1>
				<h4 style="margin-top:20px"><b>?????? happy Art Shop??? ?????? ????????? ?????? ?????? ?????? ????????????.</b></h4>
				<h4><b>????????? ????????? ????????? ????????????.</b></h4><br>
				<button class="btn btn-primary" onclick="location.href='index.html'" style="margin-right:5px; width:100px">????????????</button>
			</div>
		</div>
		
		
		<!-------------------------------------------------------------------------------------------->	
		<!-- ??? : ?????? ???????????? ????????? ??????                                                         -->
		<!-------------------------------------------------------------------------------------------->	
		<br><br><br><br><br><br>
		<!-- ?????? ?????? ?????? ?????? (main_bottom) : ????????????/????????????/????????????/?????????????????? ... ---------->
		<?php
			include "main_bottom.php";
		?>
		<!-- ?????? ?????? ?????? ??? (main_bottom) : ????????????/????????????/????????????/?????????????????? ... ---------->

		&nbsp

	</body>
</html>
