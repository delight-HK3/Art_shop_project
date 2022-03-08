<?php
	include "../common.php";
	$no=$_REQUEST[no];
	$day1_y=$_REQUEST[day1_y];
	$day1_m=$_REQUEST[day1_m];
	$day1_d=$_REQUEST[day1_d];
	
	$day2_y=$_REQUEST[day2_y];
	$day2_m=$_REQUEST[day2_m];
	$day2_d=$_REQUEST[day2_d];

	$sel1=$_REQUEST[sel1];
	$sel2=$_REQUEST[sel2];
	$text1=$_REQUEST[text1];
	
	$Query="select * from jumun order by jumunday11;"; //sql 정의 (주문 수 전용)
		$Result=mysqli_query($db,$Query); //sql 실행 (주문 수 전용)
		if (!$Result){
			exit("에러: $query");  //에러조사
		}
	$Count=mysqli_num_rows($Result); //전체 레코드 개수 (주문 수 전용)
?>
<html>
	<head>
		<title>쇼핑몰 관리자 페이지</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="include/font.css">
		<script language="JavaScript" src="include/common.js"></script>
		<script>
			function go_update(no,pos)
			{
				state=form1.state[pos].value;
				location.href="jumun_update.php?no="+no+"&state="+state+"&page="+form1.page.value+
					"&sel1="+form1.sel1.value+"&sel2="+form1.sel2.value+"&text1="+form1.text1.value+
					"&day1_y="+form1.day1_y.value+"&day1_m="+form1.day1_m.value+"&day1_d="+form1.day1_d.value+
					"&day2_y="+form1.day2_y.value+"&day2_m="+form1.day2_m.value+"&day2_d="+form1.day2_d.value;

			}
		</script>
	</head>
	<body style="margin:0">
		<center>
			<br><script> document.write(menu());</script>
			<form name="form1" method="post" action="jumun.php">
			<input type="hidden" name="page" value="<?php echo $page?>">
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr height="40">
					<td align="left"  width="70" valign="bottom">&nbsp 주문수 : <font color="#FF0000"><?php echo $Count?></font></td>
					<td align="right" width="730" valign="bottom">
						기간 : 
						<?php	
							if(!$day1_y) $day1_y=date(Y);
							if(!$day1_m) $day1_m=1;
							if(!$day1_d) $day1_d=1;

							if(!$day2_y) $day2_y=date(Y); 
							if(!$day2_m) $day2_m=12;
							if(!$day2_d) $day2_d=31;

							$day1 = $day1_y."-".$day1_m."-".$day1_d;
							$day2 = $day2_y."-".$day2_m."-".$day2_d;

							if(!$sel1) $sel1=0; 
							if(!$sel2) $sel2=1;

							$k=0;
							$s[$k] = "jumunday11 between '$day1' and '$day2'";  
							$k++;

							if ($sel1 != 0){ 
								$s[$k] = "state11=" . $sel1;  
								$k++; 
							}
							if ($text1){
								if ($sel2==1){//주문번호 
									$s[$k] = "no11 like '%" . $text1 . "%'"; 
									$k++; 
								}
								else if ($sel2==2){//고객명
									$s[$k] = "o_name11 like '%" . $text1 . "%'"; 
									$k++; 
								}
								else if ($sel2==3){//상품명
									$s[$k] = "product_names11 like '%" . $text1 . "%'"; 
									$k++; 
								}
							}
							if ($k> 0){
								$tmp=implode(" and ", $s); 
								$tmp = " where " . $tmp;
							}
							$query="select * from jumun " . $tmp . " order by no11 desc";
							$result=mysqli_query($db,$query); //sql 실행
							if (!$result){
								exit("에러: $query");  //에러조사
							}
							$count=mysqli_num_rows($result);
						?>
						<input type="text" name="day1_y" size="4" value="<?php echo $day1_y?>">
						<?php
						echo("<select name='day1_m'>");
								for($i=1;$i<=12;$i++){//시작월
									if($i==$day1_m){
										echo("<option value='$i' selected>$i</option>");
									}
									else{
										echo("<option value='$i'>$i</option>");
									}
								}
							echo("</select>&nbsp");

							echo("<select name='day1_d'>");
								for($i=1;$i<=31;$i++){//시작일
									if($i==$day1_d){
										echo("<option value='$i' selected>$i</option>");
									}
									else{
										echo("<option value='$i'>$i</option>");
									}
								}
							echo("</select> -");
						?>

						<input type="text" name="day2_y" size="4" value="<?php echo $day2_y?>">
						<?php
							echo("<select name='day2_m'>");
								for($i=1;$i<=12;$i++){//끝월
									if($i==$day2_m){
										echo("<option value='$i' selected>$i</option>");
									}
									else{
										echo("<option value='$i'>$i</option>");
									}
								}
							echo("</select>&nbsp");

							echo("<select name='day2_d'>");
								for($i=1;$i<=31;$i++){//끝일
									if($i==$day2_d){
										echo("<option value='$i' selected>$i</option>");
									}
									else{
										echo("<option value='$i'>$i</option>");
									}
								}
							echo("</select> &nbsp");

							echo("<select name='sel1'>");
								for($i=0;$i<$n_state;$i++){//상품상태 출력
									if ($sel1==$i){
										echo("<option value='$i' selected>$a_state[$i]</option>");
									}
									else{
										echo("<option value='$i'>$a_state[$i]</option>");
									}
								}
							echo("</select> &nbsp");
							echo("<select name='sel2'>");
								for($i=1;$i<$n_order;$i++){//상품상태 출력
									if ($sel2==$i){
										echo("<option value='$i' selected>$a_order[$i]</option>");
									}
									else{
										echo("<option value='$i'>$a_order[$i]</option>");
									}
								}
							echo("</select>");
						?>
						<input type="text" name="text1" size="10" value="<?php echo $text1?>">&nbsp
						<input type="button" value="검색" onclick="javascript:form1.submit();"> &nbsp;
					</td>
				</tr>
				</tr><td height="5" colspan="2"></td></tr>
			</table>

			<table width="800" border="1" cellpadding="0" style="border-collapse:collapse">
				<tr bgcolor="#CCCCCC" height="23"> 
					<td width="70"  align="center">주문번호</td>
					<td width="70"  align="center">주문일</td>
					<td width="250" align="center">상품명</td>
					<td width="50"  align="center">제품수</td>	
					<td width="70"  align="center">총금액</td>
					<td width="65"  align="center">주문자</td>
					<td width="50"  align="center">결재</td>
					<td width="135" align="center" colspan="2">주문상태</td>
					<td width="50"  align="center">삭제</td>
				</tr>
				<?php
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
				?>
				<?php

					for($i=0; $i<$page_last; $i++){
						$row=mysqli_fetch_array($result);
						$row1=mysqli_fetch_array($result1);

						if($row[pay_method11] == 0){
							$pay_method = "카드";
						}
						if($row[pay_method11] == 1){
							$pay_method = "무통장";
						}

						$total = number_format($row[total_cash11]);
						echo("<tr bgcolor='#F2F2F2' height='23'>");
							echo("<td width='70'  align='center'><a href='jumun_info.php?no=$row[no11]'>$row[no11]</a></td>
							<td width='70'  align='center'>$row[jumunday11]</td>
							<td width='250' align='left'>&nbsp;$row[product_names11]</td>	
							<td width='40' align='center'>$row[product_nums11]</td>	
							<td width='70'  align='right'>$total&nbsp</td>	
							<td width='65'  align='center'>$row[o_name11]</td>	
							<td width='50'  align='center'>$pay_method</td>");	

							echo("<td width='85' align='center' valign='bottom'>");
								$color="black";
								if($row[state11]==5){
									$color="blue";  // 주문완료 
								}
								if($row[state11]==6){
									$color="red";   // 주문취소
								}
								echo("<select name='state' style='font-size:9pt; color:$color'>");
								for($j=1; $j<$n_state; $j++){
									if ($row[state11]==$j){
										echo("<option value='$j' selected>$a_state[$j]</option>");//value 값은? 
									}
									else{
										echo("<option value='$j'>$a_state[$j]</option>");
									}
								}
								echo("</select>&nbsp");

								echo("<td width='50' align='center'>
									<a href='javascript:go_update($row[no11],$i);'><img src='images/b_edit1.gif' border='0'></a>
								</td>");

								echo("<td width='50' align='center'>
									<a href='jumun_delete.php?no=$row[no11]' onclick='javascript:return confirm(\"삭제할까요 ?\");'><img src='images/b_delete1.gif' border='0'></a>
								</td>");

							echo("</td>");

						echo("</tr>");
					}
					echo("<table width='570' border='0' cellspacibg='0' cellpadding='0'><tr><td height='20'	align='center'>");

					$blocks = ceil($pages/$page_block);
					$block = ceil($page/$page_block);
					$page_s = $page_block * ($block-1);
					$page_e = $page_block * $block;
						echo("<table width='400' border='0' cellspacibg='0' cellpadding='0'><tr><td height='20'	align='center'>");

					if($blocks <= $block) $page_e = $pages;

					if($block > 1){
						$tmp = $page_s;
						echo("<a href='jumun.php?page=$tmp&no=$no&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m& day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>
								<img src='../images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
					}

					for($i=$page_s+1; $i<=$page_e; $i++)
					{
						if($page==$i){
							echo("<font color='red'><b>$i</b></font>&nbsp;");
						}
						else{
							echo("<a href='jumun.php?page=$i&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>[$i]</a>&nbsp");
						}
					}
					if($block < $blocks){
						$tmp=$page_e+1;
						echo("<a href='jumun.php?page=$tmp&no=$no&day1_y=$day1_y&day1_m=$day1_m&day1_d=$day1_d&day2_y=$day2_y&day2_m=$day2_m&day2_d=$day2_d&sel1=$sel1&sel2=$sel2&text1=$text1'>
								<img src='../images/i_next.gif' align='absmiddle' border='0'></a>&nbsp");
					}
					echo("</td>
							</tr>
								</table>");
				?>
			</table>
			<input type="hidden" name="state">
			</form>
		</center>
	</body>
</html>
