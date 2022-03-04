<?php
	include "common.php";
	$cart=$_COOKIE[cart]; 
	$n_cart=$_COOKIE[n_cart];
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];

	$today=date("ymd");
	
	$o_name=$_REQUEST[o_name];
	$o_tel1=$_REQUEST[o_tel1];
	$o_tel2=$_REQUEST[o_tel2];
	$o_tel3=$_REQUEST[o_tel3];

	$o_phone1=$_REQUEST[o_phone1];
	$o_phone2=$_REQUEST[o_phone2];
	$o_phone3=$_REQUEST[o_phone3];

	$o_email=$_REQUEST[o_email];
	$o_zip=$_REQUEST[o_zip];
	$o_addr=$_REQUEST[o_addr];
	
	$r_name=$_REQUEST[r_name];
	$r_tel1=$_REQUEST[r_tel1];
	$r_tel2=$_REQUEST[r_tel2];
	$r_tel3=$_REQUEST[r_tel3];

	$r_phone1=$_REQUEST[r_phone1];
	$r_phone2=$_REQUEST[r_phone2];
	$r_phone3=$_REQUEST[r_phone3];

	$r_email=$_REQUEST[r_email];
	$r_zip=$_REQUEST[r_zip];
	$r_addr=$_REQUEST[r_addr];
	$memo=$_REQUEST[memo];
	
	$pay_method=$_REQUEST[pay_method];
	$card_halbu=$_REQUEST[card_halbu];
	$card_kind=$_REQUEST[card_kind];

	$bank_kind=$_REQUEST[bank_kind];
	$bank_sender=$_REQUEST[bank_sender];

	$o_tel = sprintf("%-2s%-4s%-4s", $o_tel1, $o_tel2, $o_tel3);
	$o_phone = sprintf("%-3s%-4s%-4s", $o_phone1, $o_phone2, $o_phone3);

	$r_tel = sprintf("%-2s%-4s%-4s", $r_tel1, $r_tel2, $r_tel3);
	$r_phone = sprintf("%-3s%-4s%-4s", $r_phone1, $r_phone2, $r_phone3);
	
	$query="select no11 from jumun where jumunday11 = curdate() order by no11 desc limit 1;";
	$result=mysqli_query($db,$query); //sql 실행
	if (!$result){
		exit("에러: $query");  //에러조사
	}
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);

	if($count>0){
		$jumun_no = date("ymd").substr("$row[no11]",-4)+1; //주문번호
		$card_okno= $jumun_no;
	}
	else{
		$jumun_no = date("ymd")."0001"; //주문번호
		$card_okno= $jumun_no;
	}
	
	$total=0;

	$product_nums = 0;
	$product_names = "";

	if (!$n_cart){ 
		$n_cart=0;
	}
	for ($i=1; $i<=$n_cart; $i++)
	{
	   if ($cart[$i])
	   {
		   	list($product_no, $num, $opts1, $opts2)=explode("^", $cart[$i]);//num = 수량
			
			$query1="select * from product where no11=$product_no";
			$result1=mysqli_query($db,$query1); //sql 실행
			if (!$result1){
				exit("에러 : $query1");  //에러조사
			}
			$row1=mysqli_fetch_array($result1);
			
			if($row1[discount11] > 0){
				$price = round($row1[price11]*(100-$row1[discount11])/100, -3);				
			}
			else if($row1[discount11]==0){
				$price = $row1[price11];
			}
			$product_no=$row1[no11];//제품번호
			$cash=$price * $num;//제품총금액
			$saleoption=$row1[icon_sale11];//할인여부
			$discount=$row1[discount11];//할인율
			$opts1_1=$opts1;//소옵션번호1
			$opts2_2=$opts2;//소옵션번호2
			
			$query2="insert into jumuns (jumun_no11,product_no11,num11,price11,cash11,discount11,opts1_no11,opts2_no11)
						value ('$jumun_no','$product_no','$num','$price','$cash','$discount','$opts1','$opts2');";
			$result2=mysqli_query($db,$query2); //sql 실행
			if (!$result2){
				exit("에러 : $query2");  //에러조사
			}
			
			setcookie("cart[$i]",""); //장바구니 cookie에서 제품 정보 삭제
			$total = $total + $cash;
			$product_nums = $product_nums + 1;
			if ($product_nums==1){
			   $product_names = $row1[name11];
		    }
		}
	}
	if ($product_nums>1){      // 제품수가 2개 이상인 경우만, "외 ?" 추가
		$tmp = $product_nums - 1;
		$product_names = $product_names . " 외 " . $tmp;
	}
	
	if ($total < $max_baesongbi){ //배송비가 있는 경우
		$query3="insert into jumuns (jumun_no11,product_no11,num11,price11,cash11,discount11,opts1_no11,opts2_no11)
						value ('$jumun_no','0','1','$baesongbi','$baesongbi','0','0','0');";
		$result3=mysqli_query($db,$query3); //sql 실행
		if (!$result3){
			exit("에러 : $query3");  //에러조사
		}
		$total = $total + $baesongbi;
	}
	
	if($cookie_no){
		$member_no = 1;
	}
	else{
		$member_no = 0;
	}
	$query2="insert into jumun ( no11, member_no11, jumunday11, product_names11, product_nums11, 
								  o_name11, o_tel11, o_phone11, o_email11, o_zip11, o_juso11, 
								  r_name11, r_tel11, r_phone11, r_email11, r_zip11, r_juso11, memo11,
								  pay_method11, card_okno11, card_halbu11, card_kind11, bank_kind11, bank_sender11,
								  total_cash11, state11) value 
								  ('$jumun_no','$member_no','$today','$product_names','$product_nums',
								  '$o_name','$o_tel','$o_phone','$o_email','$o_zip','$o_addr',
								  '$r_name','$r_tel','$r_phone','$r_email','$r_zip','$r_addr', '$memo',
								  '$pay_method','$card_okno','$card_halbu','$card_kind','$bank_kind','$bank_sender',
								  '$total','1');";
	$result2=mysqli_query($db,$query2); //sql 실행
		if (!$result2){
			exit("에러 : $query2");  //에러조사
	}
	setcookie("n_cart", 0);
	echo("<script>location.href='order_ok.php'</script>");
?>
