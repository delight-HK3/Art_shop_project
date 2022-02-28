<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "../common.php";
	$no=$_REQUEST[no];

	$query="select * from jumun where no11=$no;";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$row=mysqli_fetch_array($result);
?>
<html>
<head>
<title>쇼핑몰 관리자 페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>
<?
	$card_okno = "";
	$card_halbu = "";
	$card_kind = "";

	$bank_kind = "";
	$bank_sender = "";

	if ($row[member_no11] == 0){ 
		$member_no="비회원";
	}
	else if($row[member_no11] == 1) {
		$member_no="회원";
	}
	if($row[state11] == 1) $state = "주문신청";
	else if($row[state11] == 2) $state = "주문확인";
	else if($row[state11] == 3) $state = "입금확인";
	else if($row[state11] == 4) $state = "배송중";
	else if($row[state11] == 5) $state = "주문완료";
	else if($row[state11] == 6) $state = "주문취소";

	if($row[pay_method11] == 0){
		$pay = "카드";
		if($row[card_kind11] == 1) $card_kind = "국민";
		if($row[card_kind11] == 2) $card_kind = "신한";
		if($row[card_kind11] == 3) $card_kind = "우리";
		if($row[card_kind11] == 4) $card_kind = "하나";
		
		if($row[card_halbu11] == 0) $card_halbu = "일시불";
		else $card_halbu=$row[card_halbu11]. " 개월";
		$card_okno=$row[card_okno11] ;
	}
	if($row[pay_method11] == 1){
		$pay = "무통장";
		if($row[bank_kind11] == 1){
			$bank_kind = "국민 000-00000-0000";
		}
		if($row[bank_kind11] == 2){
			$bank_kind = "신한 000-00000-0000";
		}
		$bank_sender = $row[bank_sender11];
	}

	$o_tel1=trim(substr($row[o_tel11],0,3));
	$o_tel2=trim(substr($row[o_tel11],3,4));
	$o_tel3=trim(substr($row[o_tel11],7,4));
	$o_tel=$o_tel1."-".$o_tel2."-".$o_tel3;
	
	$o_phone1=trim(substr($row[o_phone11],0,3));
	$o_phone2=trim(substr($row[o_phone11],3,4));
	$o_phone3=trim(substr($row[o_phone11],7,4));
	$o_phone=$o_phone1."-".$o_phone2."-".$o_phone3;

	$r_tel1=trim(substr($row[r_tel11],0,3));
	$r_tel2=trim(substr($row[r_tel11],3,4));
	$r_tel3=trim(substr($row[r_tel11],7,4));
	$r_tel=$r_tel1."-".$r_tel2."-".$r_tel3;
	
	$r_phone1=trim(substr($row[r_phone11],0,3));
	$r_phone2=trim(substr($row[r_phone11],3,4));
	$r_phone3=trim(substr($row[r_phone11],7,4));
	$r_phone=$r_phone1."-".$r_phone2."-".$r_phone3;
?>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문번호</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">&nbsp;<font size="3"><b><?=$row[no11]?> (<font color="blue"><?=$state?></font>)</b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문일</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[jumunday11]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_name11]?> (<?=$member_no?>)</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_tel?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_email11]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$row[o_zip11]?>) <?=$row[o_juso11]?></td>
	</tr>
	</tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_name11]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_tel?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_email11]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_phone?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$row[o_zip11]?>) <?=$row[o_juso11]?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">메모</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?=$row[memo11]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">지불종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$pay?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드승인번호 </font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$card_okno?>&nbsp</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드 할부</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$card_halbu?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$card_kind?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">무통장</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$bank_kind?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">입금자이름</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$bank_sender?></td>
	</tr>
</table>
<br>
<?
	$query="select product.name11 as n1, opts1.name11 as n2, opts2.name11 as n3,
	  jumuns.price11 as price1, jumuns.num11 as num,
	  jumuns.discount11 as discount1, jumuns.product_no11 as product_no
	  from ((jumuns left join product on jumuns.product_no11=product.no11)
           left join opts as opts1 on jumuns.opts1_no11=opts1.no11)
           left join opts as opts2 on jumuns.opts2_no11=opts2.no11
			where jumuns.jumun_no11=$no";

	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result); //전체 레코드 개수
?>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr bgcolor="#CCCCCC"> 
		<td width="340" height="20" align="center"><font color="#142712">상품명</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">수량</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">단가</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">금액</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">할인</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션1</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션2</font></td>
	</tr>
	<?	
		for($i=0; $i<$count; $i++){
			$row=mysqli_fetch_array($result);
			$price = number_format($row[price1]);
			if($row[product_no] > 0){
				$productname = $row[n1];
			}
			else if($row[product_no] == 0){
				$productname = "택배비";
			}

			if($row[discount1] > 0 ){
				$discount = "$row[discount1]" . " %";
				$disprice = $row[price1];
				$Lastprice = number_format($disprice * $row[num]);
				$total = $total + ($disprice * $row[num]);
			}
			else{
				$discount = "";
				$Lastprice = number_format($row[price1] * $row[num]);
				$total = $total + ($row[price1] * $row[num]);
			}
			$Lasttotal = number_format($total);
			echo("<tr bgcolor='#EEEEEE' height='20'>	
				<td width='340' height='20' align='left'>$productname</td>	
				<td width='50'  height='20' align='center'>$row[num]</td>	
				<td width='70'  height='20' align='right'>$price</td>	
				<td width='70'  height='20' align='right'>$Lastprice</td>	
				<td width='50'  height='20' align='center'>$discount</td>	
				<td width='60'  height='20' align='center'>$row[n2]</td>	
				<td width='60'  height='20' align='center'>$row[n3]</td>	
			</tr>");
			
		}
	?>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
	  <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">총금액</font></td>
		<td width="700" height="20" bgcolor="#EEEEEE" align="right"><font color="#142712" size="3"><b><?=$Lasttotal?></b></font> 원&nbsp;&nbsp</td>
	</tr>
</table>

<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="button" value="이 전 화 면" onClick="javascript:history.back();">&nbsp
			<input type="button" value="프린트" onClick="javascript:print();">
		</td>
	</tr>
</table>

</center>

<br>
</body>
</html>
