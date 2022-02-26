<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
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
			img { 
				max-width: 100%; height: auto; 
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
				width:28rem; 
				height:40rem; 
				border-radius:20px;
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
	</head>
<body style="margin:0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="include/js/bootstrap.js"></script>

<center>
<!--상단 로고 및 메뉴 ----------------------------------->
	<?
		include "main_top.php";
	?>
<!--상단 로고 및 메뉴 끝----------------------------------->

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	
	<div class="container">
		<h1><b>찾아오는 길</b></h1>
		<h5>실제 제품을 보고 싶은 고객님은 매장을 방문해 주시기 바랍니다.</h5><br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1878.8086154985615!2d127.05551026480602!3d37.63117150476848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a334389e7cd7a44!2z7J24642V64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1622682216700!5m2!1sko!2skr" width="800" height="600" style="border:0; "  allowfullscreen="" loading="lazy"></iframe><br><br>
		<div class="row" style="width:700px; height:30px">
			<img src="images/Happy_Art_Shop/subway.png" style="width:30px; height:30px; float:left">
			<h5 style="float:left; text-align: center">&nbsp지하철 : 월계역 3번출구에서 10분 도보이동</h5>
		</div><br>

		<div class="row" style="width:700px; height:30px">
			<img src="images/Happy_Art_Shop/front-of-bus.png" style="width:30px; height:30px; float:left">
			<h5 style="float:left; text-align: center">&nbsp버스 : 광운대 역 하차 후 1133, 1130 버스 탑승 후 인덕대학교에서 하차 </h5>
		</div><br>
	</div>
<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	
<br><br><br>

<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
<?
	include "main_bottom.php";
?>
<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

&nbsp

</body>
</html>