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

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="20"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title1.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td colspan="5" height="3" bgcolor="#0066CC"></td></tr>
				<tr bgcolor="F2F2F2">
					<td width="80" height="30" align="center">주문일</td>
					<td width="100"  align="center">주문번호</td>
					<td width="290" align="center">제품명</td>
					<td width="100" align="center">금액</td>
					<td width="115" align="center">주문상태</td>
				</tr>
				<tr><td colspan="5" bgcolor="DEDCDD"></td></tr>

				<tr>
					<td height="30" align="center"><font color="686868">2007-01-02</font></td>
					<td align="center">
						<a href="jumun_info.html?no=13&page=1"><font color="#0066CC">200701020001</font></a>
					</td>
					<td><font color="686868">파란 브라우스 (외 2)</font></td>
					<td align="right"><font color="686868">20,000 원</font></td>
					<td align="center"><font color="#0066CC">주문신청</font></td>
				</tr>
				<tr><td colspan="5" background="images/line_dot.gif"></td></tr>

				<tr>
					<td height="30" align="center"><font color="686868">2007-01-01</font></td>
					<td align="center">
						<a href="jumun_info.html?no=10&page=1"><font color="#0066CC">200701010011</font></a>
					</td>
					<td><font color="686868">하얀 브라우스 (외 1)</font></td>
					<td align="right"><font color="686868">30,000 원</font></td>
					<td align="center"><font color="#0066CC">배송중</font></td>
				</tr>
				<tr><td colspan="5" background="images/line_dot.gif"></td></tr>

				<tr>
					<td height="30" align="center"><font color="686868">2007-01-01</font></td>
					<td align="center">
						<a href="jumun_info.html?no=4&page=1"><font color="#0066CC">200701010005</font></a>
					</td>
					<td><font color="686868">파란 브라우스 (외 1)</font></td>
					<td align="right"><font color="686868">30,000 원</font></td>
					<td align="center"><font color="#D06404">주문취소</font></td>
				</tr>
				<tr><td colspan="5" background="images/line_dot.gif"></td></tr>

				<tr>
					<td height="30" align="center"><font color="686868">2007-01-01</font></td>
					<td align="center">
						<a href="jumun_info.html?no=1&page=1"><font color="#0066CC">200701010001</font></a>
					</td>
					<td><font color="686868">실크 브라우스</font></td>
					<td align="right"><font color="686868">30,000 원</font></td>
					<td align="center"><font color="#686868">주문완료</font></td>
				</tr>
				<tr><td colspan="5" background="images/line_dot.gif"></td></tr>

				<tr><td colspan="5" height="2" bgcolor="#0066CC"></td></tr>
			</table>
			<br>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td height="30" class="cmfont" align="center">
						<img src="images/i_prev.gif" align="absmiddle" border="0"> 
						<font color="#FC0504"><b>1</b></font>&nbsp;
						<a href="jumun.html?page=2"><font color="#7C7A77">[2]</font></a>&nbsp;
						<a href="jumun.html?page=3"><font color="#7C7A77">[3]</font></a>&nbsp;
						<img src="images/i_next.gif" align="absmiddle" border="0">
					</td>
				</tr>
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
