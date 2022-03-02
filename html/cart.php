<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?php
	include "common.php";
	$num=$_REQUEST[num];
	$cart=$_COOKIE[cart]; 
	$n_cart=$_COOKIE[n_cart];
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
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
			#total{
				width:270px; 
				height:180px;
				float:right;
				margin-right:20px
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
				width:110rem; 
				height:9rem; 
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
	</head>
	<body style="margin:0">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
		<center>
		<!--상단 로고 및 메뉴 ----------------------------------->
		<?php
			include "main_top.php";
		?>
		<!--상단 로고 및 메뉴 끝----------------------------------->

		<!-------------------------------------------------------------------------------------------->	
		<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
		<!-------------------------------------------------------------------------------------------->	
		<script language = "javascript">
			function cart_edit(kind,pos) {
				if (kind=="deleteall") 
				{
					location.href = "cart_edit.php?kind=deleteall";
				} 
				else if (kind=="delete")	{
					location.href = "cart_edit.php?kind=delete&pos="+pos;
				} 
				else if (kind=="insert")	{
					var num=eval("form2.num"+pos).value;
					location.href = "cart_edit.php?kind=insert&pos="+pos+"&num="+num;
				}
				else if (kind=="update")	{
					var num=eval("form2.num"+pos).value;
					location.href = "cart_edit.php?kind=update&pos="+pos+"&num="+num;
				}
			}
		</script>

		<form name='form2' method='post'>
			<div class="container">
				<h1><b>장바구니<b></h1><br>
				<hr style="margin-bottom:0">
				<div class="row">
					<h4 class="col-md-2" style="width:450"><b>상품</b></h4>
					<h4 class="col-md-1" style="width:160"><b>수량</b></h4>
					<h4 class="col-md-1" style="width:160"><b>가격</b></h4>
					<h4 class="col-md-1" style="width:160"><b>합계</b></h4>
					<h4 class="col-md-1" style="width:160"><b>수정/삭제</b></h4>
				</div>
				<hr style="margin-top:0">
				<?php
					if (!$n_cart){ 
							$n_cart=0;
					}
					for ($i=1; $i<=$n_cart;  $i++)
					{
						if ($cart[$i])
						{
							list($no, $num, $opts1, $opts2)=explode("^", $cart[$i]);

							$query1="select * from opts where no11=$opts1";
							$result1=mysqli_query($db,$query1); //sql 실행
							if (!$result1){
								exit("에러 : $query1");  //에러조사
							}
							$row1=mysqli_fetch_array($result1);

							$query2="select * from opts where no11=$opts2";
							$result2=mysqli_query($db,$query2); //sql 실행
							if (!$result2){
								exit("에러 : $query2");  //에러조사
							}
							$row2=mysqli_fetch_array($result2);

							$query3="select * from product where no11=$no";
							$result3=mysqli_query($db,$query3); //sql 실행
							if (!$result3){
								exit("에러 : $query3");  //에러조사
							}
							$row3=mysqli_fetch_array($result3);

							$price = number_format($row3[price11]);
							if($row3[discount11] > 0){
								$saleprice = round($row3[price11]*(100-$row3[discount11])/100, -3);
								$Lastprice = number_format($saleprice * $num);
								$total=$total + $saleprice * $num;
							}
							else if($row3[discount11] == 0){
								$Lastprice = number_format($row3[price11] * $num);
								$total=$total + ($row3[price11] * $num);
							}
							echo("<div class='card'>
									<div class='row' style=' margin:0px; width:460; float:left'>
										<a href='product_detail.php?no=$row3[no11]'><img src='product/$row3[image1_11]' style='margin-top:10; margin-left:20; border :1px solid LightGray; float:left' width='70' height='70' border='0'></a>
										<h5 align='left' style='margin-left:100px; margin-top:25px; width:370px'><a href='product_detail.php?no=$row3[no11]'> $row3[name11]</a></h5>
										<h5 align='left' style='margin-left:100px; margin-top:10px; width:370px'><font color='#0066CC'>[옵션사항]</font> $row1[name11] $row2[name11]</h5>
									</div>
									<div style=' margin-top:15px; width:100; float:left'>	
										<h5><input style='width:70; float:left' type='text' name='num$i' size='3' value='$num' class='form-control'></h5>
										<label><h5>개</h5></label>
									</div>
									<div style='margin-top:25px; margin-left:45px; width:100; float:left'>	
										<h4><font color='#464646'>$price</font></h4>
									</div>
									<div style='margin-top:25px; margin-left:65px; width:100; float:left'>	
										<h4><font color='#464646'>$Lastprice</font></h4>
									</div>
									<div style='margin-top:25px; margin-left:65px; width:100; float:left'>
										<a href = 'javascript:cart_edit(\"update\",$i)'><input type='button' class='btn btn-xs btn-primary' value='수정' style='width:100; margin-bottom:3px'></input><a><br>
										<a href = 'javascript:cart_edit(\"delete\",$i)'><input type='button' class='btn btn-xs btn-danger' value='삭제' style='width:100'></input><a> 
									</div>
							</div>");
						}
					}
				?>
				<hr style="margin-bottom:0">
					<div style="background-color:#f4f4f4; height:180">
						<div id="total">
							<?php
								if($total < $max_baesongbi)
								{
									$Secondtotal=$total + $baesongbi ;
									$baesongbi = number_format($baesongbi);
									$Secondtotal = number_format($Secondtotal);
									$total = number_format($total);
									echo("<h3 align='right'><b>주문금액</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $total</h3>");
									echo("<h3 align='right'><b>+ 배송료</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color='red'>$baesongbi</font></h3>");
									echo("<hr>");
									echo("<h3 align='right'><b>전체 주문금액</b> &nbsp&nbsp<font color='blue'>$Secondtotal</font></h3>");
								}
								if($total >= $max_baesongbi){
									$total = number_format($total);
									echo("<h3 align='right'><b>주문금액</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $total</h3>");
									echo("<h3 align='right'><b>+ 배송료</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color='red'>0</font></h3>");
									echo("<hr>");
									echo("<h3 align='right'><b>전체 주문금액</b> &nbsp&nbsp<font color='blue'>$total</font></h3>");
								}
							?>
						</div>
					</div>
				<hr style="margin-Top:0">
				<div class="row">
					<div style="margin-left:20">
						<a href = "index.html"><input type="button" class="btn btn-primary" value="계속 쇼핑하기" style="width:150; float:left"></input></a>
						<a href = "javascript:cart_edit('deleteall',0)"><input type="button" class="btn btn-danger" value="장바구니 비우기" style="width:150; float:left; margin-left:10px"></input></a>
						<a href = "order.php"><input type="button" class="btn btn-success" value="결재하기" style="width:150; float:right; margin-right:20px"></input></a>
					</div>
				</div>
			</div>
		</form>
	
	<!-------------------------------------------------------------------------------------------->	
	<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
	<!-------------------------------------------------------------------------------------------->	
	<br><br><br><br><br><br>
	<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
	<?php
		include "main_bottom.php";
	?>
	<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

	&nbsp;

	</body>
</html>
