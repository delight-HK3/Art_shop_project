<?
	error_reporting(E_ALL&~E_NOTICE&~E_WARNING);
	ini_set("display_errors",1);
	
	$db= mysqli_connect("localhost","shop11","1234","shop11");
	if (!$db){
		exit("DB연결에러");
	}
	
	$a_status=array("상품상태","판매중","판매중지","품절");
	$n_status=count($a_status);

	$a_icon=array("아이콘","New","Hit","Sale");
	$n_icon=count($a_icon);

	$a_text1=array("", "제품이름","제품번호");   // for문의 $i는 1부터 시작
	$n_text1=count($a_text1);

	$a_idname=array("전체","이름","ID");
	$n_idname=count($a_idname); 
	
	$a_menu=array("분류선택","물감","색연필","붓","마카","용지","부재료");
	$n_menu=count($a_menu); //분류 개수
	
	$a_state=array("전체","주문신청","주문확인","입금확인", "배송중", "주문완료","주문취소");
	$n_state=count($a_state);
	
	$a_order=array("","주문번호","고객명","제품명");
	$n_order=count($a_order); 

	$admin_id="admin";
	$admin_pw="1234";
	
	$page_line =5; //페이지당 line 수
	$page_block=5; //블록당 page 수

	$page_line2 =10; //product.php 페이지당 line 수
	$page_block2=5; //product.php 블록당 page 수

	$baesongbi=2500; //최소 배송비
	$max_baesongbi=100000; // 최대 배송비
?>