<?
	include "common.php";
	$pwd1=$_REQUEST[pwd1];
	$pwd2=$_REQUEST[pwd2];
	
	$no=$_REQUEST[no];

	$query="update member set pwd11='$pwd1' where no11='$no'";
	$result1=mysqli_query($db,$query); //sql 실행
	if (!$result1){
		exit("에러: $query");  //에러조사
	}
	echo("<script>location.href='member_login.php'</script>");
?>