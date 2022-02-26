<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$sel1=$_REQUEST[sel1];
?>
<html>
	<head>
		<title>인덕닷컴 쇼핑몰</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link href="include/font.css" rel="stylesheet" type="text/css">
		<script language="Javascript" src="include/common.js"></script>
	</head>

<body style="margin:0">
<center>
<!--상단 로고 및 메뉴 ----------------------------------->
	<?
		include "main_top.php";
	?>
<!--상단 로고 및 메뉴 끝----------------------------------->

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">

			<!--  화면 좌측메뉴 시작 (main_left) ------------------------------->
<?
	include "main_left.php";
?>
			<!--  화면 좌측메뉴 끝 (main_left) --------------------------------->
	</td>
	<td width="10"></td>
	<td valign="top">
<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	
		
			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script Language="Javascript">

				function Go_Reply()	{
					form2.action="qa_reply.html";
					form2.submit();
				}

				function Check_Modify()	{
					if (form2.passwd.value)
					{
							form2.action="qa_modify.php";
							form2.submit();
					}
					else
					{
						alert('암호를 입력하세요.');
						form2.passwd.focus();
					}
					return;
				}

				function Check_Delete()	{
					if (form2.passwd.value)
					{
							form2.action="qa_delete.html";
							form2.submit();
					}
					else
					{
						alert('암호를 입력하세요.');
						form2.passwd.focus();
					}
					return;
				}
			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/qa_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/qa_title1.gif" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>
			<?
				$query="select * from qa order by no11";
				$result=mysqli_query($db,$query); //sql 실행
				if (!$result){
					exit("에러 : $query");  //에러조사
				}
				$row=mysqli_fetch_array($result);
				$title=stripslashes($row[title11]);
				$contents=stripslashes($row[contents11]); 
				if ($row[ishtml11]=="0")    // text 인 경우
				{
					$contents=htmlspecialchars($content);
					$contents=nl2br($contents);
				}
				if ($row[ishtml11]=="1")    // html 인 경우
				{
					$contents=str_replace("<", "&lt;",$contents);
					$contents=str_replace(">", "&gt;",$contents);    
				}

				$query1="update qa set count11=count11+1 where no11";
				$result1=mysqli_query($db,$query1); //sql 실행
				if (!$result1){
					exit("에러 : $query1");  //에러조사
				}

				
			?>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">제목</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$row[title11]?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">작성자</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<a href="mailto:aaa@aa.aa.aa"><?=$row[name11]?></a></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">날짜</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$row[writeday11]?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">조회</td>
					<td width="586" class="cmfont">&nbsp;&nbsp;<?=$row[count11]?></td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" background="images/ln1.gif"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">내용</td>
					<td width="586" class="cmfont">
						<p style="padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;"><?=$row[contents11]?></p>
					</td>
				</tr>
				<tr><td colspan="2" height="2"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td height="3" bgcolor="8B9CBF"></td></tr>
				<tr><td height="5" bgcolor="white"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!--  form2 시작 -->
				<form name = "form2" method = "post" action="qa.php">
				<input type="hidden" name="page" value="1">
				<input type="hidden" name="sel1"  value="1">
				<input type="hidden" name="text1" value="">
				<input type="hidden" name="no" value="1">

				<tr>
					<td>
						&nbsp;Password : <input type='password' name='passwd' size="10" maxlength="20" value="" class="cmfont1">			
					</td>
					<td align="right">
							<a href="javascript:Go_Reply();"><img src="images/b_reply.gif" border="0"></a>&nbsp;
							<a href="javascript:Check_Modify();"><img src="images/b_modify.gif" border="0"></a>&nbsp;
							<a href="javascript:Check_Delete();"><img src="images/b_delete.gif" border="0"></a>&nbsp;
							<a href="javascript:history.back()"> <img src="images/b_list.gif" border="0"></a>&nbsp;
					</td>
				</tr>
				</form>
				<!--  form2 끝 -->
			</table>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	
		</td>
	</tr>
</table>
<br><br>

<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->
<?
	include "main_bottom.php";
?>
<!-- 화면 하단 부분 끝 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

&nbsp
</center>

</body>
</html>