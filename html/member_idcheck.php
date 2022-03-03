<?php
	include "common.php";
	$uid=$_REQUEST[uid];
?>
<html>
	<head>
		<title>중복ID 조회</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="include/font.css">

		<script language = "javascript">
			function Closeme(V)
			{
				opener.form2.check_id.value = V;
				self.close();
			}
		</script>
	</head>
	<body bgcolor="#FFFFFF" text="#000000"  marginwidth="0" marginheight="0">
		<table border="0" width="300" cellspacing="0" cellpadding="0">
			<tr>
				<td  height="30" bgcolor="blue"><font color="white" size="3"><b>&nbsp;중복 ID 조사</b></font></td>
			</tr>
			<tr><td  height="40"></td></tr>

			<?php
				$query="select * from member where uid11='$uid';";
				$result=mysqli_query($db,$query); //sql 실행
				if (!$result){
					exit("에러: $query");  //에러조사
				}
				$count=mysqli_num_rows($result); //전체 레코드 개수

				//중복 아이디가 없는 경우
				if($count==0){
					echo("<tr><td height='50' valign='middle' align='center'><font color='#666666'><b>$uid</b>는 사용 가능한 아이디입니다.</font></td></tr>");
					echo("<tr><td height='50' align='center'><a href='javascript:Closeme(\"V\")'><img src='images/b_ok1.gif' border='0'></a></td></tr>");
				}
				//중복 아이디가 있는 경우
				else{
					echo("<tr><td height='50' valign='middle' align='center'><font color='#666666'><b>$uid</b>는 사용할 수 없습니다.</font></td></tr>");
					echo("<tr><td height='50' align='center'><a href='javascript:Closeme(\"V\")'><img src='images/b_ok1.gif' border='0'></a></td></tr>");
				}
			?>
		</table>
	</body>
</html>
