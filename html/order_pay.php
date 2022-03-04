<?php
	include "common.php";
	
	$o_name=$_REQUEST[o_name];
	$o_tel1=$_REQUEST[o_tel1];
	$o_tel2=$_REQUEST[o_tel2];
	$o_tel3=$_REQUEST[o_tel3];

	$o_phone1=$_REQUEST[o_phone1];
	$o_phone2=$_REQUEST[o_phone2];
	$o_phone3=$_REQUEST[o_phone3];

	$o_email=$_REQUEST[o_email];
	$o_zip=$_REQUEST[o_zip];
	$o_juso=$_REQUEST[o_juso];
	
	$r_name=$_REQUEST[r_name];
	$r_tel1=$_REQUEST[r_tel1];
	$r_tel2=$_REQUEST[r_tel2];
	$r_tel3=$_REQUEST[r_tel3];
	
	$r_phone1=$_REQUEST[r_phone1];
	$r_phone2=$_REQUEST[r_phone2];
	$r_phone3=$_REQUEST[r_phone3];

	$r_email=$_REQUEST[r_email];
	$r_zip=$_REQUEST[r_zip];
	$r_juso=$_REQUEST[r_juso];
	$memo=$_REQUEST[memo];

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
				width:800px;
				height:550px;
				border: 1px solid #999;
			}
			#choice{
				width:150px;
				height:300px;
				margin-top:230px;
				float:left;
			}
			#cash{
				width:610px;
				height:300px;
				float:right;
			}
			#account{
				width:610px;
				height:220px;
				float:right;
			}
			#total{
				width:940px; 
				height:100px;
			}
			p { 
				margin:20px 0px; 
			}
			
			.card {
				padding:0;
				width:110rem; 
				height:9rem; 
				border-radius:20px;
				margin-bottom:20px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			.updown { 
				border: 0.1px solid #b6b6b6; 
				margin-top:25px;
				height: 500px; 
				float:left;
			}
			.right { 
				border: 0.1px solid #b6b6b6; 
				margin:15px;
				width:600px; 
				float:left;
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
			select {
				width: 200px;
				padding: .8em .5em;
				border: 1px solid #999;
				background: url('images/Happy_Art_Shop/arrow1.png') no-repeat 95% 50%;
				appearance: none;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
		<script language="javascript">
			function Check_Value() 
			{
				if (form2.pay_method[0].checked)
				{
					if (form2.card_kind.value == 0) {
						alert("카드종류를 선택하세요.");	form2.card_kind.focus();	return;
					}
					if (!form2.card_no1.value || form2.card_no1.value.length!=4) {
						alert("카드번호를 입력하세요.");	form2.card_no1.focus();	return;
					}
					if (!form2.card_no2.value || form2.card_no2.value.length!=4) {
						alert("카드번호를 입력하세요.");	form2.card_no2.focus();	return;
					}
					if (!form2.card_no3.value || form2.card_no3.value.length!=4) {
						alert("카드번호를 입력하세요.");	form2.card_no3.focus();	return;
					}
					if (!form2.card_no4.value || form2.card_no4.value.length!=4) {
						alert("카드번호를 입력하세요.");	form2.card_no4.focus();	return;
					}
					if (!form2.card_year.value) {
						alert("카드기간 년도를 선택하세요.");	form2.card_year.focus();	return;
					}
					if (!form2.card_month.value) {
						alert("카드기간 월을 선택하세요.");	form2.card_month.focus();	return;
					}
					if (!form2.card_pw.value) {
						alert("카드 암호 뒷의 2자리를 선택하세요.");	form2.card_pw.focus();	return;
					}
				}
				else
				{
					if (!form2.bank_kind.value) {
						alert("입금할 은행을 선택하세요.");	form2.bank_kind.focus();	return;
					}
					if (!form2.bank_sender.value) {
						alert("입금자 이름을 입력하세요.");	form2.bank_sender.focus();	return;
					}
				}
				form2.card_kind.disabled = false;
				form2.card_no1.disabled = false;
				form2.card_no2.disabled = false;
				form2.card_no3.disabled = false;
				form2.card_no4.disabled = false;
				form2.card_year.disabled = false;
				form2.card_month.disabled = false;
				form2.card_pw.disabled = false;
				form2.bank_kind.disabled = false;
				form2.bank_sender.disabled = false;
				
				form2.submit();
			}

			function PaySel(n) 
			{
				if (n == 0) {
					form2.card_kind.disabled = false;
					form2.card_no1.disabled = false;
					form2.card_no2.disabled = false;
					form2.card_no3.disabled = false;
					form2.card_no4.disabled = false;
					form2.card_year.disabled = false;
					form2.card_month.disabled = false;
					form2.card_pw.disabled = false;
					form2.bank_kind.disabled = true;
					form2.bank_sender.disabled = true;
				}
				else {
					form2.card_kind.disabled = true;
					form2.card_no1.disabled = true;
					form2.card_no2.disabled = true;
					form2.card_no3.disabled = true;
					form2.card_no4.disabled = true;
					form2.card_year.disabled = true;
					form2.card_month.disabled = true;
					form2.card_pw.disabled = true;
					form2.bank_kind.disabled = false;
					form2.bank_sender.disabled = false;
				}
			}
		</script>
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
		<div class="container">
			<br><br><br><br>
			<div class="row">
				<img src="images/Happy_Art_Shop/order_cart.PNG" style="width:70; height:70">
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_pay.PNG">
				<img src="images/Happy_Art_Shop/arrow_go.PNG" style="margin-right:20px; margin-left:20px">
				<img src="images/Happy_Art_Shop/order_ok.PNG" style="width:70; height:70">
			</div>
			<div class="row">
				<div style="margin-top:0px; width:100; float:left; margin-left:155px">
					<h4><font color="C4C4C4"><b>배송지작성</b></font></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:280px">
					<h4><b>결재</b></h4>
				</div>
				<div style="margin-top:0px; width:100; float:left; margin-left:285px">
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
					<?php
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
		
		<form name="form2" method="post"action="order_insert.php">

			<input type="hidden" name="o_name"   value="<?=$o_name?>">
			<input type="hidden" name="o_tel1"    value="<?=$o_tel1?>">
			<input type="hidden" name="o_tel2"    value="<?=$o_tel2?>">
			<input type="hidden" name="o_tel3"    value="<?=$o_tel3?>">

			<input type="hidden" name="o_phone1"  value="<?=$o_phone1?>">
			<input type="hidden" name="o_phone2"  value="<?=$o_phone2?>">
			<input type="hidden" name="o_phone3"  value="<?=$o_phone3?>">

			<input type="hidden" name="o_email"  value="<?=$o_email?>">
			<input type="hidden" name="o_zip"    value="<?=$o_zip?>">
			<input type="hidden" name="o_addr"   value="<?=$o_juso?>">

			<input type="hidden" name="r_name"   value="<?=$r_name?>">
			<input type="hidden" name="r_tel1"    value="<?=$r_tel1?>">
			<input type="hidden" name="r_tel2"    value="<?=$r_tel2?>">
			<input type="hidden" name="r_tel3"    value="<?=$r_tel3?>">

			<input type="hidden" name="r_phone1"  value="<?=$r_phone1?>">
			<input type="hidden" name="r_phone2"  value="<?=$r_phone2?>">
			<input type="hidden" name="r_phone3"  value="<?=$r_phone3?>">

			<input type="hidden" name="r_email"  value="<?=$r_email?>">
			<input type="hidden" name="r_zip"    value="<?=$r_zip?>">
			<input type="hidden" name="r_addr"   value="<?=$r_juso?>">
			<input type="hidden" name="memo"   value="<?=$memo?>">

			<div class="container"><br>
				<div class="form-inline" id="order" style="border: 1px solid LightGray">
					<div id="choice">
						<h3><b>결재방법</b></h3>
						<div style="width:60">
							<input type="radio" name="pay_method" value="0" onclick="javascript:PaySel(0);" style="float:left" checked>카드<br>
							<input type="radio" name="pay_method" value="1" onclick="javascript:PaySel(1);" style="float:left"> 무통장
						</div>
					</div>
					<div class="updown"></div>
					<div id="cash">
						<h3 style="float:left"><b>카드</b></h3><br><br><br>
						<div style="float:left">
							<label><h5 style="margin-right:10px">카드종류 : </h5></label>
							<select name="card_kind">
								<option value="0">카드종류를 선택하세요.</option>
								<option value="1">국민카드</option>
								<option value="2">신한카드</option>
								<option value="3">우리카드</option>
								<option value="4">하나카드</option>
							</select>
						</div><br><br><br>
						<div style="float:left">
							<label><h5 style="margin-right:10px;">카드번호 : </h5></label>
							<input type="text" style="width: 6rem" name="card_no1" size="4" maxlength="4" value="" class="form-control"> -
							<input type="text" style="width: 6rem" name="card_no2" size="4" maxlength="4" value="" class="form-control"> -
							<input type="text" style="width: 6rem" name="card_no3" size="4" maxlength="4" value="" class="form-control"> -
							<input type="text" style="width: 6rem" name="card_no4" size="4" maxlength="4" value="" class="form-control">
						</div><br><br>
						<div style="float:left">
							<label><h5 style="margin-right:10px">카드기간 : </h5></label>
							<input type="text" style="width: 4rem" name="card_month" size="2" maxlength="2" value="" class="form-control"> 월  
							<input type="text" style="width: 4rem" name="card_year"  size="2" maxlength="2" value="" class="form-control"> 년
						</div><br><br>
						<div style="float:left">
							<label><h5 style="margin-right:10px">카드비밀번호(뒷2자리) : </h5></label>
							**<input type="password" style="width: 4rem" name="card_pw" size="2" maxlength="2" value="" class="form-control">
						</div><br><br>
						<div style="float:left; margin-top:10px;">
							<label><h5 style="margin-right:10px">할부 : </h5></label>
							<select name="card_halbu" style="width:130px">
								<option value="0">일시불</option>
								<option value="3">3 개월</option>
								<option value="6">6 개월</option>
								<option value="9">9 개월</option>
								<option value="12">12 개월</option>
							</select>
						</div>
					</div>
					<div class="right"></div>
					<div id="account">
						<h3 style="float:left"><b>무통장 입금</b></h3><br><br><br>
						<div style="float:left">
							<label><h5>은행선택 : </h5></label>
							<select name="bank_kind" style="width:250px" disabled>
								<option value="0">입금할 은행을 선택하세요.</option>
								<option value="1">국민은행 000-00000-0000</option>
								<option value="2">신한은행 000-00000-0000</option>
							</select>
						</div><br><br><br>
						<div style="float:left">
							<label><h5>입금자 이름 : </h5></label>
							<input type="text" name="bank_sender" size="15" maxlength="20" value="" class="form-control" disabled>
						</div>
					</div>
				</div>
			</div>
		</form>

		<div class="container">
			<div class="row">
				<button class="btn btn-primary" onclick="location.href='order.php'" style="margin-right:5px; width:100px">이전화면</button>
				<button class="btn btn-success" onclick="Check_Value()" style="margin-left:10px; width:100px">결재하기</button>
			</div>
		</div>
		
	<!-------------------------------------------------------------------------------------------->	
	<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
	<!-------------------------------------------------------------------------------------------->	
	<br><br><br><br><br><br>
	<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
	<?php
		include "main_bottom.php";
	?>
	<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

	&nbsp

	</body>
</html>
