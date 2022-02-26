<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	$title=$_REQUEST[title];
	$name=$_REQUEST[name];
	$passwd=$_REQUEST[passwd];
	$email=$_REQUEST[email];
	$yn_text=$_REQUEST[yn_text];
	$content=$_REQUEST[content];
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

			function Check_Value() {
				
				if (!form2.title.value) {
						alert('글제목을 입력하여 주십시요');
						form1.title.focus();
						return;
				}
				
			  if (!form2.name.value) {
						alert('이름을 입력하여 주십시요');
						form2.name.focus();
						return;
				}
				
			  if (!form2.passwd.value) {
						alert('암호를 입력하여 주십시요');
						form2.passwd.focus();
						return;
			  }
			  form2.submit();
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

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>

				<!--  form2 시작 -->
				<form name="form2" method="post" action="qa_insert.php">
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">제목</td>
						<td width="586">
							&nbsp;&nbsp;<input type="text" name="title" maxlength="50" size="80" class="cmfont1">
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr><td colspan="2" background="images/ln1.gif"></td></tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">작성자</td>
						<td width="586">
							&nbsp;&nbsp;<input type="text" name="name" value="" size="15" class="cmfont1"><br>
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr><td colspan="2" background="images/ln1.gif"></td></tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">Password</td>
						<td width="586">
							&nbsp;&nbsp;<input type="password" name="passwd" value="" size="10" class="cmfont1"><br>
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr><td colspan="2" background="images/ln1.gif"></td></tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">E-Mail</td>
						<td width="586">
							&nbsp;&nbsp;<input type="text" name="email" value="" size="30" class="cmfont1"><br>
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr><td colspan="2" background="images/ln1.gif"></td></tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">형식</td>
						<td width="586" class="cmfont">
							&nbsp;&nbsp;<input type="radio" name="yn_text" value="Y" checked> Text <input type="radio" name="yn_text" value="N"> Html</font>
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr><td colspan="2" background="images/ln1.gif"></td></tr>
					<tr><td colspan="2" height="2"></td></tr>
					<tr>
						<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">내용</td>
						<td width="586">
							&nbsp;&nbsp;<textarea name="content" rows="20" cols="85" class="cmfont1"></textarea>
						</td>
					</tr>
					<tr><td colspan="2" height="2"></td></tr>
				
				<!--  form2 끝 -->
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td height="3" bgcolor="8B9CBF"></td></tr>
				<tr><td height="5" bgcolor="white"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td align="right">
						<a href="javascript:Check_Value()"><img src="images/b_save.gif" border="0"></a>&nbsp;
						<a href="javascript:history.back()"><img src="images/b_list.gif" border="0"></a>
					</td>
					<td width="50"></td>
				</tr>
			</table>
</form>
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