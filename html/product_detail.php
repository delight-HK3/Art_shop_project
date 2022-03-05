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
				height:600px;
				margin-left:100px; 
				float:left;
			}
			#productstate{
				width:500px; 
				height:500px;
				margin-left:40px; 
				float:left;
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
			select {
				width: 150px;
				padding: .8em .5em;
				border: 1px solid #999;
				background: url('images/Happy_Art_Shop/arrow1.png') no-repeat 95% 50%;
				appearance: none;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script type="text/javascript" src="include/js/bootstrap.js"></script>
		<script language = "javascript">
			function Zoomimage(no) 
			{
				window.open("zoomimage.php?no="+no, "", "menubar=no, scrollbars=no, width=595, height=640, top=30, left=50");
			}
			function check_form2(str) 
			{
				if (!form2.opts1.value) {
					alert("옵션1을 선택하십시요.");
					form2.opts1.focus();
					return;
				}
				if (!form2.opts2.value) {
					alert("옵션2를 선택하십시요.");
					form2.opts2.focus();
					return;
				}
				if (!form2.num.value) {
					alert("수량을 입력하십시요.");
					form2.num.focus();
					return;
				}
				if (str == "D") {
					form2.action = "cart_edit.php";
					form2.kind .value = "order";
					form2.submit();
				}
				else {
					form2.action = "cart_edit.php"; 
					form2.submit();
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
		<?php
			$query="select * from product where no11=$no";
			$result=mysqli_query($db,$query); //sql 실행
			if (!$result){
				exit("에러: $query");  //에러조사
			}
			$row=mysqli_fetch_array($result);
		?>
		<form name="form2" method="post" action="">
			<input type="hidden" name="no" value="<?=$row[no11]?>">
			<input type="hidden" name="kind" value="insert"> <!--cart.edit.php 로 넘어감-->

			<div class="container" style="margin-top:60">
				<div id="imgshow"  style="border: 1px solid LightGray;">
					<img src="product/<?=$row[image1_11]?>" style="width:430; height:430; margin-top:20px; margin-bottom:50px" ONCLICK="Zoomimage(<?=$row[no11]?>)" STYLE="cursor:hand">
					<img src="product/<?=$row[image1_11]?>" style="width:80; height:80; border: 1px solid LightGray; float:left ; margin-left:20px; margin-bottom:20px" ONCLICK="Zoomimage(<?=$row[no11]?>)" STYLE="cursor:hand">
				</div>	
				<div id="productstate">
					<hr>
					<h3 align="left"><strong><?=$row[name11]?></strong></h3>
					<hr style="margin-bottom:5">
					<?php
						$price = number_format($row[price11]);
						$saleprice = round($row[price11]*(100-$row[discount11])/100);
						$disprice = number_format($saleprice);

						if($row[icon_new11]==1){
							$tmp=array("<h4 class='font-weight-bold mb-4 bg-info'  style='width:300px; float:left;'><font color='2C93C5'>New</font></h4>");

							if($row[icon_hit11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger' style='width:300px; float:left;'>New <font color='FF3333'>Hit</font></h4>");
							}
							if($row[icon_sale11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'  style='width:300px; float:left;'>New <font color='2ca368'>Sale</font> $row[discount11]%</h4>");
							}
							if($row[icon_hit11]==1 && $row[icon_sale11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'  style='width:300px; float:left;'>New Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>");
							}
						}
						if($row[icon_new11]==0){
							if($row[icon_hit11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger' style='width:300px; float:left;'><font color='FF3333'>Hit</font></h4>");
							}
							if($row[icon_sale11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-success' style='width:300px; float:left;'><font color='2ca368'>Sale</font> $row[discount11]%</h4>");
							}
							if($row[icon_hit11]==1 && $row[icon_sale11]==1){
								$tmp=array("<h4 class='font-weight-bold mb-4 bg-success' style='width:300px; float:left;'>Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>");
							}
						}
						$icon=implode(" ",$tmp);
						echo("$icon<br><br><hr style='margin-top:7px'>");
						echo("<h4 align='left' style='margin-bottom:0'><strong>제조사</strong>&nbsp;&nbsp; : &nbsp;&nbsp;$row[coname11]</h4><br>");
						echo("<h4 align='left' style='margin-bottom:0'><strong>소비자가격</strong>&nbsp;&nbsp; : &nbsp;&nbsp;$price 원</h4><br>");
						if($row[discount11]==0){
							echo("<h4 align='left'><strong>판매가격</strong>&nbsp;&nbsp; : &nbsp;&nbsp;$price 원</h4>");
						}
						else{
							echo("<h4 align='left'><strong>판매가격</strong>&nbsp;&nbsp; : &nbsp;&nbsp;<font color='red'>$disprice 원</font></h4>");
						}
						echo("<hr>");

						$query1 = "select * from opts where opt_no11=$row[opt1_11]";
						$result1=mysqli_query($db,$query1); //sql 실행
						if (!$result1){
							exit("에러: $query1");  //에러조사
						}
						$count1=mysqli_num_rows($result1);
						echo("<h5 align='left' style='margin-right:30px'><b>옵션</b>&nbsp;&nbsp;");
						echo("<select name='opts1'>");
							for ($i=0;$i<$count1;$i++){
								$row1=mysqli_fetch_array($result1); //1레코드 읽기
								if($row1[no11]==$row[opt1_11]){
									echo("<option value='$row1[no11]' selected>$row1[name11]</option>");
								}
								else{
									echo("<option value='$row1[no11]'>$row1[name11]</option>");
								}
							}
						echo("</select> &nbsp; &nbsp;");

						$query1 = "select * from opts where opt_no11=$row[opt2_11]";
						$result1=mysqli_query($db,$query1); //sql 실행
						if (!$result1){
							exit("에러: $query1");  //에러조사
						}
						$count1=mysqli_num_rows($result1);

						echo("<select name='opts2'>");
							for ($i=0;$i<$count1;$i++){
								$row1=mysqli_fetch_array($result1); //1레코드 읽기
								if($row1[no11]==$row[opt1_11]){
									echo("<option value='$row1[no11]' selected>$row1[name11]</option>");
								}
								else{
									echo("<option value='$row1[no11]'>$row1[name11]</option>");
								}
							}
						echo("</select></h5>");	

					?>
					<div align="left" class="form-inline">	
						<label><h5><strong>수량</strong></h5></label>
						<input style="margin-left:5; width:100" type="text" name="num" value="1" size="3" maxlength="3" class="form-control" placeholder="수량">
					</div>
					<hr>
					<div class="row">
						<div class=" col-sm-5">
							<div>
								<button class="btn btn-lg btn-success btn-block" onClick="javascript:check_form2('D');">바로구매</button>
							</div>
						</div>
						<div class=" col-sm-5">
							<div>
								<button class="btn btn-lg btn-success btn-block" onClick="javascript:check_form2('C');">장바구니에 담기</button>
							</div>
						</div>
					</div>&nbsp
					<h5 align="left"><i class="fa fa-search-plus" aria-hidden="true"></i> 이미지를 클릭하면 확대되어 보입니다.</h5>
				</div>

			</div>
			<div><br><br><br>
				<img src="images/Happy_Art_Shop/productdetail.png"><br><br><br>
				<img align="float:center" src="product/<?=$row[image3_11]?>">
			</div>
		</form>
	<!-------------------------------------------------------------------------------------------->	
	<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
	<!-------------------------------------------------------------------------------------------->	
	<br><br>
		<div class="container">
			<h4 align="right"><a href=""><img src="images/Happy_Art_Shop/Top.PNG"><br><br><br></a></h4>
		</div>
	<br>

	<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
	<?php
		include "main_bottom.php";
	?>
	<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

	&nbsp

	</body>
</html>
