<?php
	include "common.php";
	$no=$_REQUEST[no];
?>
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
			#imgshow{
				width:500px; 
				height:160px;
				margin-top:15px;
				border:1px solid #CCCCCC;
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
		<!--상단 로고 및 메뉴 ----------------------------------->
			<?php
				include "main_top.php";
			?>
		<!--상단 로고 및 메뉴 끝----------------------------------->

		<!-------------------------------------------------------------------------------------------->	
		<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
		<!-------------------------------------------------------------------------------------------->	
		<div class="container"><br>
			<h1><b>제휴브랜드</b></h1><br>
			<h4>저희 Happy Art Shop에서는 현재 <b>13</b>개의 브랜드와 제휴를 맺고 있습니다.</h4><br><br>
			<?php
				for ($i=1;  $i<14;  $i++){
					echo("<div class='col-sm-6'>
						<img src='images/Happy_Art_Shop/brand$i.PNG' id='imgshow'>
					</div>");
				}
			?>
		</div>
		<br><br><br><br>
		<!-------------------------------------------------------------------------------------------->	
		<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
		<!-------------------------------------------------------------------------------------------->	

		<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
		<?php
			include "main_bottom.php";
		?>
		<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
		&nbsp
	</body>
</html>
