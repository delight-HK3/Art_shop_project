<?php
	include "common.php";
	$menu=$_REQUEST[menu];
	$query="select * from product where menu11 = $menu and status11=1 order by no11 ";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result);
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
	</head>
	<body style="margin:0">
		<center>
		<!--상단 로고 및 메뉴 ----------------------------------->
			<?
				include "main_top.php";
			?>
		<!--상단 로고 및 메뉴 끝----------------------------------->

	<!-------------------------------------------------------------------------------------------->	
	<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
	<!-------------------------------------------------------------------------------------------->	
		<br><br>
		<?php
			if($menu == 1){
				echo("<h1><font style='vertical-align: inherit;'><b>물감</b></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 물감을 구비 하고있습니다.</font></p>");
				echo("<br>");
			}
			else if($menu == 2){

				echo("<h1><font style='vertical-align: inherit;'><strong>색연필</strong></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 색연필을 고객님께 판매하고 있습니다.</font></p>");
				echo("<br>");
			}
			else if($menu == 3){
				echo("<h1><font style='vertical-align: inherit;'><strong>붓</strong></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 붓을 고객님께 판매하고 있습니다.</font></p>");
				echo("<br>");
			}
			else if($menu == 4){
				echo("<h1><font style='vertical-align: inherit;'><b>마카</b></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 마카를 고객님께 판매하고 있습니다.</font></font></p>");
				echo("<br>");
			}
			else if($menu == 5){
				echo("<h1><font style='vertical-align: inherit;'><b>용지</b></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 용지를 고객님께 판매하고 있습니다.</font></font></p>");
				echo("<br>");
			}
			else if($menu == 6){
				echo("<h1><font style='vertical-align: inherit;'><b>부재료</b></font></h1>");
				echo("<p><font style='vertical-align: inherit;'>총 <b>$count</b> 개의 부재료를 고객님께 판매하고 있습니다.</font></p>");
				echo("<br>");
			}
		?>

		<div class="container">
			<ul class="nav nav-tabs" id="myTab">
			  <li class="nav-item active">
				<a class="nav-link" data-toggle="tab" href="#qwe"><font color="#009FDC">신상품순 정렬</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#asd"><font color="#009FDC">고가격순 정렬</font></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#zxc"><font color="#009FDC">저가격순 정렬</font></a>
			  </li>
			   <li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#product"><font color="#009FDC">상품명순 정렬</font></a>
			  </li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="qwe"><br><br><br><br>
					<?php
						include "sort/productNew.php";
					?>
				</div>
				<div class="tab-pane" id="asd"><br><br><br><br>
					<?php
						include "sort/productHigh.php";
					?>
				</div>
				<div class="tab-pane" id="zxc"><br><br><br><br>
					<?php
						include "sort/productLow.php";
					?>
				</div>
				<div class="tab-pane" id="product"><br><br><br><br>
					<?php
						include "sort/productName.php";
					?>
				</div>
			</div>

		</div>
		<br><br><br><br>
	<!-------------------------------------------------------------------------------------------->	
	<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
	<!-------------------------------------------------------------------------------------------->	
	<br><br><br>

	<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
	<?php
		include "main_bottom.php";
	?>
	<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

	&nbsp
	</body>
</html>
