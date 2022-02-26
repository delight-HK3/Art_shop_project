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
				function Search_qa()	
				{
					form2.page.value=1;
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
			
			<?
				if(!$sel1){
					$sel1=1;
				}
				if(!$text){
					$query="select * from qa order by no11";
				}
				else{
					if ($sel1==1){ // 제목
						$query="select * from where title11 like '%$text1%' order by pos1_11 desc, pos2_11;";
					}
					else if ($sel1==2){// 내용
						$query="select * from where content11 like '%$text1%' order by pos1_11 desc, pos2_11;";
					}
					else{// 작성자
						$query="select * from where name11 like '%$text1%' order by pos1_11 desc, pos2_11;";
					}
				}
				$result=mysqli_query($db,$query); //sql 실행
				if (!$result){
					exit("에러 : $query");  //에러조사
				}
				$count=mysqli_num_rows($result);
			?>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/qa_title1.gif" border="0"></td>
				</tr>
				<tr>
					<td align="right" class="cmfont">
						<font color="#686868">게시물 :</font> <?=$count?> &nbsp;&nbsp; <font color="#686868">페이지:</font>1/100
					</td>
				</tr>
			</table>
	
			<table border="0" cellpadding="0" cellspacing="0" width="690" class="cmfont">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>
				<tr bgcolor="F2F2F2" >
					<td width="90" height="25" align="center">번호</td>
					<td align="center">제목</td>
					<td width="90" align="center">작성자</td>
					<td width="90" align="center">작성일</td>
					<td width="90" align="center">조회</td>
				</tr>
				<?
					$page=$_REQUEST[page];
					//----------------------------------------------------//
					if(!$page)$page=1;
					$pages = ceil($count/$page_line); //전체 페이지수
					//--현재 페이지가 몇 번째 자료부터 시작하는지 계산--//
					$first = 1;
					if($count>0) $first = $page_line*($page-1); 

					//--현재 페이지에 표시할 수 있는 줄 수<hr>--//
					$page_last=$count-$first;
					if($page_last>$page_line)$page_last=$page_line; // 현재 페이지 line수
					if($count>0) mysqli_data_seek($result,$first); // 현재 페이지 첫줄로 이동
					
					$row=mysqli_fetch_array($result);
					echo("<tr><td height='1' bgcolor='#DEDCDD'colspan='5'></td></tr>
							<tr height='25' bgcolor='#FFFFFF'>	
								<td width='90' align='center'><font color='#686868'>$row[no11]</font></td>	
								<td><a href='qa_read.php?no=$row[no11]&page=$page&sel1=$sel1&text1=$text'><font color='#4186C7'>$row[title11]</font></a></td>");
					$n = strlen($row[pos2_11]);
					if($n==1){
						echo("<td width='90' align='center'><font color='#686868'>$row[name11]</font></td>	
							</tr>");	
					}
					else{
						for($j=0;$j<$n-2;$j++){
							echo("<img src='images/i_re.gif' border='0' align='absmiddle'>&nbhref='qa_read.php?no=$row[no11]&page=$page&sel1=$sel&text1=$text'><font color='#4186C7'>$row[title11]</font></a>
							<td width='90' align='center'><font color='#686868'>$row[name11]</font></td>	
							</tr>");
						}
					}
					echo("<td width='90' align='center'><font color='#686868'>$row[name11]</font></td>	
						  <td width='90' align='center'><font color='#686868'>$row[writeday11]</font></td>	
						  <td width='90' align='center'><font color='#686868'>$row[count11]</font></td>");
					echo("</tr>");

					echo("<tr>
						<td colspan='5' height='2' bgcolor='8B9CBF'></td>
					</tr>");
				?>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!-- form2 시작 -->
				<form name="form2" method="post" action="qa.php">
				<input type="hidden" name="page" value="<?=$page?>">
				<tr>
					<td height="40">&nbsp;
						<select name="sel1" class="cmfont1">
							<option value="1">제목</option>
							<option value="2">내용</option>
							<option value="3">작성자</option>
						</select>
						<input type='text' name='text1' size="10" maxlength="20" value="" class="cmfont1">			
						<input type="image" src="images/i_search.gif" align="absmiddle" border="0" onclick="javascript:Search_qa();">
					</td>
					<td align="right">
						<a href="qa_new.php"><img src="images/b_new.gif" border="0"></a>&nbsp;
					</td>
				</tr>
				<?
				echo("<table width='570' border='0' cellspacibg='0' cellpadding='0'><tr><td height='20'	align='center'>");

					$blocks = ceil($pages/$page_block);
					$block = ceil($page/$page_block);
					$page_s = $page_block * ($block-1);
					$page_e = $page_block * $block;
						echo("<table width='400' border='0' cellspacibg='0' cellpadding='0'><tr><td height='20'	align='center'>");

					if($blocks <= $block) $page_e = $pages;

					if($block > 1){
						$tmp = $page_s;
						echo("<a href='qa.php?page=$tmp&no=$no&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m& day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>
								<img src='../images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
					}

					for($i=$page_s+1; $i<=$page_e; $i++)
					{
						if($page==$i){
							echo("<font color='red'><b>$i</b></font>&nbsp;");
						}
						else{
							echo("<a href='qa.php?page=$i&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>[$i]</a>&nbsp");
						}
					}
					if($block < $blocks){
						$tmp=$page_e+1;
						echo("<a href='qa.php?page=$tmp&no=$no&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>
								<img src='../images/i_next.gif' align='absmiddle' border='0'></a>&nbsp");
					}
					echo("</td>
							</tr>
								</table>");
				?>
				</form>
				<!-- form2 끝 -->
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