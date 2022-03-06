<?php
	include "../common.php";
	$no=$_REQUEST[no];
?>
<html>
	<head>
		<title>쇼핑몰 관리자 페이지</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="include/font.css">
		<script language="JavaScript" src="include/common.js"></script>
		<script language="javascript">
			function OpenWinZip(zip_kind)
			{
				window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
			}
		</script>
		<script> document.write(menu());</script>
	</head>
	<?php
		$query="select * from member where no11 = $no;";
		$result=mysqli_query($db,$query); //sql 실행
		if (!$result){
			exit("에러: $query");  //에러조사
		}
		$row=mysqli_fetch_array($result); //1레코드 읽기

		$tel1=trim(substr($row[tel11],0,3));
		$tel2=trim(substr($row[tel11],3,4));
		$tel3=trim(substr($row[tel11],7,4));

		$phone1=trim(substr($row[phone11],0,3));
		$phone2=trim(substr($row[phone11],3,4));
		$phone3=trim(substr($row[phone11],7,4));

		$birthday1=substr($row[birthday11],0,4);
		$birthday2=substr($row[birthday11],5,2);
		$birthday3=substr($row[birthday11],8,2);
	?>
	<body style="margin:0">
		<center>
			<br><br><br>
				<form name="form2" method="post" action="member_update.php">
					<input type="hidden" name="no" value="<?php echo $no?>">
						<table width="600" border="1" cellpadding="2"  style="border-collapse:collapse">
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">ID</td>
								<td width="500" bgcolor="#F2F2F2">id1</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">암호</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="pwd" value="<?php echo $row[pwd11]?>" size="20" maxlength="20">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">이름</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="name" value="<?php echo $row[name11]?>" size="20" maxlength="20">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">생일</td>
								<td width="500" bgcolor="#F2F2F2">
								 <input type="text" name="birthday1" size="4" maxlength="4" value="<?php echo substr($row[birthday11],0,4)?>"> -
								 <input type="text" name="birthday2" size="2" maxlength="2" value="<?php echo substr($row[birthday11],5,2)?>"> -
								 <input type="text" name="birthday3" size="2" maxlength="2" value="<?php echo substr($row[birthday11],8,2)?>"> </font>
									&nbsp;&nbsp 
									<?
										if($row[sm11]==0){
											echo("<input type='radio' name='sm' value='0' checked>양력
												<input type='radio' name='sm' value='1'>음력");
										}
										else{
											echo("<input type='radio' name='sm' value='0'>양력
												<input type='radio' name='sm' value='1' checked>음력");
										}
									?>
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">전화번호</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="tel1" size="3" maxlength="3" value="<?php echo substr($row[tel11],0,3)?>"> -
									<input type="text" name="tel2" size="4" maxlength="4" value="<?php echo substr($row[tel11],3,4)?>"> -
									<input type="text" name="tel3" size="4" maxlength="4" value="<?php echo substr($row[tel11],7,4)?>">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">핸드폰</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="phone1" size="3" maxlength="3" value="<?php echo substr($row[phone11],0,3)?>"> -
									<input type="text" name="phone2" size="4" maxlength="4" value="<?php echo substr($row[phone11],3,4)?>"> -
									<input type="text" name="phone3" size="4" maxlength="4" value="<?php echo substr($row[phone11],7,4)?>">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">E-Mail</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="email" value="<?php echo $row[email11]?>" size="40" maxlength="40">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">주소</td>
								<td width="500" bgcolor="#F2F2F2">
									<input type="text" name="zip" value="<?php echo $row[zip11]?>" size="5" maxlength="5"> &nbsp 
									<input type="button" value="우편번호 찾기" onClick="javascript:OpenWinZip(0);"> <br>
									<input type="text" name="juso" value="<?php echo $row[juso11]?>" size="60" maxlength="100">
								</td>
							</tr>
							<tr height="20"> 
								<td width="100" align="center" bgcolor="#CCCCCC">회원구분</td>
								<td width="500" bgcolor="#F2F2F2">
								<?php
									if($row[gubun11]==0){
										echo("<input type='radio' name='gubun' value='0' checked>회원
											  <input type='radio' name='gubun' value='1'>탈퇴");
									}
									else{
										echo("<input type='radio' name='gubun' value='0'>회원
											  <input type='radio' name='gubun' value='1' checked>탈퇴");
									}
								?>	
								</td>
							</tr>
						</table>
					<br>
					<table width="800" border="0" cellspacing="0" cellpadding="7">
						<tr> 
							<td align="center">
								<input type="submit" value="수정하기"> &nbsp;&nbsp
								<input type="button" value="이전화면" onClick="javascript:history.back();">
							</td>
						</tr>
					</table>
				</form>
			</center>
		<br>
	</body>
</html>
