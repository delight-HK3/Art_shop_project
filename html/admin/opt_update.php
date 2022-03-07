<?php
	include "../common.php";

	$no=$_REQUEST[no];
	$name=$_REQUEST[name];
	
	$query="update opt set name11='$name' where no11=$no;";
	$result=mysqli_query($db,$query);
	if(!$result){
		exit("에러: $query");
	}
	echo("<script>location.href='opt.php'</script>");
?>
