<?php
	include "../common.php";

	$no=$_REQUEST[no];

	$query1="delete from jumun where no11=$no;";
	$result1=mysqli_query($db,$query1);
	if(!$result1){
		exit("에러: $query1");
	}
	$query2="delete from jumuns where jumun_no11=$no;";
	$result2=mysqli_query($db,$query2);
	if(!$result2){
		exit("에러: $query2");
	}
	echo("<script>location.href='jumun.php'</script>");
?>
