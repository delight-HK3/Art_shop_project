<?
	@extract($_POST);
	@extract($_GET);
	@extract($_COOKIE);
	include "common.php";

	$kind = $_REQUEST [kind];
	$cart=$_COOKIE[cart]; //��ٱ��� ��ǰ ���� ��Ű
	$n_cart=$_COOKIE[n_cart]; //��ٱ��� ��ǰ īƮ �ѹ� ��Ű
	
	if (!$n_cart){
		$n_cart=0; //��ٱ��� ��ǰ���� �ʱ�ȭ
	}
	switch($kind){
		case "insert":{
			$n_cart++;
			$cart[$n_cart]=implode("^", array($no, $num, $opts1, $opts2));
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			setcookie("n_cart",$n_cart);
			break;
		}
		case "order":{
			$n_cart++;
			$cart[$n_cart]=implode("^", array($no, $num, $opts1, $opts2));
			setcookie("cart[$n_cart]",$cart[$n_cart]);
			setcookie("n_cart",$n_cart);
			break;
		}	
		case "delete":{
			setcookie("cart[$pos]","");
			break;
		}
		case "update":{
			list($no, $num, $opts1, $opts2)=explode("^",$cart[$pos]);
			$cart[$pos]=implode("^", array($no, $_GET['num'], $opts1, $opts2));
			setcookie("cart[$pos]",$cart[$pos]);
			break;
		}
		case "deleteall":{
			for($i=1;$i<=$n_cart;$i++)
			{ 
				if ($cart[$i]){
					setcookie("cart[$i]","");
				}
			}
			setcookie("n_cart", 0);
			break;
		}
	}
	if($kind=="order"){
		echo("<script>location.href='order.php'</script>");
	}
	else{
		echo("<script>location.href='cart.php'</script>");
	}
?>