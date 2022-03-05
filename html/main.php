<?php
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
		<div class="container">
		  <div class="row">
			<div class="col-sm-4">
				<img src="images/Happy_Art_Shop/main_go4.png">
				<h3><b>제품의 성능 보장</b></h3>        
				<p>저희 Happy Art Shop에서는 고객님들의 작품의 완성도를 더욱 높히고자
				국/내외로 검증된 최상의 성능을 자랑하는 제품만을 고집하고 있습니다.</p>

			</div>
			<div class="col-sm-4">
				<img src="images/Happy_Art_Shop/main_go3.png">
				<h3><b>인증된 보안</b></h3>        
				<p>고객님들이 저희들을 믿고 소중히 주신 개인정보를 확실히 지키기위해
				CAFE 24 보안 시스템을 이용하고 있습니다.</p>
			</div>
			<div class="col-sm-4">
				<img src="images/Happy_Art_Shop/main_go5.png">
				<h3><b>합리적인 가격</b></h3>        
				<p>금전적 여유라는 장벽때문에 좋은 제품을 구입하지 못하여 작품을 완성 못하고 있는 고객님들을 위해
				저희 Happy Art Shop 에서는 시중가보다 저렴하게 제품을 <br>판매하고 있습니다.</p>
			</div>
			<div class="col-sm-6">
				<img src="images/Happy_Art_Shop/main_go1.png">
				<h3><b>자연 친화 기업</b></h3>        
				<p>세계적으로 환경에 관심이 높아지고 있는 지금 <br>저희 Happy Art Shop에서도 
				환경에 도움이 되고자 <br>고객님들이 구매하신 제품의 수익금 일부를 <br>WWF 환경단체에 기부하고 있습니다.</p>

			</div>
			<div class="col-sm-6">
				<img src="images/Happy_Art_Shop/main_go2.png">
				<h3><b>다양한 종류</b></h3>        
				<p>Happy Art Shop에서는 고객님들이 큭정 제품을 <br>구하기위해 많은장소를 돌아다니는 수고를 <br>덜어드리기 위해
				최대한 많은 제품을 판매하고 있습니다.</p>
			</div>
		  </div>
		</div>
		<br><br><br><br>
		<h1><font style="vertical-align: inherit;"><b>최신상품</b></font></h1>
		<p><font style="vertical-align: inherit;">저희 Happy Art Shop 에서는 언제나 고객님께 최고의 품질의 제품을 제공 할 수 있도록 항상 노력하고 있습니다.</font></p><br>
		<!---- 화면 우측(신상품) 시작 -------------------------------------------------->	
			<?php
				$query="select * from product where icon_new11=1 and status11=1 order by rand() limit 15";
				$result=mysqli_query($db,$query); //sql 실행
				if (!$result){
					exit("에러: $query");  //에러조사
				}
				$num_col=3;   $num_row=2;                   // column수, row수
				$count=mysqli_num_rows($result);           // 출력할 제품 개수 7개
				$icount=0;       // 출력한 제품개수 카운터
				echo("<div class='container'>");
				for ($ir=0; $ir<$num_row; $ir++)
				{
					echo("<div class='row'>");
					for ($ic=0;  $ic<$num_col;  $ic++)
					{
						if ($icount < $count){
							$row=mysqli_fetch_array($result);
							$price = number_format($row[price11]);
							$saleprice = round($row[price11]*(100-$row[discount11])/100);
							$disprice = number_format($saleprice);

							if($row[icon_new11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-info'><font color='2C93C5'>New</font></h4>",
											"<h5>$price 원</h5>");

								if($row[icon_hit11]==1){
									$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger'>New <font color='FF3333'>Hit</font></h4>",
											   "<h5>$price 원</h5>");
								}
								if($row[icon_sale11]==1){
									$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>New <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
											   "<h5><strike>$price 원</strike></h5>",
											   "<h5>$disprice 원</h5>");
								}
								if($row[icon_hit11]==1 && $row[icon_sale11]==1){
									$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>New Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
											   "<h5><strike>$price 원</strike></h5>",
											   "<h5>$disprice 원</h5>");
								}
							}
							$icon=implode(" ",$tmp);
							echo("<div class='col-sm-4'>
									<div class='card' style='margin-bottom:60px'>
										<a href='product_detail.php?no=$row[no11]'><img class='img-thumbnail' width='250' height='250' style='margin-top:10px' src='product/$row[image1_11]' alt='Card image cap'></a>
										<a href='product_detail.php?no=$row[no11]'><h5><font color='444444'><b>$row[name11]</b></font></h5></a>
										$icon
									</div>
								</div>");
						}
						else{
							echo("<td></td>");      // 제품 없는 경우
						}
						$icount++;
					}
					echo("</div>");
				}
				echo("</div>");
			?>

			<br><br><br><br>
			<div class="row center clearfix">
				<div class="section-contact col-lg-4 col-md-4 bottommargin-sm">
					<div class="p-3" style="border: 1px solid #e6e6e6; width : 500px; height : 200px">
						<h1><i class="fa fa-map-o" aria-hidden="true"></i></h1>
						<h3 class="mb-1">STORE</h3>
						<h5>실제 제품을 보고 싶은 고객님은 매장을 방문해 주시기 바랍니다.</h5>
						<a href="map.php" ><button class="btn btn-default" type="submit">찾아오는 길</button></a>
					</div>
				</div>
				<div class="section-contact col-lg-4 col-md-4 bottommargin-sm">
					<div class="p-3" style="border: 1px solid #e6e6e6; width : 500px; height : 200px">
						<h1><i class="fa fa-envelope-o" aria-hidden="true"></i></h1>
						<h3 class="mb-1">QUESTION</h3>
						<h5>저희 쇼핑몰에 대해 궁금하신 점이 있으시면 성심성의껏 답해드리겠습니다.</h5>
						<a href="#" ><button class="btn btn-default" type="submit">1:1 문의</button></a>
					</div>
				</div>
				<div class="section-contact col-lg-4 col-md-4 bottommargin-sm">
					<div class="p-3" style="border: 1px solid #e6e6e6; width : 500px; height : 200px">
						<h1><i class="fa fa-book"></i></h1>
						<h3 class="mb-1">BRAND</h3>
						<h5>고객님들의 신뢰를 위해 제휴중인 브랜드를 공개하고 있습니다.</h5>
						<a href="showbrand.php" ><button class="btn btn-default" type="submit">제휴 브랜드</button></a>
					</div>
				</div>
			</div>
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
