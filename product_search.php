<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$findtext=$_REQUEST[findtext];
	$query = "select * from product where name11 like '%$findtext%' order by name11;";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result);           // 출력할 제품 개수 7개
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
		function SearchProduct() {
			form2.submit();
		}
	</script>

	<br><br><br>
	<div class="container">
		
		<h1><b>검색결과</b></h1>
		<h4><b>"<?=$findtext?>"</b> 이름으로 총 <b><?=$count?></b>개 의 제품이 검색되었습니다.</h4><br><br>
	
	<?
		$num_col=4;   $num_row=10;                   // column수, row수
		$page_line=$num_col*$num_row;
		$count=mysqli_num_rows($result);           // 출력할 제품 개수 7개
		$icount = 0;
		
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
					if($row[icon_new11]==0){
						if($row[icon_hit11]==1){
							$tmp=array("<h4 class='font-weight-bold mb-4 bg-danger'><font color='FF3333'>Hit</font></h4>",
									   "<h5>$price 원</h5>");
						}
						if($row[icon_sale11]==1){
							$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'><font color='2ca368'>Sale</font> $row[discount11]%</h4>",
									   "<h5><strike>$price 원</strike></h5>",
									   "<h5>$disprice 원</h5>");
						}
						if($row[icon_hit11]==1 && $row[icon_sale11]==1){
							$tmp=array("<h4 class='font-weight-bold mb-4 bg-success'>Hit <font color='2ca368'>Sale</font> $row[discount11]%</h4>",
									   "<h5><strike>$price 원</strike></h5>",
									   "<h5>$disprice 원</h5>");
						}
					}
					$icon=implode(" ",$tmp);
					echo("<div class='col-sm-3'>
							<div class='card' style='margin-bottom:30px'>
								<a href='product_detail.php?no=$row[no11]'><img class='img-thumbnail' width='250' height='250' style='margin-top:10px' src='product/$row[image1_11]' alt='Card image cap'></a>
								<a href='product_detail.php?no=$row[no11]'><h5><b>$row[name11]</b></h5></a>
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

	</div>
	<br><br><br><br>
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