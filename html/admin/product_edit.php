<?php
	include "../common.php";
	$no=$_REQUEST[no];
	$status=$_REQUEST[status];
?>
<html>
	<head>
		<title>쇼핑몰 관리자 홈페이지</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="include/font.css">
		<script language="JavaScript" src="include/common.js"></script>
		<script language="JavaScript">
			function imageView(strImage)
			{
				this.document.images["big"].src = strImage;
			}
		</script>
		<script> document.write(menu());</script>
	</head>
	<body style="margin:0">
		<form name="form1" method="post" action="product_update.php" enctype="multipart/form-data">
			<input type="hidden" name="sel1" value="<?php echo $sel1?>">
			<input type="hidden" name="sel2" value="<?php echo $sel2?>">
			<input type="hidden" name="sel3" value="<?php echo $sel3?>">
			<input type="hidden" name="sel4" value="<?php echo $sel4?>">
			<input type="hidden" name="text1" value="<?php echo $text1?>">
			<input type="hidden" name="page" value="<?php echo $page?>">
			<input type="hidden" name="no" value="<?php echo $no?>">
			<center>
			<br><br><br>
			<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
				<?php
					$query="select * from product where no11 = $no;";
					$result=mysqli_query($db,$query); //sql 실행
					if (!$result){
						exit("에러: $query");  //에러조사
					}
					$row=mysqli_fetch_array($result); //1레코드 읽기

					$name=stripslashes($name);
					$contents=stripslashes($contents);
				?>
				<tr height="23"> 
					<td width="100" bgcolor="#CCCCCC" align="center">상품분류</td>
					<td width="700" bgcolor="#F2F2F2">
					<?php
						echo("<select name='menu'>");
							for($i=0;$i<$n_menu;$i++){//분류선택 출력
								if ($i==$row[menu11]){
									echo("<option value='$i' selected>$a_menu[$i]</option>");
								}
								else{
									echo("<option value='$i'>$a_menu[$i]</option>");
								}
							}
						echo("</select> &nbsp"); 
					?>
					</td>
				</tr>
				<tr height="23"> 
					<td width="100" bgcolor="#CCCCCC" align="center">상품코드</td>
					<td width="700"  bgcolor="#F2F2F2">
						<input type="text" name="code" value="<?php echo $row[code11]?>" size="20" maxlength="20">
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">상품명</td>
					<td width="700"  bgcolor="#F2F2F2">
						<input type="text" name="name" value="<?php echo $row[name11]?>" size="60" maxlength="60">
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">제조사</td>
					<td width="700"  bgcolor="#F2F2F2">
						<input type="text" name="coname" value="<?php echo $row[coname11]?>" size="30" maxlength="30">
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">판매가</td>
					<td width="700"  bgcolor="#F2F2F2">
						<input type="text" name="price" value="<?php echo $row[price11]?>" size="12" maxlength="12"> 원
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">옵션</td>
					<td width="700"  bgcolor="#F2F2F2">
					<?php
						$query = "select * from opt order by no11";
						$result=mysqli_query($db,$query); //sql 실행 (제품 수 전용)
						if (!$result){
							exit("에러: $query");  //에러조사
						}
						$count=mysqli_num_rows($result);

						echo("<select name='opt1'>");
							for ($i=0;$i<$count;$i++)
							{
								$row1=mysqli_fetch_array($result); //1레코드 읽기
								if($row[opt1_11]==$row1[no11]){
									echo("<option value='$row1[no11]' selected>$row1[name11]</option>");
								}
								else{
									echo("<option value='$row1[no11]'>$row1[name11]</option>");
								}
							}
						echo("</select> &nbsp; &nbsp;");
						mysqli_data_seek($result,0);
						echo("<select name='opt2'>");
							for ($i=0;$i<$count;$i++)
							{
								$row1=mysqli_fetch_array($result); //1레코드 읽기
								if($row[opt2_11]==$row1[no11]){
									echo("<option value='$row1[no11]' selected>$row1[name11]</option>");
								}
								else{
									echo("<option value='$row1[no11]'>$row1[name11]</option>");
								}
							}
						echo("</select> &nbsp; &nbsp;");
					?>
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">제품설명</td>
					<td width="700"  bgcolor="#F2F2F2">
						<textarea name="contents" rows="4" cols="70"><?php echo $row[contents11]?></textarea>
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">상품상태</td>
					<td width="700"  bgcolor="#F2F2F2">
						<?php
							if($row[status11]==1){
								$statuscheck1="checked";
							}
							else if($row[status11]==2){
								$statuscheck2="checked";
							}
							else if($row[status11]==3){
								$statuscheck3="checked";
							}
							echo("<input type='radio' name='status' value='1' $statuscheck1> 판매중");
							echo("<input type='radio' name='status' value='2' $statuscheck2> 판매중지");
							echo("<input type='radio' name='status' value='3' $statuscheck3> 품절");
						?>
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">아이콘</td>
					<td width="700"  bgcolor="#F2F2F2">
					<?php
						if($row[icon_new11]==1){
							$icon_new_check="checked";
						}
						if($row[icon_hit11]==1){
							$icon_hit_check="checked";
						}
						if($row[icon_sale11]==1){
							$icon_sale_check="checked";
						}
						echo("<input type='checkbox' name='icon_new' value='1' $icon_new_check> New &nbsp;&nbsp");
						echo("<input type='checkbox' name='icon_hit' value='1' $icon_hit_check> Hit &nbsp;&nbsp");
						echo("<input type='checkbox' name='icon_sale' value='1' $icon_sale_check> Sale &nbsp;&nbsp");
						echo("할인율 : <input type='text' name='discount' value='$row[discount11]' size='3' maxlength='3'> %");
					?>
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">등록일</td>
					<td width="700"  bgcolor="#F2F2F2">
						<?php
							$regday1=trim(substr($row[regday11],0,4));
							$regday2=trim(substr($row[regday11],5,2));
							$regday3=trim(substr($row[regday11],8,2));
						?>
						<input type="text" name="regday1" value="<?php echo substr($row[regday11],0,4)?>" size="4" maxlength="4"> 년 &nbsp
						<input type="text" name="regday2" value="<?php echo substr($row[regday11],5,2)?>" size="2" maxlength="2"> 월 &nbsp
						<input type="text" name="regday3" value="<?php echo substr($row[regday11],8,2)?>" size="2" maxlength="2"> 일 &nbsp
					</td>
				</tr>
				<tr> 
					<td width="100" bgcolor="#CCCCCC" align="center">이미지</td>
					<td width="700"  bgcolor="#F2F2F2">

						<table border="0" cellspacing="0" cellpadding="0" align="left">
							<tr>
								<td>
									<table width="390" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td>
												<input type='hidden' name='imagename1' value='<?php echo $row[image1_11]?>'>
												&nbsp;<input type="checkbox" name="checkno1" value="1"> <b>이미지1</b>: <?php echo $row[image1_11]?>
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="file" name="image1" size="20" value="찾아보기">
											</td>
										</tr> 
										<tr>
											<td>
												<input type='hidden' name='imagename2' value='<?php echo $row[image2_11]?>'>
												&nbsp;<input type="checkbox" name="checkno2" value="1"> <b>이미지2</b>: <?php echo $row[image2_11]?>
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="file" name="image2" size="20" value="찾아보기">
											</td>
										</tr> 
										<tr>
											<td>
												<input type='hidden' name='imagename3' value='<?php echo $row[image3_11]?>'>
												&nbsp;<input type="checkbox" name="checkno3" value="1"> <b>이미지3</b>: <?php echo $row[image3_11]?>
												<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="file" name="image3" size="20" value="찾아보기">
											</td>
										</tr> 
										<tr>
											<td><br>&nbsp;&nbsp;&nbsp;※ 삭제할 그림은 체크를 하세요.</td>
										</tr> 
								</table>
									<br><br><br><br><br>
									<table width="390" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td  valign="middle">&nbsp;
												<img src="../product/<?php echo $row[image1_11]?>" width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?php echo $row[image1_11]?>')">&nbsp;
												<img src="../product/<?php echo $row[image2_11]?>" width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?php echo $row[image2_11]?>')">&nbsp;
												<img src="../product/<?php echo $row[image3_11]?>"  width="50" height="50" border="1" style='cursor:hand' onclick="imageView('../product/<?php echo $row[image3_11]?>')">&nbsp;
											</td>
										</tr>				 
									</table>
								</td>
								<td>
									<td align="right" width="310"><img name="big" src="../product/<?php echo $row[image1_11]?>" width="300" height="300" border="1"></td>
								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table>

			<table width="800" border="0" cellspacing="0" cellpadding="5">
				<tr> 
					<td align="center">
						<input type="submit" value="수정하기"> &nbsp;&nbsp
						<input type="button" value="이전화면" onClick="javascript:history.back();">
					</td>
				</tr>
			</table>

			</form>

		</center>

	</body>
</html>
