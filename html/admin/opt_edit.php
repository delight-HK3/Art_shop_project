<?php
	include "../common.php";
	$no=$_REQUEST[no];
	$query="select * from opt where no11 = $no;";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$row=mysqli_fetch_array($result); //1레코드 읽기
?>
<html>
	<head>
		<title>쇼핑몰 관리자 홈페이지</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="include/font.css">
		<script language="JavaScript" src="include/common.js"></script>
		<script> document.write(menu());</script>
	</head>
		<body style="margin:0">
			<center>
			<br><br><br>
			<form name="form1" method="post" action="opt_update.php">
				<input type="hidden" name="no" value="<?php echo $no?>">
				<table width="500" border="1" cellpadding="2" style="border-collapse:collapse">
					<tr> 
						<td width="100" height="20" bgcolor="#CCCCCC" align="center">
							<font color="#142712">옵션번호</font>
						</td>
						<td width="400" height="20"  bgcolor="#F2F2F2"><?php echo $row[no11]?></td>
					</tr>
					<tr> 
						<td width="100" height="20" bgcolor="#CCCCCC" align="center">
							<font color="#142712">옵션명</font>
						</td>
						<td width="400" height="20"  bgcolor="#F2F2F2">
							<input type="text" name="name" value="<?php echo $row[name11]?>" size="20" maxlength="20">
						</td>
					</tr>
				</table>
				<br>
				<table width="500" border="0" cellspacing="0" cellpadding="7">
					<tr> 
						<td align="center">
							<input type="submit" value="수 정 하 기"> &nbsp;&nbsp
							<input type="button" value="이 전 화 면" onClick="javascript:history.back();">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
