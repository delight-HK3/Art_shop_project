<?php
	include "common.php";
	$no=$_REQUEST[no];
	$query="select * from product where no11=$no";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$row=mysqli_fetch_array($result);
?>
<html>
	<head>
		<title>제품 확대 이미지</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<LINK REL="STYLESHEET" HREF="include/css.css" TYPE="text/css">
	</head>
	<body  marginwidth="0" marginheight="0" bgcolor="eeeeee">
		<table width="540" height="520" border="0" cellpadding="0" cellspacing="0">
			<tr> 
				<td height="37" colspan="2"><img src="images/zoom_title.gif" width="540" height="41"></td>
			</tr>
			<tr> 
				<td width="540" height="500" align="center" valign = "top">
					<table width="100%" height="33" border="0" cellpadding="0" cellspacing="0"  align="center">
						<tr>
							<td width="100%" height="24" align="center"><font color="#333333" style="font-size:10pt"><b><?=$row[name11]?></b></font></td>
						</tr>
					</table>
					<table width="500" border="1" cellpadding="0" cellspacing="0">
						<tr> 
							<td width="500" height="500" align="center" valign = "middle" bgcolor="white">
								<a href="javascript:window.close();"><img src="product/<?=$row[image1_11]?>" height="500" border="0"></a>
							</td>
						</tr>
					</table>
					<td></td>
				</td>
			</tr>
			<tr> 
				<td height="50" colspan="2" align="center"><a href="javascript:window.close();"><img src="images/b_close.gif" border="0"></a></td>
			</tr>
			<tr> 
				<td height="20" colspan="2" align="center"></td>
		   	</tr>	
		</table>
	</body>
</html>
