<?php
	include "../common.php";

	$no=$_REQUEST[no];
	$state=$_REQUEST[state];

	$query="update jumun set state11=$state where no11=$no";
	
	$result=mysqli_query($db,$query);
	if(!$result){
		exit("에러: $query");
	}
	
	echo("<script>location.href='jumun.php'</script>");
?>
