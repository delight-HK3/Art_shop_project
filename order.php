<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	
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
			#order{
				width:560px; 
				height:400px;
				border: 1px solid #999;
				float:left;
			}
			#orderform{
				width:560px;
				height:420px;
				float:left;
			}
			#home{
				width:560px; 
				height:400px;
				border: 1px solid #999;
				float:right;
			}
			#homeform{
				width:560px;
				height:420px;
				float:right;
			}
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
	<?
		include "main_top.php";
	?>
<!--상단 로고 및 메뉴 끝----------------------------------->

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	
	<script language="javascript">

			function Check_Value() {
				if (!form2.o_name.value) {
					alert("주문자 이름이 잘 못 되었습니다.");	form2.o_name.focus();	return;
				}
				if (!form2.o_tel1.value || !form2.o_tel2.value || !form2.o_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.o_tel1.focus();	return;
				}
				if (!form2.o_phone1.value || !form2.o_phone2.value || !form2.o_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.o_phone1.focus();	return;
				}
				if (!form2.o_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.o_email.focus();	return;
				}
				if (!form2.o_zip.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.o_zip.focus();	return;
				}
				if (!form2.o_juso.value) {
					alert("주소가 잘 못 되었습니다.");	form2.o_juso.focus();	return;
				}

				if (!form2.r_name.value) {
					alert("받으실 분의 이름이 잘 못 되었습니다.");	form2.r_name.focus();	return;
				}
				if (!form2.r_tel1.value || !form2.r_tel2.value || !form2.r_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.r_tel1.focus();	return;
				}
				if (!form2.r_phone1.value || !form2.r_phone2.value || !form2.r_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.r_phone1.focus();	return;
				}
				if (!form2.r_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.r_email.focus();	return;
				}
				if (!form2.r_zip.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.r_zip.focus();	return;
				}
				if (!form2.r_juso.value) {
					alert("주소가 잘 못 되었습니다.");	form2.r_juso.focus();	return;
				}

				form2.submit();
			}

			function FindZip(zip_kind) 
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}
			
			function SameCopy(str) {
				if (str == "Y") {
					form2.r_name.value = form2.o_name.value;
					form2.r_zip.value = form2.o_zip.value;
					form2.r_juso.value = form2.o_juso.value;
					form2.r_tel1.value = form2.o_tel1.value;
					form2.r_tel2.value = form2.o_tel2.value;
					form2.r_tel3.value = form2.o_tel3.value;
					form2.r_phone1.value = form2.o_phone1.value;
					form2.r_phone2.value = form2.o_phone2.value;
					form2.r_phone3.value = form2.o_phone3.value;
					form2.r_email.value = form2.o_email.value;
				}
				else {
					form2.r_name.value = "";
					form2.r_zip.value = "";
					form2.r_juso.value = "";
					form2.r_tel1.value = "";
					form2.r_tel2.value = "";
					form2.r_tel3.value = "";
					form2.r_phone1.value = "";
					form2.r_phone2.value = "";
					form2.r_phone3.value = "";
					form2.r_email.value = "";
				}
			}

			</script>

		<div class="container">
			<br><br><br><br>
			<div class="row">
				<img src="images/Happy_Art_Shop/order_cart.PNG">
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_pay.PNG" style="width:70; height:70">
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_ok.PNG" style="width:70; height:70">
			</div>
			<div class="row">
				<div style="margin-top:0px; width:100; float:left; margin-left:165px">
					<h4><b>배송지작성</b></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:285px">
					<h4><font color="C4C4C4"><b>결재</b></font></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:270px">
					<h4><font color="C4C4C4"><b>결재완료</b></font></h4>
				</div>
				
			</div>
			
			<hr style="margin-bottom:0">
			<div class="row">
				<h4 class="col-md-2" style="width:470"><b>상품</b></h4>
				<h4 class="col-md-1" style="width:270"><b>수량</b></h4>
				<h4 class="col-md-1" style="width:70; margin-right:40px"><b>가격</b></h4>
				<h4 class="col-md-1" style="width:160"><b>합계</b></h4>
			</div>
			<hr style="margin-top:0">
			<?
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
								<div style=' margin-top:25px; width:100; float:left; margin-left:75px'>	
									<h4 style='width:70; float:left' type='text' size='3' >$num &nbsp&nbsp개</h4>
								</div>
								<div style='margin-top:25px; margin-left:60px; width:100; float:left'>	
									<h4><font color='#464646'>$price</font></h4>
								</div>
								<div style='margin-top:25px; margin-left:55px; width:100; float:left'>	
									<h4><font color='#464646'>$Lastprice</font></h4>
								</div>
								
						</div>");
					}
				}
			?>
			<hr style="margin-bottom:0">
				<div style="background-color:#f4f4f4; height:70">
					<div id="total">
					<?
						if($total < $max_baesongbi)
						{
							$Secondtotal=$total + $baesongbi ;
							$baesongbi = number_format($baesongbi);
							$Secondtotal = number_format($Secondtotal);
							$total = number_format($total);
							echo("<br><h3 align='center' style='margin-top:0px'><b>주문금액</b> : $total + <b>배송료</b> : <font color='red'>$baesongbi</font> = <font color='blue'>$Secondtotal</font></h3>");
						}
						if($total >= $max_baesongbi){
							$total = number_format($total);
							echo("<br><h3 align='center' style='margin-top:0px'><b>주문금액</b> : $total + <b>배송료</b> : <font color='red'>0</font> = <font color='blue'>$total</font></h3>");
						}
					?>
					</div>
				</div>
			<hr style="margin-Top:0">
		</div>
		<?
			$o_no="0";	$o_name="";
			$o_tel1="";	$o_tel2="";	$o_tel3="";
			$o_phone1=""; $o_phone2=""; $o_phone3="";
			$o_email="";
			$o_zip="";
			$o_juso="";

			if($cookie_no){
				$query="select * from member where no11=$cookie_no";
				$result=mysqli_query($db,$query); //sql 실행
				if (!$result){
					exit("에러: $query");  //에러조사
				}
				$row=mysqli_fetch_array($result);
				$o_no=$row[no11];
				$o_name=$row[name11];

				$o_tel1=trim(substr($row[tel11],0,3));
				$o_tel2=trim(substr($row[tel11],3,4));
				$o_tel3=trim(substr($row[tel11],7,4));

				$o_phone1=trim(substr($row[phone11],0,3));
				$o_phone2=trim(substr($row[phone11],3,4));
				$o_phone3=trim(substr($row[phone11],7,4));
				
				$o_email=$row[email11];
				$o_zip=$row[zip11];
				$o_juso=$row[juso11];
			}
		?>
		<form name="form2" method="post" action="order_pay.php">
			<div class="container">
				<div id="orderform">
					<h2><b>주문자 정보</b></h2>
					<div class="form-inline" id="order" style="border: 1px solid LightGray">
						<div style="margin-top:20px; margin-left:20px; float:left">
							<label><h5 style="margin-right:20px">주문자 성명 : </h5></label>
							<input type="hidden" name="o_no" value="<?=$o_no?>">
							<input type="text" style="width: 15rem" class="form-control" size="20" name="o_name" maxlength = "10" value="<?=$o_name?>"> 
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:37px">전화번호 : </h5></label>
							<input type="text" style="width: 5rem" class="form-control" name='o_tel1' maxlength = "3" value="<?=$o_tel1?>"> -
							<input type="text" style="width: 6rem" class="form-control" name='o_tel2' maxlength = "4" value="<?=$o_tel2?>"> -
							<input type="text" style="width: 6rem" class="form-control" name='o_tel3' maxlength = "4" value="<?=$o_tel3?>"> 	
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:22px">휴대폰번호 : </h5></label>
							<input type="text" style="width: 5rem" class="form-control" name="o_phone1" maxlength = "3" value="<?=$o_phone1?>"> -
							<input type="text" style="width: 6rem" class="form-control" name="o_phone2" maxlength = "4" value="<?=$o_phone1?>"> -
							<input type="text" style="width: 6rem" class="form-control" name="o_phone3" maxlength = "4" value="<?=$o_phone1?>"> 	
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:18px">이메일 주소 : </h5></label>
							<input type="text" style="width: 40rem" class="form-control" name="o_email" maxlength = "50" value="<?=$o_email?>">
						</div>
						
						<div style="margin-top:25px; margin-left:20px; float:left">
							<label><h5 style="float:left ">주소 : </h5></label>
						</div>
						<div style="margin-top:5px; margin-left:67px; float:left">
							<input type="text" style="margin-bottom:5px; float:left" name='o_zip' size = "5" maxlength = "5" value = "<?=$row[zip11]?>" class="form-control">
							<input type="button" style="margin-bottom:5px; margin-left:5px; float:left"class="btn btn-primary" type="submit" value="우편번호" onClick="location.href='javascript:FindZip(1);'">
							<br><input type="text" name='o_juso' style="width: 30rem" maxlength = "200" value = "<?=$row[juso11]?>" class="form-control">
						</div>
					</div>
				</div>
				<div id="homeform">
					<h2><b>배송지 정보</b></h2>
					<div class="form-inline" id="home" style="border: 1px solid LightGray">
						<div style="margin-top:20px; margin-left:20px; float:left">
							<label><h5>주문자정보와 동일 : </h5></label>
							<input type="radio" name="same" onclick="SameCopy('Y')">예 &nbsp;
							<input type="radio" name="same" onclick="SameCopy('N')">아니오
						</div><br><br><br>
						<div style="margin-left:20px; float:left">
							<label><h5 style="margin-right:10px">받으실 분 성명 : </h5></label>
							<input type="text" style="width: 15rem" class="form-control" size="20" name="r_name" maxlength = "10" value=""> 
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:47px">전화번호 : </h5></label>
							<input type="text" style="width: 5rem" class="form-control" name='r_tel1' maxlength = "3" value=""> -
							<input type="text" style="width: 6rem" class="form-control" name='r_tel2' maxlength = "4" value=""> -
							<input type="text" style="width: 6rem" class="form-control" name='r_tel3' maxlength = "4" value=""> 	
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:32px">휴대폰번호 : </h5></label>
							<input type="text" style="width: 5rem" class="form-control" name="r_phone1" maxlength = "3" value=""> -
							<input type="text" style="width: 6rem" class="form-control" name="r_phone2" maxlength = "4" value=""> -
							<input type="text" style="width: 6rem" class="form-control" name="r_phone3" maxlength = "4" value=""> 	
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:28px">이메일 주소 : </h5></label>
							<input type="text" style="width: 40rem" class="form-control" name="r_email" maxlength = "50" value="">
						</div>
						
						<div style="margin-top:25px; margin-left:20px; float:left">
							<label><h5 style="float:left ">주소 : </h5></label>
						</div>
						<div style="margin-top:5px; margin-left:77px; float:left">
							<input type="text" style="margin-bottom:5px; float:left" name='r_zip' size = "5" maxlength = "5" value = "" class="form-control">
							<input type="button" style="margin-bottom:5px; margin-left:5px; float:left"class="btn btn-primary" type="submit" value="우편번호" onClick="location.href='javascript:FindZip(2);'">
							<br><input type="text" name='r_juso' style="width: 30rem" maxlength = "200" value = "" class="form-control">
						</div>
						<div style="margin-top:5px; margin-left:20px; float:left">
							<label><h5 style="margin-right:6px">배송시요구사항 : </h5></label>
						</div>
						<div style="margin-top:5px; float:left">
							<textarea name="memo" cols="50" rows="3" class="form-control"></textarea>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="container">
			<div class="row" style="margin-top:40px">
				<button class="btn btn-primary" onclick="location.href='cart.php'" style="margin-right:5px; width:100px">이전화면</button>
				<button class="btn btn-success" onclick="Check_Value()" style="margin-left:10px; width:100px">다음으로 </button>
			</div>
		</div>
		
<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	
<br><br><br><br><br><br>
<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
<?
	include "main_bottom.php";
?>
<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

&nbsp

</body>
</html>